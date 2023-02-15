<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/jey.png')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}"> --}}

    @vite('resources/js/app.js')
    <meta name="csrf-token" content="{{csrf_token()}}">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <!-- ====== Navbar Section Start -->
        <x-layout.navbar></x-layout.navbar>
        <!-- ====== Navbar Section End -->
        {{$slot}}

        <x-layout.footer></x-layout.footer>

    </div>
    @include('sweetalert::alert')

</body>

</html>
