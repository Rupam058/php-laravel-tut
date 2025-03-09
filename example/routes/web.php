<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(4);

    return view('jobs.index', [
        "jobs" => $jobs
    ]);
});

// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get("/jobs/{id}", function ($id) {
    $job = Job::find($id);

    return view("jobs.show", [
        "job" => $job
    ]);
})->name('job.show');

// Store
Route::post('/jobs', function () {

    // validation...
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

// Edit
Route::get("/jobs/{id}/edit", function ($id) {
    $job = Job::find($id);

    return view("jobs.edit", [
        "job" => $job
    ]);
});

// Update
Route::patch("/jobs/{id}", function ($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize (On Hold...)

    // update the job
    $job = Job::findOrFail($id);

    /* $job->title = request('title');
    $job->salary = request('salary');
    $job->save(); */
    // OR
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    // and persist
    // $job->save();

    // redirect to the job page
    // return redirect("/jobs/" . $job->id);
    return redirect(route('job.show', $job));
});

// Delete
Route::delete("/jobs/{id}", function ($id) {
    // authorize
    // delete the job
    $job = Job::findOrFail($id);
    $job->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
