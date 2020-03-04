<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <nav>
            {{ __('messages.nav') }}
        </nav>
    </div>
    @yield('content')
</body>
</html>
