<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller {
    public function index() {
        return view('plans.index', [
            'plans' => Plan::latest()->paginate(6)
        ]);
    }

    public function show(Plan $plan) {
        // Assuming you have a relationship set up between Plan and Exercise models
        $exercises = $plan->exercises; // Retrieve all exercises related to the plan

        return view('exercises.index', compact('exercises', 'plan')); // Pass the exercises to the view
    }

    public function manage() {
        return view('plans.manage', [
            'plans' => Plan::latest()->paginate(6)
        ]);
    }

    public function edit(Plan $plan) {
        return view('plans.edit', ['plan' => $plan]);
    }

    public function create() {
        return view('plans.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required'
        ]);
        Plan::create($formFields);
        return redirect('/plans/manage');
    }

    public function update(Request $request, Plan $plan) {
        if (!$plan) {
            return back()->with('error', 'Plan not found');
        }
        $formFields = $request->validate([
            'name' => 'required'
        ]);
        $plan->update($formFields);
        return redirect("/exercises/manage/" . $plan->id);
    }

    public function delete(Plan $plan) {
        foreach ($plan->exercises as $exercise){
            $exercise->delete();
        }

        $plan->delete();
        return redirect("/plans/manage");
    }


}
