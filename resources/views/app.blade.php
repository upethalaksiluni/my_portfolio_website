<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta Tags -->
    <meta name="description" content="Portfolio of H.T. Upetha Laksiluni, Software Engineer specializing in web, mobile, and game development">
    <meta name="keywords" content="software engineer, web development, mobile development, laravel, vue.js, portfolio, upetha laksiluni">
    <meta name="author" content="H.T. Upetha Laksiluni">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:title" content="H.T. Upetha Laksiluni - Software Engineer Portfolio">
    <meta property="og:description" content="Portfolio of H.T. Upetha Laksiluni, Software Engineer specializing in web, mobile, and game development">
    <meta property="og:image" content="{{ asset('images/profile.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ request()->url() }}">
    <meta property="twitter:title" content="H.T. Upetha Laksiluni - Software Engineer Portfolio">
    <meta property="twitter:description" content="Portfolio of H.T. Upetha Laksiluni, Software Engineer specializing in web, mobile, and game development">
    <meta property="twitter:image" content="{{ asset('images/profile.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body class="font-sans antialiased h-full">
    @inertia
</body>
</html>