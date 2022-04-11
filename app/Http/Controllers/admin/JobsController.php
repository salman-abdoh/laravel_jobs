<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs=Job::all();
        return view('admin.jobs.index',['data'=>$jobs]);
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

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
        $job = Job::create(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/jobs')->with('completed', 'job has been saved!');
    }

    public function show($id)
    {
        $jobs=Job::find($id);
        return view('admin.jobs.show',['data'=>$jobs]);
    }

    public function edit($id)
    {
        $jobs=Job::find($id);
        return view('admin.jobs.edit',['data'=>$jobs]);
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
        $job = Job::where('id',$id)->update(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/jobs')->with('completed', 'job has been saved!');

    }

  
    public function destroy($id)
    {
        $old=Job::where('id',$id)->value('status');
        Job::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/dashboard/jobs')->with('completed', 'job has been deleted');

    }
}
