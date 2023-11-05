<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Country;
use App\Models\Job;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class WorkerController extends Controller
{
    public function index(){
        $workers=Worker::all();
        return view('Admin.pages.workers.index',compact('workers'));
    }
    public function create(){
        $categories=Category::all();
        $countries=Country::all();
        $jobs=Job::all();
        return view('Admin.pages.workers.create',compact('categories','countries','jobs'));
    }
    public function store(Request $request)
    {
        $request->validate([
                'religion' => 'required', // Check that the religion is 1 (Muslim) or 2 (Christian).
                'country_id' => 'required',
                'job_id' => 'required', // Check that the job is 1 (house maid).
                'category_id' => 'required', // Check that the category is 1 (Transfer) or 2 (Recruitment).
                'experience' => 'required', // Check that the experience is 1 (Has good experience) or 2 (Has no experience).
                'image' => 'required|image|mimes:png,jpg,jpeg,gif', 
        ]);
        $Worker = new Worker;
        if( $request->image ){
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/workers/' . $request->image->hashName());
            $Worker->image = 'uploads/workers/' . $request->image->hashName();
        }
        $Worker->country_id = $request->country_id;
        $Worker->religion = $request->religion;
        $Worker->job_id = $request->job_id;
        $Worker->category_id = $request->category_id;
        $Worker->experience = $request->experience;
        $Worker->save();

        session()->flash('success', trans('backend.created_successfully'));
        return redirect()->route('workers.index');
    }
    public function edit($id)
    {
        $worker = Worker::findOrFail($id); // Retrieve the worker by ID.
        $categories=Category::all();
        $countries=Country::all();
        $jobs=Job::all();
        return view('Admin.pages.workers.edit',compact('worker','categories','countries','jobs'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'religion' => 'required', 
            'country_id' => 'required',
            'job_id' => 'required', 
            'category_id' => 'required',
            'experience' => 'required', 
            'image' => 'required|image|mimes:png,jpg,jpeg,gif', 
                  ]);

        $worker = Worker::findOrFail($id);

        if ($request->hasFile('image')) {
            // Update the image if a new one is provided.
            // You can use the same image handling code as in the store method.
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/workers/' . $request->image->hashName());
            $worker->image = 'uploads/workers/' . $request->image->hashName();
        }

        $worker->country_id = $request->country_id;
        $worker->religion = $request->religion;
        $worker->job_id = $request->job_id;
        $worker->category_id = $request->category_id;
        $worker->experience = $request->experience;
        $worker->save();

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('workers.index');
    }

    public function destroy($id)
    {
        try {
            $worker = Worker::findOrFail($id);
            if ($worker->image) {
                Storage::delete($worker->image);
            }
            $worker->delete();
            session()->flash('success', trans('backend.deleted_successfully'));
            return redirect()->route('workers.index');
        } catch (\Exception $e) {
            session()->flash('error', trans('backend.error_deleting_worker'));
            return redirect()->route('workers.index');
        }
    }


}
