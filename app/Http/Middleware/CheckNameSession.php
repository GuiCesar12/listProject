<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;

use Closure;
use Illuminate\Support\Facades\DB;

class CheckNameSession
{
    public function handle($request, Closure $next)
    {
        $name = Session::get('name');
        if ($this->isNameInDatabase($name) == true) {
            // Redirecionar para alguma rota ou página, pois a sessão não possui um "name" válido no banco de dados
            return $next($request);
        }
        else{

            return redirect()->route('index');
        }
    }

    private function isNameInDatabase($name)
    {
        // Verificar se o "name" existe no banco de dados (assumindo que você tem uma tabela "users" com um campo "name")
        $user = DB::table('leads')->where('nome', $name)->first();
        if(isset($user)){

            return true;
        }else{

            
            return false;
        }
    }
}