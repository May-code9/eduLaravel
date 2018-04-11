<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Admin;

class AdminUser
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
        if(Auth::check()) {
          $admin = Admin::where('user_id',Auth::user()->id)->pluck('role')->last();
          if($admin > 2) {
            return $next($request);
          } else {
            return redirect('/');
          }
        } else {
          return redirect('/');
        }
    }
}
