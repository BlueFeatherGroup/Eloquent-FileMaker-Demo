<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Directory</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased bg-gray-100">
<div class="">
    <x-navbar></x-navbar>
    <div class="max-w-7xl mx-auto px-10 py-5 h-screen">

        <div class="text-3xl mb-5 pl-5 font-light">
	        {{$title}}
        </div>
        {{ $slot }}

    </div>
</div>
</body>
</html>
