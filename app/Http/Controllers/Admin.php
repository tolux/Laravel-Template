<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Inertia\Inertia;
use App\Models\User;
// use App\Models\Admin;


class Admin extends Controller
{

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
