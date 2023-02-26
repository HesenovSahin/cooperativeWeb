<!DOCTYPE html>
<html lang="en">

<head>
@include('frontend.includes.head')
</head>
<body>
@include('frontend.includes.header')
@yield('content')
<footer>
@include('frontend.includes.footer')
@yield('customJS')
</footer>
</body>
</html>