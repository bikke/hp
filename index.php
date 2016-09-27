<?php
header('X-FRAME-OPTIONS: DENY');
?>
<!DOCTYPE html>
<html lang="ja"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="スタイルが一新した京都大学テニスサークルBikkeのホームページです。メンバーは京大，奈良女を中心に様々な大学の学生で構成されています。テニスはもちろん、野球大会やバスケ・バレーボールとイベントも盛りだくさんです。" />
		<meta name="keywords" content="京大,テニス,テニサー,テニスサークル,サークル,京都大学,奈良,bikke,BIKKE,びっけ,京大びっけ">
		<title>京都大学テニスサークルびっけ</title>
		
		<link rel="stylesheet" type="text/css" href="css_direct/ver1_index.css" />
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
<li><a href="#1"><img src="back/1.jpg" alt="1" /></a></li>
<li><a href="#2"><img src="back/2.jpg" alt="2" /></a></li>
<li><a href="#3"><img src="back/3.jpg" alt="3" /></a></li>
<li><a href="#4"><img src="back/4.jpg" alt="4" /></a></li>
<li><a href="#5"><img src="back/5.jpg" alt="5" /></a></li>
</ul>
</div><!--/.wideslider-->
</div><!--/#container-->
<div class="menuBox">
	<?php include_once("php_direct/side_menu.php"); ?>
</div>
<div class="description">
				<p><a href="index.html">
          <img src="http://www.access-counter.net/services/imagedigits/counter.php?aut=9a474a52ffea77cd50d8a8ce5023145106465f30f227ac1f700f3bc084af0ee7c9186ae7148b088f8d7e3a1c" alt="無料カウンター" border="0" />番目のお客さん,
ようこそ～～＾＾</a></p>


			<main class="contents">
				<section class="contents__inner">


            <div class="logo">
              <img src="back/discription.png"  width="60%" alt="Kyoto University tennis club ===BIKKE=== since 1992" />
            </div>
				<!-- <h1><i><a href="home.php">Kyoto University tennis club ===BIKKE=== since 1992</a></i></h1> -->
</div>
<div class="bikke">


					<h3>
	びっけは<a href="http://www.kyoto-u.ac.jp/ja" >京都大学</a>のテニスサークルです(・ω・)／</h3>
	<p>メンバーは京大，奈良女を中心に様々な大学の学生で構成されています。<br>
	テニスはもちろん、体育館を貸し切って球技をしたり、逃走中・密告中といったイベントも盛りだくさんです。<br>また、1～２回生が主体の他のサークルとは異なり、学年が上がっても楽しめる、学部生だけでなく大学院生(修士/博士）、さらにOB・OGとさまざまな年代の方々と関われるところがこのサークルの特色でもあります。<br></p>
	<p>大学・回生を問わずいつでもメンバーを募集しているので、
	是非テニスコートを覗きに来て下さい<br></p>
<hr><hr>

	<h3>---OB・OGの皆さんへ---</h3>
	<p>いつも温かいご支援ありがとうございます</br>
	いつまでもサークル活動を通した交流を大切にしていきたいと思います</br>
	通常練習、イベント、合宿のご参加お待ちしております～～</p>
	<hr /><hr />
	<h3>---新入生の皆さんへ---</h3>
	<p>大学合格おめでとうございます＾＾<br>
	大学生といえばサークル活動、サークル活動といえばびっけ(強引)！<br>
	いったいどんなサークルなのか、気になりますね～☆</p>
<?php
$save_file=dirname(__FILE__)."/Basic/inf/freshman.txt";
if (!file_exists($save_file)) {
    echo "　";
    exit;
}
$msg = file_get_contents($save_file);
$msg_html = htmlspecialchars($msg);
$msg_html = str_replace("\n", "<br/>", $msg_html);
echo <<< __HTML__
    <div style="border: dashed 3px green; padding:12px;"> 
    <div style="font-size:18px; color:#FF00FF;">
        {$msg_html}
    </div></div>
__HTML__;
?>

</br>
<hr><hr>
<span>＊＊お問い合わせは<a href="./phpform/inq01.php">こちら</a>から＊＊</span>
<hr><hr>
				</section>
			</main>

			<footer class="footer">
				<p>© bikke. all rights reserved.</p>
			</footer>

		</div><!-- /.wrapper -->
</div>
</div>


</body></html>