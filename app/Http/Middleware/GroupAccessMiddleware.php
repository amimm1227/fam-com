<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GroupAccessMiddleware
{
    public function handle($request, Closure $next)
    {
        $groupId = $request->route('groupId');
        $user = Auth::user();

        if ($user && $user->group_id == $groupId) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'アクセスが拒否されました。');
    }
}
