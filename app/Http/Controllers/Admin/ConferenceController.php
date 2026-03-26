<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function index()
    {
        $conferences = [
            [
                'id' => 1,
                'title' => 'Laravel konferencija',
                'description' => 'Apie Laravel framework',
                'date' => '2026-04-01',
                'location' => 'Vilnius'
            ],
            [
                'id' => 2,
                'title' => 'PHP konferencija',
                'description' => 'Apie PHP',
                'date' => '2026-05-10',
                'location' => 'Kaunas'
            ]
        ];

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        return redirect('/admin/conferences')->with('success', 'Conference created successfully.');
    }

    public function edit($id)
    {
        $conference = [
            'id' => $id,
            'title' => 'Laravel konferencija',
            'description' => 'Apie Laravel framework',
            'date' => '2026-04-01',
            'location' => 'Vilnius'
        ];

        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        return redirect('/admin/conferences')->with('success', 'Conference updated successfully.');
    }

    public function destroy($id)
    {
        return redirect('/admin/conferences')->with('success', 'Conference deleted successfully.');
    }
}