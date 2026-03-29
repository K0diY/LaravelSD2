<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('client.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);

        return view('client.show', compact('conference'));
    }
}