<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Rol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if(!auth()->check())
            return redirect('/login');
        $usuario = auth()->user();

        if($usuario->role == 'developer')
            return $next($request);

        foreach($roles as $rol){
            if($usuario->role = $rol)
                return $next($request);
        }

        return redirect('/');
    }
}
