<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $courses = Course::paginate();

        return view('course.index', compact('courses'))
            ->with('i', ($request->input('page', 1) - 1) * $courses->perPage());
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $course = Course::where('id_course', $id)->firstOrFail();

        return view('course.show', compact('course'));
    }

    public function buy($id_course)
    {
        $course = Course::find($id_course);
        
        if (!$course) {
            return redirect()->route('courses.index')->with('error', 'El curso no existe.');
        }

        // Verificar si el usuario ya compró este curso
        $user = Auth::user();
        if ($user->transactions()->where('course_id', $id_course)->exists()) {
            return redirect()->route('courses.index')->with('error', 'Ya compraste este curso.');
        }

        return view('course.buy', compact('course'));
    }

    public function purchase(Request $request, $id_course)
    {
        $course = Course::find($id_course);

        if (!$course) {
            return redirect()->route('courses.index')->with('error', 'El curso no existe.');
        }

        // Crear la transacción
        Transaction::create([
            'user_id' => Auth::id(),
            'course_id' => $id_course,
            'card_number' => $request->card_number,
            'card_holder' => $request->card_holder,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
            'amount' => $course->price,
        ]);

        return redirect()->route('courses.index')->with('success', 'Compra realizada exitosamente.');
    }
}
