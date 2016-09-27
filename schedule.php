<!DOCTYPE html>
<html lang="ja"><head>
<?php $info = file_get_contents("inf/3sch.txt"); ?>
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

					
	
<div class="bikke">
	
					<h2>通常練習</h2>
	<h3><i>Bikke</i>の練習予定、イベント情報をお知らせします</h3>
	<!----<p><?php echo nl2br($info,false); ?></p>---->
<?php
$save_file=dirname(__FILE__)."/Basic/inf/message.txt";
if (!file_exists($save_file)) {
    echo "まだscheduleはありません!!";
    exit;
}
$msg = file_get_contents($save_file);
$msg_html = htmlspecialchars($msg);
$msg_html = str_replace("\n", "<br/>", $msg_html);
echo <<< __HTML__
    <div style="border: dashed 3px green; padding:12px;"> 
    <div style="font-size:18px; color:blue;">
        {$msg_html}
    </div></div>
__HTML__;
?>
	<h2>合宿</h2>
	<p>・夏合宿（8/28～9/3）</p>
		</hr></hr>

<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=97ivl9rq8bog5t0buetbri0huk%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=Asia%2FTokyo" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
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