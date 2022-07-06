<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.partials.meta')
{{--    <link href="{{ mix('/css/abovethefold.css', 'front') }}" rel="stylesheet">--}}
{{--    <link href="{{ mix('/css/app.css', 'front') }}" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">--}}

{{--    @if (isset($stylesheet))--}}
{{--        <link href="{{ $stylesheet }}" rel="stylesheet"/>--}}
{{--    @endif--}}

{{--    <noscript>--}}
{{--        <link href="{{ mix('/css/app.css', 'front') }}" rel="stylesheet">--}}
{{--        @if (isset($stylesheet))--}}
{{--            <link href="{{ $stylesheet }}" rel="stylesheet"/>--}}
{{--        @endif--}}
{{--    </noscript>--}}
</head>
{{--<body data-body data-js-controller="{{ $jsControllerName }}">--}}
<body>

@include('layouts.partials.header')

<main>
    @yield('content')
</main>

@include('layouts.partials.footer')

{{--<script src="{{ mix('/js/app.js', 'front') }}"></script>--}}
</body>
</html>
