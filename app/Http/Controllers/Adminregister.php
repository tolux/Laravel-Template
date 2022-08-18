<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered; 
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Responses\LoginResponse;

use Validator;
use App\Models\Admin;
use Auth;

use Inertia\Inertia;
class Adminregister extends Controller
{
   
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard) {
        $this->guard = $guard;
    }

    /**
     * Show the registration view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\RegisterViewResponse
     */
    public function create(Request $request) {

        if (Auth::guard('admin')->user()) {
            return app(LoginResponse::class); 
        } else {
            return Inertia::render('Auth/AdminReg');
            // return view('admin-register');
        }
    }

    /**
     * Create a new registered user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Laravel\Fortify\Contracts\CreatesNewUsers  $creator
     * @return \Laravel\Fortify\Contracts\RegisterResponse
     */

    public function gencode(){
        $code = mt_rand(1111,9999);
        return $code;
    }

    public function store(Request $request) {
       
        $validateData=$request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => 'required|confirmed',
        ]);
        $code= $this->gencode();
        $ref= $request['email'].$code;
                    
                $admin = Admin::create([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'password' => Hash::make($request['password']),
                    'ref_link' => $ref,
                ]);

                if($admin){
                   
                    Auth::guard('admin')->login($admin);
                   
                    return app(LoginResponse::class);                    
                }
               
            }

}
