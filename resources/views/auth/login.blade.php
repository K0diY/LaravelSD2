@extends('layouts.app')

@section('content')
<h1>Prisijungimas</h1>

<form method="POST" action="/login">
    @csrf

    <input type="email" name="email" placeholder="Email" class="form-control mb-2">
    <input type="password" name="password" placeholder="Slaptažodis" class="form-control mb-2">

    <button class="btn btn-primary">Prisijungti</button>

    @error('email')
        <div class="text-danger mt-2">{{ $message }}</div>
    @enderror
</form>
@endsection