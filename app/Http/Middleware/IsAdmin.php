<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if(auth()->user()->is_admin == 1){
    //         return $next($request);
    //     }
    //     return redirect('home')->with('error',"You don't have admin access.");
    // }
    public function handle(Request $request, Closure $next, ...$roles)
{
    $user = auth()->user();
    if ($user && in_array($user->role, $roles)) {
        return $next($request);
    }
    error_log("Run IsAdmin.php");
    return redirect('home')->with('error', "You don't have access.");
}
}
