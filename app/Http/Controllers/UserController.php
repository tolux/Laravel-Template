<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\SendNot;
use Inertia\Inertia;
use Auth;

class UserController extends Controller
{

    public function account()
    {
        return Inertia::render('User/Account');
    }

    public function  profile()

    {  
        return Inertia::render('User/Profile');
    }

    public function gencode()
    {
        $user=  Auth::user();
        $code = mt_rand(1111,9999);
        return $code;
        
    }


    public function validateuser(Request $request)
    {
            
            $user=  Auth::user();
            $validateData = $request->validate([
                'name' => 'required  ',
                'phone_number' => 'required | numeric| digits:11',
                'email' => 'regex:/^([a-z0-9\+\-]+)(\.[a-z0-9\+\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix | required',
                'password' => ['required', 'string', 'min:8'],
            ]);
            $code = $this->gencode();
            $user->user_code = $code;
            $user->save();
            Mail::to($user->email)->send(new SendNot($code));
            
            return back()->with('message','Code sent to your email');
            
    }

    public function updateuser(Request $request){
        $user = Auth::user();
        $token = $request['token'];
        
        if($user->user_code != $token){

            return back()->with('errmess',"Invalid Token");  
        }
        try{

            DB::beginTransaction();
            $user->forceFill([
                'name' => $request['name'],
                'phone_number' => $request['phone_number'],
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ])->save();
            DB::commit();
            return back()->with('message', 'Profile Updated');
        
        }catch(\Exception $ex){
            // dd($ex.message);
            return back()->with('errmess',"Something went wrong");  

            DB::rollback();
        }
    }
}
