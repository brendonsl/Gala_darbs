<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Show all listings
    public function index() {
        return view('Jobs.index', [
            'Jobs' => Job::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //Show single listing
    public function show(Job $Job) {
        return view('Jobs.show', [
            'Job' => $Job
        ]);
    }


//show create Form  
    public function create() {
        return view('Jobs.create');
    }
}