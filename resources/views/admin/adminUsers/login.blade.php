<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alphahostels Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href=" {{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }} ">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href=" {{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href=" {{ asset('admin/css/fontastic.css') }} ">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href=" {{ asset('admin/css/grasp_mobile_progress_circle-1.0.0.min.css') }}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href=" {{ asset('admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href=" {{ asset('admin/css/style.default.css') }} " id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }} ">
    <!-- Favicon-->
    <link rel="shortcut icon" href=" {{ asset('admin/img/favicon.ico') }} ">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container text-center">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>ALPHAHOSTELS</span><strong class="text-primary"> ADMIN PANEL</strong></div>
             @if (count($errors)) <!--check if there some errors-->
 <div class="alert alert-danger">
   <ul class="list-unstyled">
     @foreach ($errors->all() as $error)

     <li> {{ $error }}</li>

     @endforeach
   </ul>
 </div>
 @endif
            <form method="post" action="/signin" class="text-left form-validate">
              {{ csrf_field() }}

              <div class="form-group-material">
                <input id="email" type="email" name="email" required data-msg="Please enter your Email" class="input-material" value="{{ old('email') }}">
                <label for="email" class="label-material">Email</label>
              </div>
              <div class="form-group-material">
                <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                <label for="password" class="label-material">Password</label>
              </div>
              <div class="form-group-material" style="display: none;">
               <div class="checkbox">
                <label>
                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
               </label>
               </div>
              </div>
              <div class="form-group text-center"><button type="submit" class="btn btn-success">Login</button>
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </div>
            </form>
          </div>
                    <div class="copyrights text-center">
            <p>Design by <a href="http://tyd.or.tz" class="external">TYD Innovation and Incubator</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src=" {{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src=" {{ asset('admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src=" {{ asset('admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('admin/js/grasp_mobile_progress_circle-1.0.0.min.js') }} "></script>
    <script src=" {{ asset('admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src=" {{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src=" {{ asset('admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src=" {{ asset('admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admin/js/charts-home.js') }}"></script>
    <!-- Main File-->
    <script src=" {{ asset('admin/js/front.js') }}"></script>
  </body>
</html>