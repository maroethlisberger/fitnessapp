<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Plan;
use Illuminate\Http\Request;

class ExerciseController extends Controller {
    public function show(Exercise $exercise) {
//        $plan = $exercise->plan();
        return view('exercises.show', ['exercise' => $exercise]);
    }

    public function manage(Plan $plan) {
        return view('exercises.manage', ['plan' => $plan]);
    }

    public function edit(Exercise $exercise) {
        return view('exercises.edit', (['exercise' => $exercise]));
    }

    public function create(Plan $plan) {
        return view('exercises.create', ['plan' => $plan]);
    }

    public function store(Request $request, Plan $plan) {
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'sets' => 'required',
            'repetitions' => 'required',
            'video_path' => ''
        ]);
        $formFields['plan_id'] = $plan->id;
        Exercise::create($formFields);
        return redirect("/exercises/manage/" . $plan->id);
    }

    public function update(Request $request, Exercise $exercise) {
        if (!$exercise) {
            return back()->with('error', 'Plan not found');
        }
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'sets' => 'required',
            'repetitions' => 'required',
            'video_path' => ''
        ]);
        $exercise->update($formFields);
        return redirect("/exercises/manage/" . $exercise->plan->id);
    }

    public function delete(Exercise $exercise) {

        $exercise->delete();
        return redirect("/exercises/manage/" . $exercise->plan->id);
    }
}
