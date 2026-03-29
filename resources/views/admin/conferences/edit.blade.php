@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.edit_conference') }}</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/admin/conferences/{{ $conference->id }}">
                @csrf
                @include('admin.conferences.form')
            </form>
        </div>
    </div>
@endsection