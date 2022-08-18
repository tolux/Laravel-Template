<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Models\User;
use App\Models\Admin;

use Auth;

class AdminController extends Controller
{


     public function subuser(Request $request)
    {
        
        $id= $request->post('id');
        $type= $request->post('type');
        $user= User::find($id);
        if($user != null){
            if($type == 'subspend'){
                $user->throt='4';
            }
            if($type == 'unsubspend'){
                $user->throt='0';
            }
            $user->save();
            return back()->with('message','User Account Supended');;
        }else{
            return back()->with('message','Some thing went wrong');;
           
        }
        

    }

    public function users() 
    {
        $usersList = User::select('id','name','email','throt','phone_number','wallet_amount','created_at')
        ->orderBy('id', 'desc')
        ->paginate(10);

        return Inertia::render('Admin/Users', [
        'users' => $usersList
        ]);
       
    }
    public function  admindash()
    {    
        
        return Inertia::render('Admin/Dash');
    }

    public function  adminprofile()
    {
        return Inertia::render('Admin/Profile');
    }
}

