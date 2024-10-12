<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMS - St. Martha Skills Training and Assesment Center</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ config('app.url') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @include('layouts.style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="font-[Nunito]">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->



    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    @include('layouts.header')
    <!-- [ Header ] end -->

    @include('layouts.sidebar')
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>

    @include('layouts.script')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
