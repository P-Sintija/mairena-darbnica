<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.partials.meta')

    <link rel="stylesheet" href="{{ mix("/css/app.css") }}">

</head>
<body data-js-controller="{{ $jsControllerName}}">

@include('layouts.partials.header')

<main @if(!$isHomePage) class="mt-[88px]" @endif>
    @yield('content')
</main>

@include('layouts.partials.footer')

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
