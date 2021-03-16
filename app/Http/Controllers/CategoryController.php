<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
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
        $categories = Category::orderBy('id','desc')->get();
        return view('categories.index')->with(['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'file'        => 'nullable|image',
            'files'       => 'nullable'
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
            $folder = '/public/category/image';
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
                    $folder = '/public/category/images';
                    $file->storeAs($folder, $name);  
                    $files[] = $name;  
                }
             }
        }else{
            $files = 'No Images To Store In .jpg';
        }
        $category = new Category();
        $category->title       =  $request->input('title');
        $category->description =  $request->input('description');
        $category->file        = $fileNameToStore;
        $category->files       =  json_encode($files);
        $category->active      =  $request->active == null ? '0' : 1;
        $category->save();
        return redirect(route('categories.index'))->with('success' ,'Category Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function inActiveCategory(Category $category)
    { 
        $category = Category::findOrFail($category->id);
        if ($category && $category->active == 1 ) {
        $category->active = 0;  
        $category->update();
        return redirect(route('categories.index'))->with('success', 'Category Has Been In Active'); 
        }
 
    }

    public function activeCategory(Category $category)
    { 
        $category = Category::findOrFail($category->id);
        if ($category && $category->active == 0 ) {
        $category->active = 1;  
        $category->update();
        return redirect(route('categories.index'))->with('success' ,'Category Has Been Actived'); 
        }
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category = Category::findOrFail($category->id);
        if ($category) {
            return view('categories.edit')->with(['category' => $category]);
        }
            return  back()->with(['message' => 'Category Not Found']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
       // dd($request->all());
       $this->validate($request, [
            'title'       => 'required|string',
            'description' => 'nullable|string',
            'file'        => 'nullable|image',
            'files'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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
            $folder = '/public/category/image';
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
                    $folder = '/public/category/images';
                    $file->storeAs($folder, $name);  
                    $files[] = $name;  
                }
             }
        }else{
            $files = 'No Images To Store In .jpg';
        }
        $category = Category::findOrFail($category->id);
        $category->title       =  $request->input('title');
        $category->description =  $request->input('description');
        $category->file        = $fileNameToStore;
        $category->files       =  json_encode($files);
        $category->active      =  $request->active == null ? '0' : 1;
        $category->save();
        return redirect(route('categories.index'))->with('success',  'Category Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Category $category)
    {
         $category = Category::findOrFail($request->id);
        if ($category) {
            $category->delete();
            return redirect(route('categories.index'))->with('success', 'Category Has Been Deleted');
        }
        return  back()->with(['message' => 'Category Not Found']);
    }
}
