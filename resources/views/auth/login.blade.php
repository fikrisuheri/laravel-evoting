<html lang="en" class="fullscreen-bg"><head>
<title>Login Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- LARAVEL CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/mycss.css') }}">
<!--   <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css')}}"> -->
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('/vendor/linearicons/style.css')}}">
  <link rel="stylesheet" href="{{ asset('/vendor/chartist/css/chartist-custom.css')}}">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('/css/main.css')}}">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<style type="text/css">
  
  .content{
    margin-top:-100px;
  }

  @media (min-width: 600px)
{
  .content{
    margin-top:-300px;
  }
}
</style>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <div class="vertical-align-wrap">
      <div class="vertical-align-middle">
        <div class="auth-box">
          <div class="left" >
            <div class="content">
              <div class="header">
                <div class="logo text-center"><img src="{{url('img/mylogo.png')}}" width=100 alt="Logo Pilketos"></div>
                <p class="lead">Masuk ke halaman  admin</p>
              </div>
              <form class="form-auth-small" action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                <div class="form-group">
                  <label for="signin-email" class="control-label sr-only">Email</label>
                  <input type="text" class="form-control" id="signin-email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="signin-password" class="control-label sr-only">Password</label>
                  <input type="password" class="form-control" name="password" id="signin-password"  placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>   
              </form>
            </div>
          </div>
          <div class="right">
            <div class="overlay"></div>
            <div class="content text">
              <h1 class="heading">Aplikasi Pemilihan Ketua Osis</h1>
              <small>Powered by RPL SMKN 1 Kawali</small>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->



</body>
</html>