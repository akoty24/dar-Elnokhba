<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::all();
        return view('Admin.pages.orders.index',compact('orders'));
    }
    public function create(){
        return view('Admin.pages.orders.create');
    }
    public function store(Request $request)
    {
        $data=$request->validate([
            'identity_id' => 'required|string',
            'date_of_birth_hijri' => 'required|date',
            'phone' => 'required|string',
            'visa_number' => 'nullable|string',
            'visa_date_hijri' => 'nullable|date',
            'border_number' => 'nullable|string',
            'work_place' => 'required|string',
            'work_city' => 'required|string',
            'address' => 'required|string',
            'relative_name' => 'required|string',
            'relative_type' => 'required|string',
            'relative_phone' => 'required|string',
            'employer' => 'required|string',
            'num_floors' => 'integer',
            'num_rooms' => 'integer',
            'num_family_members' => 'integer',
            'verification_code' => 'required|string',
            'notes' => 'nullable|string',

        ]);
        Order::create($data);

        session()->flash('success', trans('backend.created_successfully'));
        return redirect()->route('orders.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'religion' => 'required|in:1,2', // Check that the religion is 1 (Muslim) or 2 (Christian).
            'country' => 'required|string',
            'job' => 'required|in:1', // Check that the job is 1 (house maid).
            'category' => 'required|in:1,2', // Check that the category is 1 (Transfer) or 2 (Recruitment).
            'experience' => 'required|in:1,2', // Check that the experience is 1 (Has good experience) or 2 (Has no experience).
            'image' => 'image|mimes:png,jpg,jpeg,gif', // You can update the image if provided.
        ]);

        $order = Order::findOrFail($id);

        if ($request->hasFile('image')) {
            // Update the image if a new one is provided.
            // You can use the same image handling code as in the store method.
            Image::make($request->image)->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save('uploads/orders/' . $request->image->hashName());
            $order->image = 'uploads/orders/' . $request->image->hashName();
        }

        $order->country = $request->country;
        $order->religion = $request->religion;
        $order->job = $request->job;
        $order->category = $request->category;
        $order->experience = $request->experience;
        $order->save();

        session()->flash('success', trans('backend.updated_successfully'));
        return redirect()->route('orders.index');
    }
    public function edit($id)
    {
        $order = Order::findOrFail($id); // Retrieve the order by ID.

        return view('Admin.pages.orders.edit', compact('order'));
    }
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);

            if ($order->image) {
                Storage::delete($order->image);
            }
            $order->delete();
            session()->flash('success', trans('backend.deleted_successfully'));
            return redirect()->route('orders.index');
        } catch (\Exception $e) {
               session()->flash('error', trans('backend.error_deleting_order'));
            return redirect()->route('orders.index');
        }
    }

}
