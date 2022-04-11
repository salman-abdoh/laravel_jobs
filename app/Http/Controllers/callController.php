 <?php
 

// namespace App\Http\Controllers;
// use App\Models\Contacts;
// use Illuminate\Http\Request;

// class CallController extends Controller
// {
//     //
//     public function call(){
//         return view('web.call');
//     }


// public function create()
//     {
//         return view('web.call');
//     }

    
//     public function store(Request $request)
//     {
//         $storeData = $request->validate([
//             'name' => 'required|max:30',
//             'email' => 'required|max:255',
//             'messege' => 'required|max:255',
//             'phone' => 'required',
//             'status' => 'required',
//         ]);
      
//         $contacts = Contacts::create(['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'messege'=>$request->messege,'status'=>$request->status]);
//         return redirect('/')->with('completed', 'it has been saved!');
//     }

// }


?> 