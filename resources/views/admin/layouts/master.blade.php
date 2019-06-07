<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GGSO ADMIN PANEL</title>
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
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

     </head>
     <body>
      <!-- Side Navbar -->
      <nav class="side-navbar">
        <div class="side-navbar-wrapper">
          <!-- Sidebar Header    -->
          <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center">
              <h2 class="h5">Adminstrator</span>
              </div>
              <!-- Small Brand information, appears on minimized sidebar-->
              <div class="sidenav-header-logo"><a href="/dashboard" class="brand-small text-center"> <strong>A</strong><strong class="text-primary">H</strong></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
              <h5 class="sidenav-heading">Main</h5>
              <ul id="side-main-menu" class="side-menu list-unstyled">                  
                <li><a href="/dashboard"> <i class="icon-home"></i>Dashboard                             </a></li>
                <li><a href="/admin/home/contents"> <i class="icon-form"></i>Home Content                     </a></li>
                <li><a href="/admin/slides"> <i class="icon-form"></i>Image Slide                             </a></li>
                  <li><a href="/admin/news"> <i class="icon-form"></i>News                             </a></li>
                  <li><a href="/admin/tags"> <i class="icon-grid"></i>Tags       </a></li>
                <li><a href="/admin/services"> <i class="icon-form"></i>Services                             </a></li>
                  <li><a href="/admin/partners"> <i class="icon-form"></i>Partners                             </a></li>
                <li><a href="/admin/testimonies"> <i class="icon-grid"></i>Testimonials                       </a></li>
                  <li><a href="/admin/faqs"> <i class="icon-grid"></i>Faqs                       </a></li>
                <li><a href="/admin/about-us"> <i class="icon-grid"></i>About Us                         </a></li>
                <li><a href="/admin/contacts"> <i class="icon-grid"></i>Contacts                        </a></li>
                  <li><a href="/admin/teams"> <i class="icon-grid"></i>Teams                        </a></li>

                                        @if (Auth::user()->role == "1")
                <li><a href="{{ route('admin_list') }}"> <i class="icon-grid"></i>Adminstrator             </a></li>
                @endif

                
              </ul>
            </div>
          </div>
        </nav>
        <div class="page">
          <!-- navbar-->
          <header class="header">
            <nav class="navbar">
              <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                  <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="/dashboard" class="navbar-brand">
                    <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary">GGSO Admin Panel</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                      @if (Auth::check())
                      <li class="nav-item pt-2">
                       <i class="fa fa-user text-white" aria-hidden="true"></i> <span class="text-white"> {{ Auth::user()->name }}</span>
                     </li>
                     @endif
                     <!-- Log out-->
                     <li class="nav-item"><a href="/logout" class="nav-link logout" title="Logout from GGSO Admin Panel"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                   </ul>
                 </div>
               </div>
             </nav>
           </header>
           
           @yield ('content')
           
           <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>GGSO &copy; <?php echo date("Y"); ?></p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="http://tyd.or.tz" class="external">TYD Innovation Incubator</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
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
      <script>
          var editor_config = {
              path_absolute : "/",
              selector: "textarea.my-editor",
              plugins: [
                  "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                  "searchreplace wordcount visualblocks visualchars code fullscreen",
                  "insertdatetime media nonbreaking save table contextmenu directionality",
                  "emoticons template paste textcolor colorpicker textpattern"
              ],
              toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
              relative_urls: false,
              file_browser_callback : function(field_name, url, type, win) {
                  var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                  var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                  var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                  if (type == 'image') {
                      cmsURL = cmsURL + "&type=Images";
                  } else {
                      cmsURL = cmsURL + "&type=Files";
                  }

                  tinyMCE.activeEditor.windowManager.open({
                      file : cmsURL,
                      title : 'Filemanager',
                      width : x * 0.8,
                      height : y * 0.8,
                      resizable : "yes",
                      close_previous : "no"
                  });
              }
          };

          tinymce.init(editor_config);
      </script>
      </body>
      </html>