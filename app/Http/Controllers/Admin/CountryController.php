<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('Admin.pages.countries.index', compact('countries'));
    }

    public function create()
    {
        return view('Admin.pages.countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required|string', // Check that the country is 1 (Transfer) or 2 (Recruitment).
        ]);
        $Country = new Country;

        $Country->country = $request->country;
        $Country->save();

        session()->flash('success', trans('backend.created_successfully'));
        return redirect()->route('countries.index');
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id); // Retrieve the country by ID.

        return view('Admin.pages.countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'country' => 'required|string', // Check that the country is 1 (Transfer) or 2 (Recruitment).
        ]);

        $country = Country::findOrFail($id);
        $country->country = $request->country;
        $country->save();

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('countries.index');
    }

    public function destroy($id)
    {
        try {
            $country = Country::findOrFail($id);
            $country->delete();
            session()->flash('success', trans('backend.deleted_successfully'));
            return redirect()->route('countries.index');
        } catch (\Exception $e) {
            session()->flash('error', trans('backend.error_deleting_country'));
            return redirect()->route('countries.index');
        }
    }
}
