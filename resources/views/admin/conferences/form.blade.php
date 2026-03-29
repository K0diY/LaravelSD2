<div class="mb-3">
    <label class="form-label">{{ __('messages.title') }}</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $conference->title ?? '') }}">
    @error('title')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.description') }}</label>
    <textarea name="description" class="form-control">{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Speakers</label>
    <input type="text" name="speakers" class="form-control" value="{{ old('speakers', $conference->speakers ?? '') }}">
    @error('speakers')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.date') }}</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', $conference->date ?? '') }}">
    @error('date')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Time</label>
    <input type="time" name="time" class="form-control" value="{{ old('time', $conference->time ?? '') }}">
    @error('time')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">{{ __('messages.location') }}</label>
    <input type="text" name="location" class="form-control" value="{{ old('location', $conference->location ?? '') }}">
    @error('location')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control" value="{{ old('address', $conference->address ?? '') }}">
    @error('address')
        <div class="text-danger mt-1">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-success">{{ __('messages.save') }}</button>