<!DOCTYPE html>
<html>
<head>

    <title>@yield('title','Foobooks')</title>
    <meta charset='utf-8'>

    <link rel='stylesheet' href='foobooks.css' type='text/css'>

    @yield('head')


</head>
<body>

@yield('content')

@yield('body')

</body>
</html>