<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    
<!-- Mirrored from keenthemes.com/metronic/preview/?page=snippets/pages/user/login-3&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jun 2018 18:00:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        
        <title>Kooning Travel| Extranet - Login</title>
        <meta name="description" content="Latest updates and statistic charts"> 

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       

        <!--begin::Web font -->
        <script src="js/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!--end::Web font -->

        <!--begin::Base Styles -->  

         

                <link href="css/vendors.bundle.css" rel="stylesheet" type="text/css" />
                <link href="css/style.bundle.css" rel="stylesheet" type="text/css" />
                <link rel="stylesheet" href="css/login.css">
                
                <!--end::Base Styles -->

        <link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/x-icon">

    
</head>
    <!-- end::Head -->

    
    <!-- end::Body -->
    <body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

        
        
        <!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    
            
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-2 img_login_fondo" id="m_login" >

    <div class="m-grid__item m-grid__item--fluid    m-login__wrapper">
        <div class="m-login__container">
            <div class="m-login__logo">
                <a href="#" class="img_profile">
                
                </a>
            </div>

            <div class="m-login__signin">
                <div class="m-login__head">
                    <h3 class="m-login__title hhh">Iniciar Sesión</h3>
                </div>

                <form class="m-login__form m-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group m-form__group ">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} m-input"   type="email"  name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                    <div class="form-group m-form__group ">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                    </div>
                    
                    <div class="m-login__form-action">
                        <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">Sign In</button>

                    </div>
                </form>

            </div>
            
        </div>  
    </div>
</div>              
        

</div>
<!-- end:: Page -->


        <!--begin::Base Scripts -->        
                <script src="js/vendors.bundle.js" type="text/javascript"></script>
                <script src="js/scripts.bundle.js" type="text/javascript"></script>
                <!--end::Base Scripts -->   

         

        
                    
        <!--begin::Page Snippets --> 
                <script src="js/login.js" type="text/javascript"></script>
                <!--end::Page Snippets -->   
        
                
            </body>
    <!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/?page=snippets/pages/user/login-3&demo=default by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jun 2018 18:00:03 GMT -->
</html>