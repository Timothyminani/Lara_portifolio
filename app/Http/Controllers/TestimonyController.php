<?php

namespace App\Http\Controllers;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Inertia\Inertia;  

class TestimonyController extends Controller
{
    

public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // handle image upload if exists
        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('testimonies', 'public');
            $validated['picture'] = $path;
        }

        Testimony::create($validated);

        return redirect()->back()->with('success', 'Your testimony has been submitted!');

    }


     // handle fetching testimonies

    public function index()
    {
        $testimonies = Testimony::latest()->get(); // fetch all
        return Inertia::render('Portfolio', [
            'testimonies' => $testimonies
        ]);
    }
    
}
