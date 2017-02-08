<?php

namespace App\Http\Middleware;
use Auth;
// use Flash;
use Closure;

class admin_auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            }

            return redirect()->route('admin.login');
        }
        // they are not a guest, so lets allow the request
        // to continue to the application
        $response = $next($request);

        // Perform action
       
        return $response;
  
        // we are returning the response from where ever it started
        // from down the pipeline
    }
}
