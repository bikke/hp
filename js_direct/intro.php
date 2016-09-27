<?php
header('X-FRAME-OPTIONS: DENY');
?>
<!DOCTYPE html>
<html lang="ja"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="description" content="京都大学テニスサークルBikkeのホームページです。このページでは、Bikke全般について練習コート情報、名前の由来などを紹介します。" />
		<meta name="keywords" content="京大,テニス,テニサー,テニスサークル,サークル,京都大学,奈良,bikke,BIKKE,びっけ,京大びっけ">
		<title>京都大学テニスサークルびっけ</title>

		<link rel="stylesheet" type="text/css" href="css_direct/ver1.css" />
		<link rel="stylesheet" href="js_direct/reset.css" media="all">

		<script src="js_direct/jquery.js"></script>
		<script>

$(function () {
	var $jsBlogMenuChild = $('.side-menu__li'),
		$body = $('body');
	//blog side menu
	$jsBlogMenuChild.on('click', function () {
		$(this).toggleClass('active');
	});
	//menu btn
	$('#js__sideMenuBtn').on('click', function () {
		$body.toggleClass('side-open');
		$('#js__overlay').on('click', function () {
			$body.removeClass('side-open');
		});
	});
});
		</script>

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
			  <img src="back/bikke_logo.png" alt="1" />
			</div>
<div id="container">
<div class="wideslider">
<ul>
<?php include_once("php_direct/backslide.php"); ?>
</ul>
</div><!--/.wideslider-->
</div><!--/#container-->

<div class="logo">
	<img src="back/discription.png" alt="Kyoto University tennis club ===BIKKE=== since 1992" />
</div>

			<main class="contents">
				<section class="contents__inner">

<div class="bikke">
	<h3>これを読めば、<i>Bikke</i>が分かる！</h3>
	<p>このページでは、びっけがどんなサークルなのかを紹介します！~<br>
びっけの概要・練習コートなどの紹介です。<br>

</p>
	<h3><i>Bikke</i>ってどんなサークル？</h3>
	<p>新入生の皆さん、びっけのホームページをご覧いただき有り難うございます~<br>
	びっけは奈良で活動している”テニスサークル”です！~<br>
	大学生活の１コマにサークル活動はいかがでしょうか？<br>
<br>
	大学生なら、所属大学、回生、テニスの経験は問いません！~<br>
	サークル内にも大学からテニスを始めた人が沢山います~<br>
	人数制限もないので是非友達を誘って~
	テニスコートを覗きに来て下さい★☆★</p>

	<h3>構成人数</h3>
	<p>びっけには約100人のメンバーが所属しています~<br>

	メンバーの所属大学は京大・奈良女・阪大・同志社などなど~<br>
	過去に京大オール(シングル)も在籍していました！</p>

	<h3>練習場所</h3>
	<p>練習は”毎週土曜日”に”鴻池コート”…etcでやっています<br>
	　<a href="access.html">詳しくは</a>
</p>
	<h3>びっけの由来</h3>
	<h3>”びっけ”って変な名前～！？どういう意味なの？？・・・<br>
って，誰もが思いましたよね。<br>
一体誰が名付けたんでしょうねぇ。<br>
何か由来があるんでしょうか？？(^^;)<br>
</h3>
	<p>びっけの名前の由来はアニメ<a href="http://www.vicke.ne.jp/pg002.html">「小さなバイキングびっけ」</a>（’74.4～’75.9放送）からきたそうです． ビッケのお父さん・ハルバル父さんは海賊船の船長さん． フラーケの仲間達と海を渡り遠征する． 毎回，色々なピンチが毎回おとずれるが， ビッケ少年が人差し指で鼻の下をこすると知恵がヒラメキ問題解決！！という 一休さんの海賊版みたいなお話です．</p>

			<!--<p><img src="*.gif" alt="画面" width="200" height="155" /></p>-->
			<hr />
	    <hr />

				</section>
			</main>
			<footer class="footer">
				<p>　</p>
			</footer>

		</div><!-- /.wrapper -->
</div>


</body></html>
