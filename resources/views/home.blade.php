@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.home') }}</h1>

    <div class="list-group">
        @auth
            @if(auth()->user()->hasRole('client') || auth()->user()->hasRole('admin'))
                <a href="/client/conferences" class="list-group-item list-group-item-action">
                    {{ __('messages.client') }}
                </a>
            @endif

            @if(auth()->user()->hasRole('employee') || auth()->user()->hasRole('admin'))
                <a href="/employee/conferences" class="list-group-item list-group-item-action">
                    {{ __('messages.employee') }}
                </a>
            @endif

            @if(auth()->user()->hasRole('admin'))
                <a href="/admin" class="list-group-item list-group-item-action">
                    {{ __('messages.admin') }}
                </a>
            @endif
        @endauth

        @guest
            <div class="list-group-item">
                Prisijunkite arba užsiregistruokite.
            </div>
        @endguest
    </div>
@endsection