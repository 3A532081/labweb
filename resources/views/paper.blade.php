<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
  <title>DSBDA of CCUMIS--Members</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Career Builder Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <!-- css links -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/slider.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" href="css/facultystyle.css" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
  <!-- /css links -->
  <!--  <link href='//fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'> -->
  <script src="js/SmoothScroll.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">DSBDA</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">DSBDA</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('index') }}">HOME</a></li>
          <li><a href="{{ route('about') }}">????????????</a></li>
          <li><a href="{{ route('enviro') }}">???????????????</a></li>
          <li><a href="{{ route('members') }}">????????????</a></li>
          <li><a href="{{ route('tech') }}">????????????</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </nav>

  <?php
  echo $_SERVER['REQUEST_URI'];
  $url = $_SERVER['REQUEST_URI'];
  if ($url == "/paperpeiju") {  ?>
    <div>
      <br>
      <br>
      <table align="center" border="0" style="text-align:left; width:450px;">
        ???<tr style="height: 5px;">
          ???<td rowspan="7">
            <img src="images/a.jpg" style="padding: 5px;">
          </td>
          ???<td style="width:60%">??????????????????</td>
        </tr>
        <tr>
          <td>
            <b>??????????????????</b>
          </td>
        </tr>
        <tr>
          <td>????????????????????????????????????????????????</td>
        </tr>
        <tr>
          <td>?????????
            ?????????????????????????????????????????????????????????????????????????????????UI/UX
          </td>
        </tr>
        <tr>
          <td>??????????????????620</td>
        </tr>
        <tr>
          <td>?????????34622</td>
        </tr>
        <tr>
          <td>E-MAIL???pjlee@mis.ccu.edu.tw</td>
        </tr>
      </table>

    </div>
  <?php

  } else { ?>
    <div>
      <br>
      <br>
      <table align="center" border="0" style="text-align:left; width:450px;">
        ???<tr style="height: 5px;">
          ???<td rowspan="7">
            <img src="images/b.jpg" style="padding: 5px;">
          </td>
          ???<td style="width:60%">??????????????????</td>
        </tr>
        <tr>
          <td>
            <b>???????????????</b>
          </td>
        </tr>
        <tr>
          <td>?????????????????????????????????????????????</td>
        </tr>
        <tr>
          <td>?????????
          ??????????????????????????????????????????????????????????????????????????????????????????
          </td>
        </tr>
        <tr>
          <td>????????????????????????I1-913</td>
        </tr>
        <tr>
          <td>?????????????????????66560</td>
        </tr>
        <tr>
          <td>E-MAIL???yhhu@mgt.ncu.edu.tw</td>
        </tr>
      </table>

    </div>
  <?php
  }

  ?>


  <div class="table-responsive">
    <table class="table table-bordered table-hover" style="background-color:white;">
      <thead>
        <tr>
          <th width="50" style="text-align: center">????????????</th>
          <th width="10" style="text-align: center">??????</th>
          <th width="10" style="text-align: center">??????</th>
          <th width="10" style="text-align: center">??????</th>
        </tr>
      </thead>
      <tbody>
        @foreach($papers as $paper)
        <tr>
          <td>{{$paper->name}}</td>
          <td>{{$paper->year}}</td>
          <td>{{$paper->author}}</td>
          <td>{{$paper->type}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>




  <!-- Footer Section -->
  <div class="footer" id="footer">
    <div class="container">
      <br> ????????????????????????????????????????????????????????????
      <br> ????????????????????????????????????413
      <br> &copy; All Rights Reserved | Design by <a href="http://dsbda.mis.ccu.edu.tw/">DSBDA</a>
    </div>
  </div>
  <!-- //Footer Section -->
  <!-- js files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Scripts For Navbar -->

  <script src="js/jquery.scrollTo.min.js"></script>

  <!--// Scripts For Navbar -->

  <!-- Scripts For Gallery Section -->
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/common.js"></script>
  <!--// Scripts For Gallery Section -->

  <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top,
        }, 900, function() {

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      });
    })
  </script>

  <!-- /js files -->
  <!-- Script For Number Scrolling -->
  <script type="text/javascript" src="js/numscroller-1.0.js"></script>

  <!-- //Script For Number Scrolling -->
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function() {
      // Slideshow 4
      $("#slider5").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function() {
          $('.events').append();
        },
        after: function() {
          $('.events').append();
        }
      });
    });
  </script>
</body>

</html>