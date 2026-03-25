<h1>Konferencijų sąrašas</h1>

<ul>
@foreach($conferences as $conf)
    <li>
        {{ $conf['title'] }}
        <a href="/client/conferences/{{ $conf['id'] }}">Peržiūrėti</a>
    </li>
@endforeach
</ul>