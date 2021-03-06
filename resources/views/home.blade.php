<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->


  

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard Laravel by Creative Tim">

    <meta name="twitter:description" content="Material Dashboard Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard Laravel by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://material-dashboard-laravel.creative-tim.com/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/opt_md_laravel_thumbnail.jpg"/>
    <meta property="og:description" content="Material Dashboard Laravel is a Free Material Bootstrap Admin Preset for Laravel with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Fonts -->    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.3" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
      <!-- End Google Tag Manager -->

    </head>
  <body class="clickup-chrome-ext_installed">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              <input type="hidden" name="_token" value="NKN81BvuQSzEbJlULUVrTDRewUlcAIJhPbOwli18">    {{ csrf_field() }}         </form>
          <div class="wrapper ">
            <div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
              <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
            
                  Tip 2: you can also add an image using data-image tag
              -->
              <div class="logo">
                <a href="https://creative-tim.com/" class="simple-text logo-normal">
                    ARCHAEOLOGY Dashboard
                </a>
              </div>
              
              <div class="sidebar-wrapper">
                <ul class="nav">
              
                
               
                  <li class="nav-item active">
                    <a class="nav-link" href="/archaeologyf3xadmin">
                      {{-- <span class="sidebar-mini"> UM </span> --}}
                      <i class="material-icons">person</i>
                      <span class="sidebar-normal"> {{ __('User Management') }} </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/archaeologyAdmin">
                      <i class="material-icons">language</i>
                        <p>{{ __('ARCHAEOLOGY') }}</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/cityAdmin">
                      <i class="material-icons">language</i>
                        <p>{{ __('Governorates') }}</p>
                    </a>
                  </li>

                  @if(auth()->user()->permission=='superuser')

              

                  <li class="nav-item">
                    <a class="nav-link" href="/users">
                      <i class="material-icons">person</i>
                        <p>{{ __('Users') }}</p>
                    </a>
                  </li>

                  @endif
                 

                
                
                  
                 
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
               </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
               </form>
                 
                </ul>
              </div>
            </div>
<div class="main-panel">
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
<div class="container-fluid">
  <div class="navbar-wrapper">
    <a class="navbar-brand" href="#">User Management</a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    
  <span class="sr-only">Toggle navigation</span>
  <span class="navbar-toggler-icon icon-bar"></span>
  <span class="navbar-toggler-icon icon-bar"></span>
  <span class="navbar-toggler-icon icon-bar"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end">
  
    
  </div>
</div>
</nav>

    <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Acount</h4>
              <p class="card-category"> Here you can manage your account</p>
            </div>
            <div class="card-body">
                <div class="content">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                            @csrf
                            @method('put')
                
                            <div class="card ">
                              <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                                <p class="card-category">{{ __('User information') }}</p>
                              </div>
                              <div class="card-body ">
                                @if (session('status'))
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="material-icons">close</i>
                                        </button>
                                        <span>{{ session('status') }}</span>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                                <div class="row">
                                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                  <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                                      @if ($errors->has('name'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                  <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                                      @if ($errors->has('email'))
                                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                            @csrf
                            @method('put')
                
                            <div class="card ">
                              <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Change password') }}</h4>
                                <p class="card-category">{{ __('Password') }}</p>
                              </div>
                              <div class="card-body ">
                                @if (session('status_password'))
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <i class="material-icons">close</i>
                                        </button>
                                        <span>{{ session('status_password') }}</span>
                                      </div>
                                    </div>
                                  </div>
                                @endif
                                <div class="row">
                                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>
                                  <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />
                                      @if ($errors->has('old_password'))
                                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>
                                  <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />
                                      @if ($errors->has('password'))
                                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                                      @endif
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                  <div class="col-sm-7">
                                    <div class="form-group">
                                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
       
            </div>
          </div>
        
      </div>
    </div>
  </div>
</div>
 
</div>
</div>
                      
     
        <!--   Core JS Files   -->
        <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
        <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
        <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Plugin for the momentJs  -->
        <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
        <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
        <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
      
        <!-- Chartist JS -->
        <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('material') }}/demo/demo.js"></script>
        <script src="{{ asset('material') }}/js/settings.js"></script>
        <script>
          // Facebook Pixel Code Don't Delete
            ! function(f, b, e, v, n, t, s) {
              if (f.fbq) return;
              n = f.fbq = function() {
                n.callMethod ?
                  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
              };
              if (!f._fbq) f._fbq = n;
              n.push = n;
              n.loaded = !0;
              n.version = '2.0';
              n.queue = [];
              t = b.createElement(e);
              t.async = !0;
              t.src = v;
              s = b.getElementsByTagName(e)[0];
              s.parentNode.insertBefore(t, s)
            }(window,
              document, 'script', '//connect.facebook.net/en_US/fbevents.js');
            try {
              fbq('init', '111649226022273');
              fbq('track', "PageView");
            } catch (err) {
              console.log('Facebook Track Error:', err);
            }
        </script>
       
        @stack('js')
    </body>
</html>