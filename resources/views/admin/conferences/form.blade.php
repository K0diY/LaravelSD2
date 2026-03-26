<div>
    <label>Pavadinimas</label><br>
    <input type="text" name="title" value="{{ old('title', $conference['title'] ?? '') }}">
    @error('title')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Aprašymas</label><br>
    <textarea name="description">{{ old('description', $conference['description'] ?? '') }}</textarea>
    @error('description')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Data</label><br>
    <input type="date" name="date" value="{{ old('date', $conference['date'] ?? '') }}">
    @error('date')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<div>
    <label>Vieta</label><br>
    <input type="text" name="location" value="{{ old('location', $conference['location'] ?? '') }}">
    @error('location')
        <div>{{ $message }}</div>
    @enderror
</div>

<br>

<button type="submit">Išsaugoti</button>