<?php
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 14.11.2017
 * Time: 11:58
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckAuthIdForPage
{

    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(Auth::check()){
            if(Auth::user()->id == $request->userId){
                return $next($request);
            }else{
                return redirect('error/403');
            }
        }else{
            return redirect('error/403');

        }
    }
}