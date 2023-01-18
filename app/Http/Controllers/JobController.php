<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    //Show all Jobs
    public function index() {
        return view('Jobs.index', [
            'Jobs' => Job::latest()->filter(request(['tag', 'search']))->simplePaginate(6)
        ]);
    }

    //Show single Jobs
    public function show(Job $Job) {
        return view('Jobs.show', [
            'Job' => $Job
        ]);
    }


//show create Form  
    public function create() {
        return view('Jobs.create');
    }

    //store job data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('Jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Job::create($formFields);

        return redirect('/')->with('message', 'Jobs created successfully!'); 
    }
}