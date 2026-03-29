<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.system_name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">{{ __('messages.system_name') }}</a>

            <div class="navbar-nav me-auto">
                @auth
                    @if(auth()->user()->hasRole('client'))
                        <a class="nav-link" href="/client/conferences">{{ __('messages.client') }}</a>
                    @endif

                    @if(auth()->user()->hasRole('employee'))
                        <a class="nav-link" href="/employee/conferences">{{ __('messages.employee') }}</a>
                    @endif

                    @if(auth()->user()->hasRole('admin'))
                        <a class="nav-link" href="/admin">{{ __('messages.admin') }}</a>
                    @endif
                @endauth
            </div>

            @guest
                <a href="/register" class="btn btn-outline-light me-2">{{ __('messages.register') }}</a>
                <a href="/login" class="btn btn-light">{{ __('messages.login') }}</a>
            @endguest

            @auth
                <span class="navbar-text me-3 text-white">
                    {{ auth()->user()->name }} {{ auth()->user()->surname }}
                </span>

                <form method="POST" action="/logout" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        {{ __('messages.logout') }}
                    </button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>