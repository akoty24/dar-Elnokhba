<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class WebsiteInfoController extends Controller
{
    public function index()
    {
        $website_info = WebsiteInfo::all();

        return view('Admin.pages.website_info.index', compact('website_info'));
    }
    // Show the form for editing the specified resource.
    public function edit($id)
    {
        $website_info = WebsiteInfo::findOrFail($id);
        return view('Admin.pages.website_info.edit', compact('website_info'));
    }
    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif',
            'title' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'snapchat' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'email' => 'nullable|email|max:255',
        ]);
        $websiteInfo = WebsiteInfo::findOrFail($id);
        if( $request->logo ){

            Image::make($request->logo)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/website_info/' . $request->logo->hashName());
            $validatedData['logo'] = 'uploads/website_info/' . $request->logo->hashName();
        }
        // Find the record by its ID

        // Update the record with the validated data
        $websiteInfo->update($validatedData);

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('website-info.index');
    }

    // Remove the specified resource from storage.
    public function destroy($id)
    {
        // Delete the website info
        $website_info = WebsiteInfo::findOrFail($id);
        $website_info->delete();
        return redirect()->route('website-info.index')->with('success', 'Website info deleted successfully.');
    }

}
