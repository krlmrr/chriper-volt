<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps', [
            //
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|max:255',
        ]);

        auth()->user()->chirps()->create([
            'body' => request('body'),
        ]);

        return redirect('/chirps');
    }
}
