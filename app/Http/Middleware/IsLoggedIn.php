<?php

namespace ZigKart\Http\Middleware;

use Closure;

class IsLoggedIn
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
      if(auth()->user()->isDealer()) {
        return redirect('/dealer');
      }
      if(auth()->user()->isAdmin()) {
        return redirect('/admin');
      }
      if(auth()->user()->isDeuglo()) {
        return redirect('/admin');
      }
      return redirect('/');
    }
}
