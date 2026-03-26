<h1>Nauja konferencija</h1>

<form method="POST" action="/admin/conferences">
    @csrf
    @include('admin.conferences.form')
</form>