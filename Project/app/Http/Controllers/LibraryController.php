<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class LibraryController extends Controller
{
    public function index()
    {
        $courses = Auth::user()->transactions->map->course;
        return view('library', compact('courses'));
    }
}