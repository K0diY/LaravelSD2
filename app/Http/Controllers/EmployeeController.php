<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('employee.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::with('users')->findOrFail($id);
        $participants = $conference->users;

        return view('employee.show', compact('conference', 'participants'));
    }
}