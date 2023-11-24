<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('colors', compact('colors'));
    }

    public function create()
    {
        return view('agregar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'codi' => 'required|string',
        ]);

        Color::create($request->all());

        return redirect('/colors')->with('success', 'Color added successfully!');
    }

    public function edit($id)
    {
        $color = Color::find($id);
        return view('edit', compact('color'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'codi' => 'required|string',
        ]);

        $color = Color::find($id);
        $color->update($request->all());

        return redirect('/colors')->with('success', 'Color updated successfully!');
    }

    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();

        return redirect('/colors')->with('success', 'Color deleted successfully!');
    }

    public function show($id)
    {
        $color = Color::find($id);
        return view('show', compact('color'));
    }
}