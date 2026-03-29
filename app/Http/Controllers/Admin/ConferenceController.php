<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function index()
    {
        $conferences = Conference::all();

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        Conference::create($request->validated());

        return redirect('/admin/conferences')
            ->with('success', __('messages.conference_created'));
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);

        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        $conference = Conference::findOrFail($id);
        $conference->update($request->validated());

        return redirect('/admin/conferences')
            ->with('success', __('messages.conference_updated'));
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        return redirect('/admin/conferences')
            ->with('success', __('messages.conference_deleted'));
    }
}