@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ __('messages.edit_user') }}</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/admin/users/{{ $user->id }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.name') }}</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.surname') }}</label>
                    <input type="text" name="surname" class="form-control" value="{{ old('surname', $user->surname) }}">
                    @error('surname')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.email') }}</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">{{ __('messages.save') }}</button>
            </form>
        </div>
    </div>
@endsection