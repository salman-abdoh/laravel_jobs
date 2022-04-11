<?php

namespace App\Http\Controllers\admin;
use App\Models\Ads;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=Ads::all();
        return view('admin.ads.index',['data'=>$ads]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ads.create');
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
        $ads = Ads::create(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/ads')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ads=Ads::find($id);
        return view('admin.ads.show',['data'=>$ads]);
    }

    public function edit($id)
    {
        $ads=Ads::find($id);
        return view('admin.ads.edit',['data'=>$ads]);
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
        $ads = Ads::where('id',$id)->update(['title'=>$request->title,'image'=>$imageName,'describe'=>$request->describe,'status'=>$request->status]);
        return redirect('/dashboard/ads')->with('completed', ' ithas been saved!');

    }

  
    public function destroy($id)
    {
        $old=Ads::where('id',$id)->value('status');
        Ads::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/dashboard/ads')->with('completed', 'it has been deleted');

    }
}
