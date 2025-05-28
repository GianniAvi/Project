<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class LibraryController extends Controller
{
    public function index()
    {
        $courses = Auth::user()->transactions->map->course;
        return view('library', compact('courses'));
    }

    public function showCourse(Course $course)
    {
        // Cargar los cursos comprados por el usuario
        $user = Auth::user()->load('courses');

        // Verificar si el curso pertenece al usuario
        if (!$user->courses->pluck('id')->contains($course->id)) {
            abort(403, 'No tienes acceso a este curso.');
        }

        // Cargar las lecciones del curso
        $course->load('lessons');

        return view('course.inside', [
            'course' => $course,
            'lessons' => $course->lessons,
        ]);
    }
}