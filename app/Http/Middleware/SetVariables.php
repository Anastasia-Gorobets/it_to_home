<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SetVariables
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
        $favorites = DB::table('favorites')->where('user_id',Auth::user()->id)->pluck('teacher_id')->toArray();
        view()->share('favorites', $favorites);
        }
        return $next($request);
    }
}
