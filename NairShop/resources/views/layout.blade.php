
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield("title") | N-Air</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="N-Air shop - Giới thiệu các sản phẩm thể thao đẹp, giá rẻ, hàng nhập khẩu..." />
    <script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta charset utf="8">
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Fredoka+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    
</head>
<body>
    @include('partials._nav')
   
    @yield('content')
    @include('partials._footer')

    <!--shop-kart-js-->
    <script src="js/simpleCart.min.js"></script>
    <!--default-js-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!--bootstrap-js-->
    <script src="js/bootstrap.min.js"></script>
    <!--script-->
    @yield('scripts')
</body>
</html>