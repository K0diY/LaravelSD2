@extends('layouts.app')

@section('content')
    <h1>{{ __('messages.register') }}</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="/register">
                @csrf

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.name') }}</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.surname') }}</label>
                    <input type="text" name="surname" class="form-control" value="{{ old('surname') }}">
                    @error('surname')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.email') }}</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.password') }}</label>
                    <input type="password" name="password" class="form-control">
                    @error('password')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">{{ __('messages.password_confirm') }}</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('messages.register') }}
                </button>
            </form>
        </div>
    </div>
@endsection