@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.user_list') }}</h1>

    <div class="list-group">
        @foreach($users as $user)
            <div class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-1">{{ $user->name }} {{ $user->surname }}</h5>
                    <small>{{ $user->email }}</small>
                </div>

                <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm">
                    {{ __('messages.edit') }}
                </a>
            </div>
        @endforeach
    </div>
@endsection