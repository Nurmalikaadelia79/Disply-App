<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <- tambahkan ini
use App\Models\User;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        /** @var User|null $user */
      $user = Auth::user();
if (!$user || $user->role !== 'admin') {
    abort(403, 'Access denied');
}

        return $next($request);
    }

    
}