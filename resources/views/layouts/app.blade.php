<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title> @yield ('page-title', 'Laravel') </title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- HEADER -->
    @include ('partials.header')
    <main id="site_main">
        @yield ('content')
    </main>
    <!-- /#site_main -->

    <!-- FOOTER -->
    @include ('partials.footer')




</body>

</html>