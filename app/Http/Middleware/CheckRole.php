<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Check if the user has the required role
            if (in_array($user->role, $roles)) {
                // Role is valid, continue to the requested route
                return $next($request);
            }
        }

        // Redirect the user based on their role
        return $this->redirectToRoleDashboard();
    }

    protected function redirectToRoleDashboard()
    {
        $userRole = Auth::user()->role;

        switch ($userRole) {
            case 'Admin':
                return redirect()->route('admin.dashboard');
                break;

            case 'user':
                return redirect()->route('user.dashboard');
                break;

            // Add more roles as needed

            default:
                // Redirect to a default route for unknown roles
                return redirect()->route('default.dashboard');
                break;
        }
    }
}
