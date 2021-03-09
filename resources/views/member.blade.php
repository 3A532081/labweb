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
				<li><a href="{{ route('about') }}">關於我們</a></li>
				<li><a href="{{ route('enviro') }}">實驗室環境</a></li>
				<li><a href="{{ route('members') }}">成員介紹</a></li>
				<li><a href="{{ route('tech') }}">技術資源</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /Fixed navbar -->	
<!-- Faculty Section -->
<div class="faculty" id="faculty">
	<div class="container">
	    <div class="ftop">
		    <h3>lab成員</h3>
			<label class="line"></label>
		</div>
		<?php
		$count=0;
		?>
		@foreach($members as $member)
        <div class="col-md-3 col-sm-3 fgrids">
		 	<div class="ftext" style="center" >
				<h4>{{$member->name}}</h4>
				<label class="fline"></label>
				<h4>{{$member->name_en}}</h4>
				<h4>{{$member->year}}級</h4>
				<h4>{{$member->class}}年級</h4>
				<h4>{{$member->skill}}</h4>
				<h4>{{$member->email}}</h4>
			</div>
		</div>
		<?php
		$count++;
		if( $count%4==0 )
		{
			print($count);?>
			
		<hr  width="0px" >
		<?php 
		}
		?>
		
		
		@endforeach
		
		<!--
		<div class="table-responsive">
                    <table class="table table-bordered table-hover" style="background-color:white;">
                        <thead>
                        <tr>
                            <th width="30" style="text-align: center">姓名</th>
                            <th width="30" style="text-align: center">英文</th>
                            <th width="30" style="text-align: center">專長</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $member)
                            <tr>
                                <td>{{$member->name}}</td>
								<td>{{$member->name_en}}</td>
								<td>{{$member->skill}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
				</div>
				hello
				
	</div>
	-->
</div>
<!-- //Faculty Section -->

<!-- Clients Section -->

<!--// Clients Section -->
<!-- Contact Section -->

<!-- //Contact Section -->
<!-- Social Icons Section -->
<!-- //Social Icons Section -->
<!-- Footer Section -->
<div class="footer" id ="footer">
	<div class="container">
		<br>  國立中正大學資料分析暨巨量資料分析實驗室
		<br>  國立中正大學管理學院四樓413
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
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top,
  }, 900, function(){

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
			$(function () {
				// Slideshow 4
				$("#slider5").responsiveSlides({
						auto: true,
						pager: true,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
							$('.events').append();
						},
						after: function () {
							$('.events').append();
						}
					});				
				});
			</script>
</body>
</html>