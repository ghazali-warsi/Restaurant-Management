<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Session;

use App\Mail\ForgetPasswordMail;
use Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    //

    public function showRegister(){
        return view('Admin.auth.register');
    }

    public function postRegister(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
         
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>Hash::make($request->password)
        ]);

        return redirect('login');

    }

    public function showlogin(){
        return view('Admin.auth.login');
    }
    
    public function postlogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
         
        ]);
  
        $credentials=$request->only('email','password');
        if(Auth::attempt($credentials))
        {
          if(Auth::user()->usertype == '1'){
            return redirect('/dashboard');
          }
          else{
            return redirect('/');
          }
        }
        else
        {
            return redirect('login')->with('success','login details are not found');
        }
    }

    public function forgetpasswordload()
    {
        return view('Admin.auth.forget');
    }


public function forgetpassword(Request $request)
{
    $user = User::getEmailSingle($request->email);
    if(!empty($user))
    {
        $user->remember_token=Str::random(30);
        $user->save();
        Mail::to($user->email)->send(new ForgetPasswordMail($user));
       
        return redirect()->back()->with('success', ' Please Check Your Email And reset your Password');

    }
    else
    {
      return redirect()->back()->with('error', 'Email not found');
    }
}

public function resetpasswordload($remember_token)
{
    $user =User::getTokenSingle($remember_token);
    if(!empty($user))
    {
      $data['user'] = $user;
      return view('Admin.auth.resetpassword' , $data);
    }
    else
    {
        abort(404);
    }
}

public function resetpassword($token ,Request $request)
{
  if($request->password == $request->password_confirmation)
  {
    $user =User::getTokenSingle($token);
    $user->password=Hash::make($request->password);
    $user->remember_token=Str::random(30); 
    $user->save(); 
    return redirect(url('/login'))->with('success', 'Passowrd Changed Successfully');
  }
  else
  {
    return redirect()->back()->with('error', 'Passowrd Not Match');
  }


}

    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }

 


    
}
