<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $jobs=Job::all();
        return view('Admin.pages.jobs.index',compact('jobs'));
    }
    public function create(){
        return view('Admin.pages.jobs.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'job' => 'required|string', // Check that the job is 1 (Transfer) or 2 (Recruitment).
        ]);
        $Job = new Job;

        $Job->job = $request->job;
        $Job->save();

        session()->flash('success', trans('backend.created_successfully'));
        return redirect()->route('jobs.index');
    }
    public function edit($id)
    {
        $job = Job::findOrFail($id); // Retrieve the job by ID.

        return view('Admin.pages.jobs.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'job' => 'required|string', // Check that the job is 1 (Transfer) or 2 (Recruitment).
        ]);

        $job = Job::findOrFail($id);
        $job->job = $request->job;
        $job->save();

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('jobs.index');
    }

    public function destroy($id)
    {
        try {
            $job = Job::findOrFail($id);
            $job->delete();
            session()->flash('success', trans('backend.deleted_successfully'));
            return redirect()->route('jobs.index');
        } catch (\Exception $e) {
            session()->flash('error', trans('backend.error_deleting_job'));
            return redirect()->route('jobs.index');
        }
    }
}
