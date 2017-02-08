<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Acesso;
use App\Models\Configuracao;
use Auth;

class siteMidleware
{

    public function handle($request, Closure $next)
    {
//        if (!config('app.debug')){
            $config = Configuracao::first();
            // dd($config);
            if ($config->status !== "ATIVO" &&  Auth::guest()) {

                $rota = $config->status == 'MANUTENCAO' ? 'site.manutencao' : 'site.construcao';
                // dd($rota);
                return redirect()->route($rota);
            }
//        }

        return $next($request);
    }
}
