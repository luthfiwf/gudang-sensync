<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon.ico">
    <title>INVENTORY</title>

    <!-- style -->
    @include('includes.style')

</head>

<body class="vertical  light  ">
    <div id="app">
        <div class="wrapper">

            <!-- navbar -->
            {{-- @include('includes.nav') --}}

            <!-- sidebar -->
            {{-- @include('includes.sidebar') --}}

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
    <!-- script -->
    @include('includes.script')
</body>

</html>