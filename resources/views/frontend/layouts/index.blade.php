<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<!--<![endif]-->
<head>
@include('frontend.includes.header')
</head>
@include('frontend.includes.svg_symbol')

<body>
  @include('frontend.includes.navbar')
  @include('frontend.includes.slide')

  @yield('mainpart')
  
@include('frontend.includes.footer')
<a href="" id="scroll" title="Scroll to Top" style="display: none;">
<i class="fa fa-angle-double-up"></i>
</a>

<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body>
</html>
