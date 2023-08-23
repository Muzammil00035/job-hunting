<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;

class Employer
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('Employer')->check()) {
            return redirect()->route('Employer.Login')->with('Error!', 'Plz Login First');
        }

        return $next($request);
    }
}
