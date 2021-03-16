<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if ( session('success')){
            toast(session('success'),'success');
        }
        $posts = Post::orderBy('id','desc')->get();
        return view('posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','desc')->get();
        return view('posts.create')->with(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           // dd($request->all());
           $this->validate($request, [
            'title'             => 'required|string',
            'short_description' => 'nullable|string',
            'long_description'  => 'nullable|string',
            'category_id'       => 'required',
            'file'              => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'files.*'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if ($request->hasFile('file')) {
            // Get File Name With Extenison
            $fileNameWithEex = $request->file('file')->getClientOriginalName();
            // Get fileName Only
            $fileName = pathinfo($fileNameWithEex , PATHINFO_FILENAME);
            // Get FileExtenison
            $extension = $request->file('file')->getClientOriginalExtension();
            // fileName To Store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            // Upload file
            $folder = '/public/post/image';
            $path = $request->file('file')->storeAs($folder, $fileNameToStore);
            // dd($path);
        }else{
            $fileNameToStore = 'No Images To Store In .jpg';
        } 
        if ($request->hasFile('files')) {
            $files = [];
            if($request->hasfile('files')){
                foreach($request->file('files') as $file){
                    $name = time().rand(1,100).'.'.$file->extension();
                    $folder = '/public/post/images';
                    $file->storeAs($folder, $name);  
                    $files[] = $name;  
                }
             }
        }else{
            $files = 'No Images To Store In .jpg';
        }
        
        $post = new Post();
        $post->title             =  $request->input('title');
        $post->short_description =  $request->input('short_description');
        $post->long_description  =  $request->input('long_description');
        $post->category_id       =  $request->input('category_id');
        $post->file              =  $fileNameToStore;
        $post->files             =  json_encode($files);
        $post->path             =  json_encode($files);
        $post->active            =  $request->active == null ? '0' : 1;
        $post->user_id           =  auth()->user()->id ;
        $post->save();
        return redirect(route('posts.index'))->with('success' ,'Post Has Been Inserted');
    }

    public function inActivePost(Post $post)
    { 
        $post = Post::findOrFail($post->id);
        if ($post && $post->active == 1 ) {
        $post->active = 0;  
        $post->update();
        return redirect(route('posts.index'))->with('success', 'Post Has Been In Active'); 
        }
 
    }

    public function activePost(Post $post)
    { 
        $post = Post::findOrFail($Post->id);
        if ($post && $post->active == 0 ) {
        $post->active = 1;  
        $post->update();
        return redirect(route('posts.index'))->with('success' ,'Post Has Been Actived'); 
        }
 
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::findOrFail($post->id);
        if ($post) {
            return view('posts.show')->with(['post' => $post]);;
        }
        return  back()->with(['message' => 'Post Not Found']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::findOrFail($post->id);
        if ($post) {
            $post->delete();
            return redirect(route('posts.index'))->with('success', 'Post Has Been Deleted');
        }
        return  back()->with(['message' => 'Post Not Found']);
    }
}
