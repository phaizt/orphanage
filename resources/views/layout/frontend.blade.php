<!DOCTYPE html>
<html lang="en">
<head>
<title>Panti Asuhan | @yield('title') </title>
<meta charset="utf-8">
<link rel="stylesheet" href="{{ asset('fe/css/reset.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('fe/css/layout.css') }}" type="text/css" media="all">
<link rel="stylesheet" href="{{ asset('fe/css/style.css') }}" type="text/css" media="all">
<script type="text/javascript" src="{{ asset('fe/js/jquery-1.6.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/cufon-yui.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/cufon-replace.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/Vegur_700.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/Vegur_400.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/Vegur_300.font.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/tms-0.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/tms_presets.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/backgroundPosition.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/atooltip.jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('fe/js/script.js') }}"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="{{$active['page_id'] ?? 'page1'}}">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <h1><a href="{{ url('') }}" id="logo">Hope Center</a></h1>
        <nav>
          <ul id="top_nav">
            <li><a href="index.html"><img src="{{ asset('fe/images/top_icon1.gif') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ asset('fe/images/top_icon2.gif') }}" alt=""></a></li>
            <li class="end"><a href="contact.html"><img src="{{ asset('fe/images/top_icon3.gif') }}" alt=""></a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
            <li id="{!! $active['homepage'] ?? ''!!}"><a href="{{ url('') }}">Home</a></li>
            <li id="{!! $active['mission'] ?? ''!!}"><a href="{{ url('mission') }}">Our Mission</a></li>
            <li id="{!! $active['news'] ?? ''!!}"><a href="{{ url('news') }}">News &amp; Press</a></li>
            <li id="{!! $active['help'] ?? ''!!}"><a href="{{ url('help') }}">How to Help</a></li>
            <li id="{!! $active['contact'] ?? ''!!}"><a href="{{ url('contact') }}">Contact</a></li>
          </ul>
        </nav>
      </div>
      @yield('slider')
    </header>
    <!-- / header -->
    <!-- content -->
    @yield('content')
    <!-- / content -->
    <!-- footer -->
    <footer>
      <div class="wrapper"> <a href="index.html" id="footer_logo"><span>Hope</span>Center</a>
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="{{ asset('fe/images/icon1.gif') }}" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="{{ asset('fe/images/icon2.gif') }}" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="{{ asset('fe/images/icon3.gif') }}" alt=""></a></li>
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="mission.html">Our Mission</a></li>
            <li><a href="news.html">News &amp; Press</a></li>
            <li><a href="help.html">How to Help</a></li>
            <li class="end"><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>+1 800</span>123 45 67</div>
      </div>
      <div id="footer_text">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved<br>
        Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></div>
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
@stack('appjs')
</body>
</html>