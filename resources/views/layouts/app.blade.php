<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>One</title>
{!! Html::style ('Website\css/bootstrap.min.css') !!}
{!! Html::style ('Website\css/flexslider.css') !!}
{!! Html::style ('Website\css/style.css') !!}
{!! Html::style ('Website\css/font-awesome.min.css') !!}
{!! Html::script ('Website\js/jquery.min.js') !!}




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
   

    <title>
    Site Immobilier

     @yield('title')

    </title>

  
</head>
<body style="direction: ltr">

<div class="header">
  <div class="container"> <a class="navbar-brand" href="{{ url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
    <div class="menu "> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li class="current"><a href="{{ url('/home')}}">Home</a></li>
        <li><a href="{{ url('/about')}}">About Us</a></li>
        <li><a href="{{ url('/service')}}">Services</a></li>
        <li><a href="{{ url('/contact')}}">Contact Us</a></li>
         @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout PLZ !!
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
        <div class="clear"></div>
      </ul>
      
    </div>
  </div>
</div>
   

 @yield('content')

 <div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>
    <!-- Scripts -->
    {!! Html::script ('Website\js/bootstrap.min.js') !!}
    {!! Html::script ('Website\js/jquery.flexslider.js') !!}
    {!! Html::script ('Website\js/responsive-nav.js') !!}
    
</body>
</html>
