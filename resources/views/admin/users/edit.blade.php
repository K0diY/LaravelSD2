<h1>Redaguoti naudotoją</h1>

<form method="POST" action="/admin/users/{{ $user['id'] }}">
    @csrf

    <input type="text" name="name" value="{{ $user['name'] }}">
    @error('name')
        <div>{{ $message }}</div>
    @enderror

    <br><br>

    <input type="text" name="surname" value="{{ $user['surname'] }}">
    @error('surname')
        <div>{{ $message }}</div>
    @enderror

    <br><br>

    <input type="email" name="email" value="{{ $user['email'] }}">
    @error('email')
        <div>{{ $message }}</div>
    @enderror

    <br><br>

    <button type="submit">Išsaugoti</button>
</form>