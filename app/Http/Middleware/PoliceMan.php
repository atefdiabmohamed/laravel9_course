<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class PoliceMan
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
  //هنا حنعمل الفلتره 
  
   if($request->route('type')=="admin"){
    return redirect()->route('admin');  
   }
    
   if($request->route('type')=="user"){
    return redirect()->route('user');  
   }
   
      
//كمل مسارك كما هو
        return $next($request);
    }
   

}
