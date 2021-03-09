<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>DSBDA of CCUMIS</title>
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
<style type="text/css">
	html,body,h1,h2,h3,h4,h5{
		font-family:'Microsoft JhengHei','Heiti TC','sans-serif';
	}
	#abgne-block-20120804 {
		width: 650px;	/* 圖片寬度 + 縮圖寬度 + 間隔 8px */
		height: 340px;	/* 圖片高度 */
		padding: 6px 15px;
		position: relative;
		border: 1px solid #ccc;
	}
	#abgne-block-20120804 ul, #abgne-block-20120804 li {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	#abgne-block-20120804 img {
		border: none;
	}
	#abgne-block-20120804 .photo {
		width: 500px;	/* 圖片寬度 */
		height: 340px;	/* 圖片高度 */
		position: absolute;
	}
	#abgne-block-20120804 .desc-block {
		position: absolute;
		bottom: 0px;
		left: 0;
		width: 450px;	/* 圖片寬度 */
		height: 32px;
	}
	#abgne-block-20120804 .desc-bg, #abgne-block-20120804 .desc-title {
		position: absolute;
		width: 500px;	/* 圖片寬度 - padding * 2 */
		background: #000;
		top: 0;
		height: 24px;
		padding: 4px 10px;
	}
	#abgne-block-20120804 .desc-title {
		color: #fff;
		background: none;
		line-height: 24px;
	}
	#abgne-block-20120804 #playPause-btn {	/* 播放/暫停鈕 */
		position: absolute;
		display: block;
		right: 5px;
		bottom:10px;
		width: 21px;
		height: 21px;
		width: 21px;
		height: 21px;
		text-indent: -1200px;
	}
	#abgne-block-20120804 .playPause-btn-play {
		background: url(images/sprite.png) no-repeat -21px 0px;
	}
	#abgne-block-20120804 .playPause-btn-pause {
		background: url(images/sprite.png) no-repeat 0px 0px;
	}
	#abgne-block-20120804 .thumbs {
		width: 104px;
		height: 330px;	/* 圖片高度 - padding-top */
		padding-top: 12px;
		right: 10px;
		position: absolute;
	}
	#abgne-block-20120804 .carousel {
		height: 310px;
		position: relative;
		overflow: hidden;
	}
	#abgne-block-20120804 .carousel .nav-bar {
		float: left;
		width: 2px;
		height: 63px;
		margin-right: 2px;
	}
	#abgne-block-20120804 .carousel img {
		float: left;
		width: 90px;
		height: 63px;
	}
	#abgne-block-20120804 .carousel ul {
		position: absolute;
	}
	#abgne-block-20120804 .carousel li {
		width: 94px;
		height: 72px;
	}
	#abgne-block-20120804 .carousel .current .nav-bar {	/* 當被點選時，縮圖左邊的顏色 */
		background: #007acc;
	}
	#abgne-block-20120804 .thumbs .prev, #abgne-block-20120804 .thumbs .next {	/* 縮圖上下的控制鈕 */
		position: absolute;
		left: 43px;
		width: 12px;
		height: 0px;
		padding-top: 6px;
		overflow: hidden;
		display: block;
		cursor: pointer;
		background: url(images/sprite.png) no-repeat 0 0;
	}
	#abgne-block-20120804 .thumbs .prev {
		top: 0px;
		background-position: 0 -21px;
	}
	#abgne-block-20120804 .thumbs .next {
		bottom: -2px;
		background-position: 0 -27px;
	}
</style>
<script type="text/javascript">
	$(function(){
		// 先一一取得相關的元素及高度
		var $block = $('#abgne-block-20120804'), 
			$photo = $block.find('.photo'), 
			$photoA = $photo.find('a'), 
			$photoImg = $photoA.find('img'), 
			$photoDesc = $photoA.find('.desc-title'), 
			$thumbs = $block.find('.thumbs'), 
			$carousel = $block.find('.carousel'), 
			_carouselHeight = $carousel.height(), 
			$playPauseBtn = $photo.append('<a href="#playPause" class="playPause-btn-pause" id="playPause-btn" title="暫停">暫停</a>').find('#playPause-btn'), 
			$ul = $thumbs.find('ul'), 
			$li = $ul.find('li'), 
			_liHeight = $li.height(), 
			_set = Math.ceil(_carouselHeight / _liHeight), 
			_count = Math.ceil($li.length / _set), 
			_height = _set * _liHeight * -1, 
			timer, speed = 3000, _animateSpeed = 400, // 分別設定輪播速度及動畫速度
			_index = 0, _countIndex = 0;
		
		// 先在縮圖前面都插入一個 .nav-bar, 主要是當點選到該縮圖時的效果
		$('<span class="nav-bar"></span>').insertBefore($li.find('img'));
		// 先讓描述區塊的背景有透明度
		$block.find('.desc-bg').css('opacity', 0.7);
		
		// 如果圖片組數超出一次能顯示的數量時, 產生可以切換的上下鈕
		var $controls = null;
		if(_count>1){
			$controls = $thumbs.append('<a href="#prev" class="prev"></a><a href="#next" class="next"></a>').find('.prev, .next'); 
			var $prev = $controls.eq(0).hide(), 
				$next = $controls.eq(1);
			
			// 當點擊上下鈕時
			$controls.click(function(e){
				// 計算要顯示第幾組
				_countIndex = Math.floor((e.target.className == 'prev' ? _countIndex - 1 + _count : _countIndex + 1) % _count);
				
				// 進行動畫
				$ul.stop().animate({
					top: _countIndex * _height
				}, _animateSpeed);
				
				// 判斷上下鈕顯示與否
				$prev.toggle(_countIndex>0);
				$next.toggle(_countIndex!=_count-1);

				return false;
			});
		}
		
		// 如果縮圖 li 被點擊時
		$li.click(function(){
			var $this = $(this), 
				$a = $this.find('a'), 
				$img = $this.find('img');
			
			clearTimeout(timer);
			_index = $this.index();
			// 分別改變左邊顯示區塊的超連結, 圖片, alt 及描述內容
			$photoA.attr('href', $a.attr('href'));
			$photoImg.attr({
				src: $img.attr('src'), 
				alt: $img.attr('alt')
			});
			$photoDesc.html($img.attr('alt'));
			$this.addClass('current').siblings('.current').removeClass('current');
			
			// 如果目前的播放鈕並不是在播放樣式時, 就啟動計時器
			if(!$playPauseBtn.hasClass('playPause-btn-play')) timer = setTimeout(auto, speed + _animateSpeed);

			return false;
		}).eq(_index).click();
		
		// 當播放鈕被點擊時
		$playPauseBtn.click(function(){
			// 進行 .playPause-btn-pause 及 .playPause-btn-play 樣式切換
			var $this = $(this).toggleClass('playPause-btn-pause playPause-btn-play'), 
				_hasPlay = $this.hasClass('playPause-btn-play'), 
				_txt = _hasPlay ? '播放' : '暫停';
			
			// 如果目前的播放鈕並不是在播放樣式時, 就啟動計時器; 反之則停止計時器
			if(_hasPlay) clearTimeout(timer);
			else timer = setTimeout(auto, speed);
			$this.attr('title', _txt).text(_txt);

			return false;
		});
		
		// 自動輪播使用
		function auto(){
			_index = (_index + 1) % $li.length;
			var $tmp = $li.eq(_index).click();

			var _indexCount = Math.floor(_index / _set);
			// 判斷是否要切換縮圖的顯示組數
			if($controls != null && (_index == (_countIndex + 1) * _set || _index == 0) && _countIndex != _indexCount){
				$next.click();
				$tmp.animate({opacity: 1}, _animateSpeed, function(){
					$tmp.addClass('current').siblings('.current').removeClass('current');
				})
			}
		}
	});
</script>
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
	
<!-- Banner -->
	<div class="slider">
		
			<div  id="top" class="callbacks_container-wrap">
				<ul class="rslides" id="slider5">
					<li>
						<div class="slider1"></div>
					</li>
					<li>
						<div class="slider1 slider2"></div>
					</li>
					<li>
						<div class="slider1 slider3"></div>
					</li>
					<li>
						<div class="slider1 slider4"></div>
					</li>
					<li>
						<div class="slider1 slider5"></div>
					</li>
			</div>
	</div>
<!-- /Banner -->

<!-- Footer Section -->
<!--
<div class="footer" id ="footer">
	<div class="container">
		<p> &copy; 2017 國立中正大學資料分析暨巨量資料分析實驗室 位置:國立中正大學管理學院四樓413 分機號碼:. All Rights Reserved | Design by <a href="http://dsbda.mis.ccu.edu.tw/">DSBDA</a></p>
	</div>
</div>
-->
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