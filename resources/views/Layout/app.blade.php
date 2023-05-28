<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keyowrds')">

    {{-- Open Graph (OG) Tags: Open Graph tags provide structured 
        data to social media platforms when your page is shared. 
        They control how your page appears on platforms like Facebook,
         LinkedIn, and Twitter, including the title, description, image,
          and URL. --}}
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('ogimage')">
    <meta property="og:url" content="@yield('ogurl')">



</head>

<body>
    @include('Layout.header')
    {{-- @yield() is for replaicing content --}}
    @yield('content')
    @include('Layout.footer')
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
