<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create($courseId)
    {
        $course = Course::findOrFail($courseId);
        return view('course.buy', compact('course'));
    }

    public function store(Request $request, $courseId)
    {
        $course = Course::findOrFail($courseId);
        $user = Auth::user();

        // Guardar la transacción
        Transaction::create([
            'user_id' => $user->id,
            'course_id' => $course->id_course,
            'card_holder' => $request->card_holder,
            'card_number' => $request->card_number,
            'expiry_date' => $request->expiry_date,
            'cvv' => $request->cvv,
            'amount' => $course->price,
        ]);

        return redirect()->route('library')->with('success', '¡Compra exitosa!');
    }
}
