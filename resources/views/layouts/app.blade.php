<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100 dark:bg-gray-100 flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-200 dark:bg-gray-800">
        <!-- Sidebar content goes here -->
        
    </aside>

    <!-- Main Content -->
    <div class="flex-1">
        <!-- Include the navigation inside the main content -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-black dark:bg-gray-500 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 text-black">
        {{ $header }}
    </div>
</header>

        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</div>
</body>
</html>
