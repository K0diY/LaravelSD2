<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
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

        return view('client.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = [
            'id' => $id,
            'title' => 'Laravel konferencija',
            'description' => 'Apie Laravel framework',
            'date' => '2026-04-01',
            'location' => 'Vilnius'
        ];

        return view('client.show', compact('conference'));
    }
}