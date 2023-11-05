<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories=Category::all();
        return view('Admin.pages.categories.index',compact('categories'));
    }
    public function create(){
        return view('Admin.pages.categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string', // Check that the category is 1 (Transfer) or 2 (Recruitment).
        ]);
        $Category = new Category;

        $Category->category = $request->category;
        $Category->save();

        session()->flash('success', trans('backend.created_successfully'));
        return redirect()->route('categories.index');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Retrieve the category by ID.

        return view('Admin.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string', // Check that the category is 1 (Transfer) or 2 (Recruitment).
           ]);

        $category = Category::findOrFail($id);
        $category->category = $request->category;
        $category->save();

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();
            session()->flash('success', trans('backend.deleted_successfully'));
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
                     session()->flash('error', trans('backend.error_deleting_category'));
            return redirect()->route('categories.index');
        }
    }

}
