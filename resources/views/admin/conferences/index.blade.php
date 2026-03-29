@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.conference_management') }}</h1>

    <a href="/admin/conferences/create" class="btn btn-primary mb-3">
        {{ __('messages.create_conference') }}
    </a>

    <div class="list-group">
        @foreach($conferences as $conf)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-1">{{ $conf->title }}</h5>
                    <small>{{ __('messages.date') }}: {{ $conf->date }}</small><br>
                    <small>{{ __('messages.location') }}: {{ $conf->location }}</small>
                </div>

                <div>
                    <a href="/admin/conferences/{{ $conf->id }}/edit" class="btn btn-warning btn-sm">
                        {{ __('messages.edit') }}
                    </a>

                    <form method="POST" action="/admin/conferences/{{ $conf->id }}/delete" class="d-inline"
                          onsubmit="return confirm('{{ __('messages.confirm_delete') }}')">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">{{ __('messages.delete') }}</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection