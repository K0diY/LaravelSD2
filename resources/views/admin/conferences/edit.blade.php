<h1>Redaguoti konferenciją</h1>

<form method="POST" action="/admin/conferences/{{ $conference['id'] }}">
    @csrf
    @include('admin.conferences.form')
</form>