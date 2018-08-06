<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/mystyle.css')}}"/>
</head>
<body bgcolor='yellow'>
@yield('content')
</body>
</html>