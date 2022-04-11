<?php

namespace App\Http\Controllers\admin;
use App\Models\Services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Services::all();
        return view('admin.services.index',['data'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
        $services = Services::create(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/services')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $services=Services::find($id);
        return view('admin.services.show',['data'=>$services]);
    }

    public function edit($id)
    {
        $services=Services::find($id);
        return view('admin.services.edit',['data'=>$services]);
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
        $services = Services::where('id',$id)->update(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/services')->with('completed', ' ithas been saved!');

    }

  
    public function destroy($id)
    {
        $old=Services::where('id',$id)->value('status');
        Services::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/dashboard/services')->with('completed', 'it has been deleted');

    }
}
