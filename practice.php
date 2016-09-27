<?php
header('X-FRAME-OPTIONS: DENY');
?>
<!DOCTYPE html>
<html lang="ja"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<title>京都大学テニスサークルびっけ</title>
		
		<link rel="stylesheet" type="text/css" href="css_direct/ver1.css" />
		<link rel="stylesheet" href="js_direct/reset.css" media="all">
		
		<script src="js_direct/jquery.js"></script>
		<script type="text/javascript" src="js_direct/side_menu.js"></script>
		<script type="text/javascript" src="js_direct/side.js"></script>

<!--<[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js_direct/fullslider.js"></script>

	</head>
<!--------------------------------------------------------->


	<body class="">
		<div class="overlay" id="js__overlay"></div>
		<nav class="side-menu" id="js__sideMenu">
			<?php include_once("php_direct/time.php"); ?>	
			<ul class="side-menu__ul">
			<?php include_once("php_direct/side.php"); ?>	
			</ul>
		</nav>

		<div class="side-menu-btn" id="js__sideMenuBtn">
			<div class="ellipsis-v">
				<span class="point top"></span>
				<span class="point mid"></span>
				<span class="point bot"></span>
			</div>
		</div>

		<div class="wrapper">

			<div class="logo">
			  <img src="back/bikke_logo.png" alt="1"  width="35%" />
			</div>
<div class="fixedlogo">
<p id="toPageTop"><a><img src="back/bikke_logo.png" alt="1" width="35%"/></a></p>
</div>
<script src="js_direct/scroll.js"></script>

<div id="container">
<div class="wideslider">
<ul>
<?php include_once("php_direct/backslide.php"); ?>
</ul>
</div><!--/.wideslider-->
</div><!--/#container-->
<div class="menuBox">
	<?php include_once("php_direct/side_menu.php"); ?>
</div>

<div class="logo">
	<img src="back/discription.png" alt="Kyoto University tennis club ===BIKKE=== since 1992" width="60%"/>
</div>
			<main class="contents">
				<section class="contents__inner">
				
	
<div class="bikke"><!--<div style="text-align:right;">--->
	
					<h2>練習について</h2>
	<h3>さてさて、一体どのような練習をしているのでしょうか？</h3>
	<p><i>びっけ</i>では、ストローク、ボレー、スマッシュといった基本の球出し練習に加えて、
	主にダブルスを想定した試合形式の練習を行っています。<br>通常練習では練習用コートと試合用コートに分け、練習だけでなく、普段から、実際に試合を織り交ぜながらテニスを楽しんでいます。主に利用する鴻ノ池コートでは、午前の部（9:00～12:00）と午後の部（13:00～17:00）の両方で、それぞれ3面ずつ借りているため、1日中十分に練習に打ち込めます。都合のよい時間帯だけの参加も可能です。<br></p>
</div>
<img src="photo/moving_ball2.gif" alt="ball" width="100%" /><br><!---height="400" />--->
<div class="bikke">
	<img src="photo/01241.jpg" onClick="this.src='photo/010.jpg'" width="75%">
	<!--<p><img src="*.gif" alt="練習風景を近日公開！？" width="200" height="155" /></p>-->
	<p>4月、5月の新歓期には新入生用コートを用意し、基礎の基礎から先輩たちが丁寧に教えてくれるため、すぐに上手くなれます！！<br>経験者はもちろん大学生からテニスを始たいという方も自分に合ったスタイルで練習に取り組むことができます！！
<br>
</p>
			<hr />
	    <hr />
		
				</section>
			</main>
			
		<div class="foot">
			<footer class="footer">
				<p>　</p>
			</footer>
		</div>
		</div><!-- /.wrapper -->
</div>

	
</body></html>