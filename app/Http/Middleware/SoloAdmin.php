<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloAdmin
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
        // if(auth::user()->id_rol == 1):
        //     //return $next($request);//Si es administrador se redirige al Home
        //     return redirect('inicio');
        // endif;
        // if(auth::user()->id_rol == 2):
        //     return redirect('actividades');
        // endif;

        // return redirect('home');//Si es un usuario se va a actividades

        switch(auth::user()->id_rol){
            case ('1'):
                return $next($request);
                break;
            case ('2'):
                return redirect('actividades');
                break;
            }
        }
    }

