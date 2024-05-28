<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('frontend.template.navbar')
<div class="container p-3 mx-auto mt-5 rounded-md">
    @yield('content')
</div>

    

</body>
</html>