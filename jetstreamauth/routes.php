<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Mail;
// use App\Mail\Regmail;
use App\Models\User;
use Inertia\Inertia;



Route::group([ 'middleware'=> [
    'auth:admin',
    'verified',
    // 'admin',
    ]], function () {
    $enableViews = config('fortify.views', true);
    // dd(Route::middleware(['admina']));

    Route::post('/adminlogout', [App\Http\Controllers\Adminlogin::class, 'destroy'])
    ->name('adminlogout');

    Route::get('/admindash', [App\Http\Controllers\AdminController::class, 'admindash'])
    ->name( 'admindash' );

    Route::get('/adminprofile', [App\Http\Controllers\AdminController::class, 'adminprofile'])
    ->name( 'adminprofile' );
    
    // users
    Route::post('/subuser', [App\Http\Controllers\AdminController::class, 'subuser'])
    ->name( 'subuser' );
    
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])
    ->name( 'users' );    
});

// update user
Route::post('/validateuser', [App\Http\Controllers\UserController::class, 'validateuser'])
->name( 'validateuser' );
Route::post('/updateuser', [App\Http\Controllers\UserController::class, 'updateuser'])
->name( 'updateuser' );


Route::get('/ref/{reflink?}',
        function($reflink){
            $user= User::firstWhere('ref_link', $reflink);
            // dd($user->id);
            return Inertia::render('regref',[
                'user' =>  $user->id 
              ]);
        }
)
->name('getlink');

 function linkcode(){
    $code = random_bytes(16);
    $code = bin2hex($code);
    return $code;
}
Route::get('/verify/{reflink?}',
        function($reflink){
            $status='';
            $user= User::firstWhere('verify_link', $reflink);
            if($user){
                $code = linkcode();
                $user->verify_link = $code;
                $user->user_verified = '1';
                $user->save();
                $status ='ok';
            }else{
                
                $status ='no';
            }
            return Inertia::render('ver',[
                'status' =>  $status 
              ]);
        }
)
->name('getlink');

Route::post('/sendlink', 
            function(){
            
                $user= Auth::user();
                $code = linkcode();
                $user->verify_link = $code;
                $user->save();
                Mail::to($user->email)->send(new Regmail($user->name,$user->verify_link ));

                return back()->with('message','link sent');

})
->name('sendlink');