<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class aboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=about::all();
        return view('admin.about.index',['data'=>$about]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'title' => 'required|max:255',
            'describe' => 'required|max:500',
            'image' => 'required',
            'status' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $about = About::create(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/about')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ABOUT=About::find($id);
        return view('admin.ABOUT.show',['data'=>$ABOUT]);
    }

    public function edit($id)
    {
        $ABOUT=About::find($id);
        return view('admin.ABOUT.edit',['data'=>$ABOUT]);
    }
    public function update(Request $request, $id)
    {
        $storeData = $request->validate([
            'title' => 'required|max:255',
            'describe' => 'required|max:500',
          //  'image' => 'required',
            'status' => 'required',
        ]);
        if($request->image !=""){
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        }else{
            $imageName =$request->oldimg; 
        }
        $About = About::where('id',$id)->update(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/about')->with('completed', ' ithas been saved!');

    }

  
    public function destroy($id)
    {
        $old=About::where('id',$id)->value('status');
        About::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/dashboard/about')->with('completed', 'it has been deleted');

    }
}
