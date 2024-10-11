<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizers = Organizer::all(); // Ambil semua data organizer
        return view('organizers.index', compact('organizers'));

        
    }

    public function create()
{
    return view('organizers.create');
}

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'facebook_link' => 'nullable|string|max:255',
        'x_link' => 'nullable|string|max:255',
        'website_link' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    $organizer = new Organizer();
    $organizer->name = $request->input('name');
    $organizer->facebook_link = $request->input('facebook_link');
    $organizer->x_link = $request->input('x_link');
    $organizer->website_link = $request->input('website_link');
    $organizer->description = $request->input('description');
    $organizer->save();

    return redirect()->route('organizers.index')->with('success', 'Organizer created successfully');
}

public function edit($id)
{
    $organizer = Organizer::findOrFail($id);
    return view('organizers.edit', compact('organizer'));
}

public function update(Request $request, $id)
{

    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'facebook_link' => 'nullable|string|max:255',
        'x_link' => 'nullable|string|max:255',
        'website_link' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    $organizer = Organizer::findOrFail($id);
    $organizer->name = $request->input('name');
    $organizer->facebook_link = $request->input('facebook_link');
    $organizer->x_link = $request->input('x_link');
    $organizer->website_link = $request->input('website_link');
    $organizer->description = $request->input('description');
    $organizer->save();

    return redirect()->route('organizers.index')->with('success', 'Organizer updated successfully');
}


   //lanjutan rute dari web.php
    public function show(string $id)
    {
        $organizer = Organizer::findOrFail($id);
        return view('organizers.show', compact('organizer'));
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $organizer = Organizer::findOrFail($id);
    $organizer->delete();

    return redirect()->route('organizer.index')->with('success', 'Organizer deleted successfully');
}
}
