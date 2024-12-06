<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- FAVICON -->
    <link rel="icon" href="images/myIcon.webp" type="image/png/webp">

    <!-- BOOTSTRAP 5 LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom File Links-->
    <link rel="stylesheet" href="{{url('frontEnd/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontEnd/css/responsive-style.css')}}">
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-ofset="90">
    <!--Navbar-->
    @include('frontEnd.layouts.header')
    @yield('content')
    @include('frontEnd.layouts.footer')



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <!--Custom Js Link-->
    <script src="{{url('frontEnd/js/main.js')}}"></script>
</body>
</html>