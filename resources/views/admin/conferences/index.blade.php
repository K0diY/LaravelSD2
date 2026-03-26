<h1>Konferencijų valdymas</h1>

<a href="/admin/conferences/create">Kurti naują konferenciją</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
@foreach($conferences as $conf)
    <li>
        {{ $conf['title'] }}
        <a href="/admin/conferences/{{ $conf['id'] }}/edit">Redaguoti</a>

        <form method="POST" action="/admin/conferences/{{ $conf['id'] }}/delete" style="display:inline;">
            @csrf
            <button type="submit">Trinti</button>
        </form>
    </li>
@endforeach
</ul>