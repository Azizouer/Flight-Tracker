<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientMiddleware
{
   
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role == null )
        {
            return $next($request);
        }
        else
        {
            return redirect('invalide_route')->with('status', 'You are not allowed to acces the client.!');
        }
    }
}
