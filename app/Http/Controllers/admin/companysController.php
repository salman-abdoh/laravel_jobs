<?php

namespace App\Http\Controllers\admin;
use App\Models\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class companysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company=Company::all();
        return view('admin.company.index',['data'=>$company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
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
            'address' => 'required|max:500',
            'image' => 'required',
            'status' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $company = Company::create(['title'=>$request->title,'image'=>$imageName,'address'=>$request->address,'status'=>$request->status]);
        return redirect('/dashboard/company')->with('completed', 'it has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company=Company::find($id);
        return view('admin.company.show',['data'=>$company]);
    }

    public function edit($id)
    {
        $company=Company::find($id);
        return view('admin.company.edit',['data'=>$company]);
    }
    public function update(Request $request, $id)
    {
        $storeData = $request->validate([
            'title' => 'required|max:255',
            'address' => 'required|max:500',
          //  'image' => 'required',
            'status' => 'required',
        ]);
        if($request->image !=""){
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        }else{
            $imageName =$request->oldimg; 
        }
        $company = Company::where('id',$id)->update(['title'=>$request->title,'image'=>$imageName,'address'=>$request->address,'status'=>$request->status]);
        return redirect('/dashboard/company')->with('completed', ' it has been saved!');

    }

  
    public function destroy($id)
    {
        $old=Company::where('id',$id)->value('status');
        Company::where('id',$id)->update(['status'=>($old==1)? 0 :1]);
        return redirect('/dashboard/company')->with('completed', 'it has been deleted');

    }
}
