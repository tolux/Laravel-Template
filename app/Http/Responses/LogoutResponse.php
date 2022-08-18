<?php

namespace  App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;
use Laravel\Fortify\Fortify;
use Inertia\Inertia;
use Auth;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {

        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    // : redirect()->intended('/admin-login');
                    : Inertia::location('/');
        
    }
}

