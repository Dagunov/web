<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') — WD-40</title>

    @include('style')

</head>
<body>

    <div class="wrapper">
        @include('header')

        @yield('content')

        @include('footer')
    </div>

</body>
</html>