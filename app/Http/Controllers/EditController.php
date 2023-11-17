<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Plan;

class EditController extends Controller
{
    public function index() {
        return view('edit.index', [
            'plans' => Plan::latest()->paginate(6)
        ]);
    }

    public function plan(Plan $plan) {
        $exercises = $plan->exercises;
        return view('edit.plan', compact('exercises', 'plan'));
    }

    public function exercise(Exercise $exercise) {
        return view('edit.exercise', (['exercise' => $exercise]));
    }
}
