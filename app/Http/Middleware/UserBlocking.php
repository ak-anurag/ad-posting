<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserBlocking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(User::isUserBlocked($request->email)){
            $request->session()->flash('fail', 'Your account has been blocked.');
            return redirect()->back();
        }

        return $next($request);
    }
}
