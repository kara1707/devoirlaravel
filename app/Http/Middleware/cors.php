<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request)
        -> header('Access-Control-Allow-Origin','*')
        -> header('Access-Control-Allow-Methods','*') /*permet d'autoriser les fonction CRUD */
        -> header('Access-Control-Allow-Credentials','true')/*permet de gerer les mot de passe */
        -> header('Access-Control-Allow-Headers','*');
    }
}