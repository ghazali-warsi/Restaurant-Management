<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    
    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {

        $user = auth()->user(); 

        $data = $request->validate([
           
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'designation' => 'required',
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
    
        request()->image->move(public_path('images'), $file_name);

        $data = new Profile;
            $data->image = $file_name;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->designation = $request->designation;
            $data->user_id = $user->id; // Assign authenticated user's ID
    
            $data->save();
    
        return redirect()->route('profile.index')->with('success', ' profile added successfully.');
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);

        $data = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'designation' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $file_name);
            $data['image'] = $file_name;
        }

        $profile->update($data);

        return redirect()->route('profile.index')->with('success', 'profile updated successfully.');
    }

    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
    
        return redirect()->route('profile.index')->with('success', 'profile deleted successfully.');
    }
    
}
