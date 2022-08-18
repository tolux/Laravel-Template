<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Illuminate\Support\Facades\Session;



class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    // protected $rootView = 'app';
    public function rootView(Request $request): string
    {
        
        if(in_array($request->route()->getName(), config('app.routes'))){   
                return 'admin';
        }else{

            return 'app';
        }
            
    }
    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        // return parent::version($request);
        return $this->rootView . parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            //
            'flash' =>[
                'errmess'=> fn()=> $request->session()->get('errmess'),
                'message'=> fn()=> $request->session()->get('message'),
               
            ],

            
            'user' =>fn () => $request->user()
                ? $request->user()->only( 'name', 'email', 'phone_number', 'wallet_amount', 'ref_link')
                : null
            
        ]);
    }

  
    
    
}
