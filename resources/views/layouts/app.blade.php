<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <base href="{{ env('APP_URL') }}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'App') }}</title>

    <link rel="icon" href="/favicon.ico" type="image/png"/>

    <link href="{{ asset('css/app.css', env('USE_HTTPS')) }}?v={{ \App\Services\Release::version() }}"
          rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>

<script>
    window.config = {
        baseUrl: '{{ env('BASE_URL', '') }}',
        fullUrl: '{{ url('/') }}',
        url: {},
    };
</script>

@yield('content')

<script src="{{ asset('js/app.js', env('USE_HTTPS')) }}?v={{ \App\Services\Release::version() }}"></script>
</body>
</html>
