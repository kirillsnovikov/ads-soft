<?php

namespace App\Http\Middleware;

use App\Data;
use Closure;

class DataAccess
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
        if (($id = $request->route('id'))) {
            $data = Data::find($id);
            if($data->access) {
                return $next($request);
            } else {
                session()->put('alert', 'Данная запись недоступна для просмотра!');
                return redirect()->route('index');
            }
        }
    }
}
