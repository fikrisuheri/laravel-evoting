<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/csslanding.css">
    <title>@yield('judul')</title>
</head>
<body>
    <!-- Nav -->
   <nav>
       <h1>E-voting</h1>
       <hr>
   </nav>
   <!-- End Nav -->
@yield('konten')
    <footer>
        <hr style="margin-bottom:5px;">
        <h6 class="text-center" style="color:white">Copyright@RPL SMKN 1 Kawali</h6>
    </footer>
<script src="/js/app.js"></script>
@yield('js')
</body>
</html>