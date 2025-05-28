<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'developer') {
            $users = User::all();
            $courses = Course::all();
        } else {
            $users = null;
            $courses = null;
        }

        return view('dashboard', compact('user', 'users', 'courses'));
    }
}
