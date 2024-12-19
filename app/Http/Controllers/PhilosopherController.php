<?php

namespace App\Http\Controllers;

use App\Models\Philosopher;

use Illuminate\Http\Request;

class PhilosopherController extends Controller
{
    public function index()
    {
        $philosophers = Philosopher::all();
        return view('philosophers.index', compact('philosophers'));
    }

    public function create()
    {
        return view('philosophers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'birth_year' => 'required|integer|min:0|max:' . date('Y'),
            'country' => 'required|string|max:100',
            'went_crazy' => 'required|boolean',
        ]);

        Philosopher::create($validated);

        return redirect()->route('philosophers.index')->with('success', 'Philosopher created successfully!');
    }

    public function show(Philosopher $philosopher)
    {
        return view('philosophers.show', compact('philosopher'));
    }

    public function edit(Philosopher $philosopher)
    {
        return view('philosophers.edit', compact('philosopher'));
    }

    public function update(Request $request, Philosopher $philosopher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'birth_year' => 'required|integer|min:0|max:' . date('Y'),
            'country' => 'required|string|max:100',
            'went_crazy' => 'required|boolean',
        ]);

        $philosopher->update($validated);

        return redirect()->route('philosophers.index')->with('success', 'Philosopher updated successfully!');
    }

    public function destroy(Philosopher $philosopher)
    {
        $philosopher->delete();

        return redirect()->route('philosophers.index')->with('success', 'Philosopher deleted successfully!');
    }
}
