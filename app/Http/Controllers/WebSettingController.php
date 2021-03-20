<?php

namespace App\Http\Controllers;

use App\Models\Kwspost;
use Illuminate\Http\Request;

class WebSettingController extends Controller
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
        $Kwspost = Kwspost::first();
        return view('Kwspost.index')->with(['Kwspost' => $Kwspost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kwspost.create');
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
        'email'       => 'nullable|string',
        'logo'        => 'nullable|image',
        'phone1'      => 'nullable|numeric',
        'phone2'      => 'nullable|numeric',
        'phone3'      => 'nullable|numeric',
        'headerContent' => 'nullable|string',
        'footerContent' => 'nullable|string',
        'description' => 'nullable|string'

    ]);
    if ($request->hasFile('logo')) {
        // Get File Name With Extenison
        $fileNameWithEex = $request->file('logo')->getClientOriginalName();
        // Get fileName Only
        $fileName = pathinfo($fileNameWithEex , PATHINFO_FILENAME);
        // Get FileExtenison
        $extension = $request->file('logo')->getClientOriginalExtension();
        // fileName To Store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // Upload file
        $folder = '/public/webSetting/image';
        $path = $request->file('logo')->storeAs($folder, $fileNameToStore);
        // dd($path);
    }else{
        $fileNameToStore = 'No Images To Store In .jpg';
    } 
    $Kwspost = new Kwspost();
    $Kwspost->title          =  $request->input('title');
    $Kwspost->email          =  $request->input('email');
    $Kwspost->logo           =  $fileNameToStore;
    $Kwspost->phone1         =  $request->input('phone1');
    $Kwspost->phone2         =  $request->input('phone2');
    $Kwspost->phone3         =  $request->input('phone3');
    $Kwspost->headerContent  =  $request->input('headerContent');
    $Kwspost->footerContent  =  $request->input('footerContent');
    $Kwspost->description    =  $request->input('description');
    $Kwspost->active         =  $request->active == null ? '0' : 1;
    $Kwspost ->save();
    return redirect(route('webSetting.index'))->with('success' ,'web Setting Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function show(Kwspost $kwspost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function edit($Kwspost)
    {
        $Kwspost = Kwspost::findOrFail($Kwspost);
        //return $Kwspost;
        if ($Kwspost) {
            return view('Kwspost.edit')->with(['Kwspost' => $Kwspost]);
        }
            return  back()->with(['message' => 'kwspost Not Found']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request->all());
       $this->validate($request, [
        'title'       => 'required|string',
        'email'       => 'nullable|string',
        'logo'        => 'nullable|image',
        'phone1'      => 'nullable|numeric',
        'phone2'      => 'nullable|numeric',
        'phone3'      => 'nullable|numeric',
        'headerContent' => 'nullable|string',
        'footerContent' => 'nullable|string',
        'description' => 'nullable|string'

    ]);
    if ($request->hasFile('logo')) {
        // Get File Name With Extenison
        $fileNameWithEex = $request->file('logo')->getClientOriginalName();
        // Get fileName Only
        $fileName = pathinfo($fileNameWithEex , PATHINFO_FILENAME);
        // Get FileExtenison
        $extension = $request->file('logo')->getClientOriginalExtension();
        // fileName To Store
        $fileNameToStore = $fileName.'_'.time().'.'.$extension;
        // Upload file
        $folder = '/public/webSetting/image';
        $path = $request->file('logo')->storeAs($folder, $fileNameToStore);
        // dd($path);
    }else{
        $fileNameToStore = 'No Images To Store In .jpg';
    } 
    $Kwspost = Kwspost::findOrFail($id);
    $Kwspost->title          =  $request->input('title');
    $Kwspost->email          =  $request->input('email');
    $Kwspost->logo           =  $fileNameToStore;
    $Kwspost->phone1         =  $request->input('phone1');
    $Kwspost->phone2         =  $request->input('phone2');
    $Kwspost->phone3         =  $request->input('phone3');
    $Kwspost->headerContent  =  $request->input('headerContent');
    $Kwspost->footerContent  =  $request->input('footerContent');
    $Kwspost->description    =  $request->input('description');
    $Kwspost->active         =  $request->active == null ? '0' : 1;
    $Kwspost ->save();
    return redirect(route('webSetting.index'))->with('success' ,'web Setting Has Been Inserted');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kwspost  $kwspost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Kwspost $kwspost)
    {
        $kwspost = Kwspost::findOrFail($request->id);
        if ($kwspost) {
            $kwspost->delete();
            return redirect(route('categories.index'))->with('success', 'kwspost Has Been Deleted');
        }
        return  back()->with(['message' => 'kwspost Not Found']);
    }
}
