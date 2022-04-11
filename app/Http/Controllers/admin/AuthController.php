<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    //
   
    public function listAll(){
    $users=User::where('is_active',1)
        ->where('email_verified_at','!=',NULL)
        ->orWhere('name','like','%af%')
        ->orderBy('user_id','desc')
       // ->take(2)
        ->get();
        //$user=User::find(1);
        //return response($user);
        return view('admin.users.list_users')
        ->with('allUsers',$users);
    }

    public function showLogin(){
        if(Auth::check())
        return redirect()->route($this->checkRole());
        else 
        return view('web.login');
    }



    // public function checkRole(){
    //     if(Auth::user()->hasRole('admin'))
    //     return 'dashboard';
    //         else 
    //         return 'home';
        
    // }

    public function login(Request $request){
        Validator::validate($request->all(),[
            'email'=>['email','required','min:3','max:50'],
            'password'=>['required','min:5']


        ],[
            'email.required'=>'this field is required',
            'email.min'=>'can not be less than 3 letters', 
           
        ]);

    //     if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_active'=>1])){

            
    //         if(Auth::user()->hasRole('admin'))
    //         return redirect()->route('dashboard');
    //         else 
    //         return redirect()->route('home');

        
    //     }
    //     else {
    //         return redirect()->route('login')->with(['message'=>'incorerct username or password or your account is not active ']);
    //     }

        
    }

    public  function createUser(){
        return view('web.signup');
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'phone'=>['required'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:6'],
            


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->name;
        $u->phone=$request->phone;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
       
       
        if($u->save()){
            $u->attachRole('admin');
            return redirect()->route('/')
            ->with(['success'=>'user created successful']);
        }

      
        return back()->with(['error'=>'can not create user']);

    }


    public function editUser(){
        $u=User::find(5);
        if($u->hasRole('admin'))
        {
            
        }
        else {
            
        }
    }
    public function resetPassword(){

    }
    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }


}
