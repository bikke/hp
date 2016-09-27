<?php
if(!$_POST){  
header('Location: ./inq02.php');  
}
header('X-FRAME-OPTIONS: DENY');
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>お問い合わせフォーム・完了・送信ページ</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
    <h1>お問い合わせフォーム・完了・送信ページ</h1>
    <?PHP 
	
	//すべて受信
	extract($_POST);
	
	//宛先作成自分のメールアドレスを$toに入れる
	$to="bikke015@gmail.com";
	
	//タイトル作成
	$title="お問い合わせです。";
	$from = "bikke015@gmail.com";
	$header="From: {$from}\nReply-To: {$from}\nContent-Type: text/plain;";
	
	//本文を作成
	$all="
お名前：
$namae

大学/学部/学科：
$univ / $fac / $depart

テニス歴：
$year

メールアドレス：
$mail1


お問い合わせ内容：
$naiyou";



	//メール送信
	//mb_send_mail($to,$title,$all,$header);
	if(mb_send_mail($to,$title,$all,$header)){
		
		echo "担当者にメールを送信いたしました。<br />
		このたびはお問い合わせいただき、誠にありがとうございました。<br />";
		
	}
	else{
		
		echo"メールの送信に失敗しました。<br />
		再度お問い合わせください。<br /><br />";
		
	}
	
	//返信用作成
	
	
	//タイトル作成
	$title2="[BIKKE]お問い合わせありがとうございます";
	
	//本文を作成
	$all2="このメールは自動送信です。
このたびはお問い合わせいただき、誠にありがとうございます。
今一度ご入力内容をご確認ください。

------------------------------------
お名前：
$namae

大学/学部/学科：
$univ / $fac / $depart

テニス歴：
$year

メールアドレス：
$mail1


お問い合わせ内容：
$naiyou
------------------------------------

担当者よりご連絡させていただきますので今しばらくお待ちいただきますようよろしくお願いいたします。

BIKKE web担当";


	//送信
	mb_send_mail($mail1,$title2,$all2,"FROM:$to");
	
	
	?>
</div><!--wrap_end -->
<em>確認用のメールをご入力されたメールアドレスに送信しています。「[BIKKE]お問い合わせありがとうございます」という件名の確認メールが届かなかった場合は迷惑メールボックスを確認のうえ、もう一度お問い合わせをお願いします。</em>
<p style="text-align:center;"><a href="../home.php">HOMEに戻る</a></p>
</body>
</html>