<?php
if(!$_POST){  
header('Location: ./inq01.php');  
}
header('X-FRAME-OPTIONS: DENY');
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>お問い合わせフォーム・エラーチェック・確認ページ</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
    <h1>お問い合わせフォーム・エラーチェック・確認ページ</h1>
    <?PHP 

	//すべて受信
	extract($_POST);
	
	//エラー用FLAG未記入の場合1にする
	$flag=0;
	
	//名前チェック
	if(empty($namae)){
				
		echo '<p><span>必須</span>お名前を入力してください。</p><br />'."\n";
		$flag=1;
				
	}

	if(empty($univ)){
				
		echo '<p><span>必須</span>大学名を入力してください。</p><br />'."\n";
		$flag=1;
				
	}

	if(empty($fac)){
				
		echo '<p><span>必須</span>学部名を入力してください。</p><br />'."\n";
		$flag=1;
				
	}

	if(empty($depart)){
				
		echo '<p><span>必須</span>学科名を入力してください。</p><br />'."\n";
		$flag=1;
				
	}

	if(empty($year)){
				
		echo '<p><span>必須</span>テニス歴を入力してください。</p><br />'."\n";
		$flag=1;
				
	}
	
	//メールアドレスチェック
	if (!preg_match('/^[a-zA-Z0-9][a-zA-Z0-9_¥.¥-]+?@[A-Za-z0-9_¥.¥-]+$/',$mail1)) {
		echo '<p>メールアドレスが正しくありません。</p><br />'."\n";
		$mail1 = false;
		$flag=1;
	}else if(preg_match('/^[a-zA-Z0-9][a-zA-Z0-9_¥.¥-]+?@[outlook.com]+$/',$mail1)) {
		echo '<p><span>outlook.com</span>のメールアドレス以外でお願いします。</p><br />'."\n";
		
		$flag=1;
	}

	if(empty($mail1)){
				
		echo '<p><span>必須</span>メールアドレスを入力してください。</p><br />'."\n";
		$flag=1;
				
	}
	
	//メールアドレス確認用チェック
	if(empty($mail2)){
				
		echo '<p><span>必須</span>メールアドレス確認用を入力してください。</p><br />'."\n";
		$flag=1;
				
	}
	//メールアドレスとメールアドレス確認用が同じかチェック
	elseif($mail1!=$mail2){
				
		echo '<p><span>必須</span>メールアドレスが一致していません。</p><br />'."\n";
		$flag=1;
				
	}
	
	//お問い合わせ内容チェック
	if(empty($naiyou)){
				
		echo '<p><span>必須</span>お問い合わせ内容を入力してください。</p><br />'."\n";
		$flag=1;
				
	}
	
	//エラーの場合(上記で未記入の場合flagを1にしているので)すなわちflagが1の場合戻るボタンを作成
	if($flag==1){
				
		echo '<div class="button"><input type="button" onclick="self.history.back()" value="入力画面に戻る"/></div>'."\n";
				
				
	}
	//必須が全て入力されていれば
	else{
		
		echo '
	
    <form action="inq03.php" method="post">
        <table>
            <tr>
                <th>お名前</label></th>
                <td>'.htmlspecialchars($namae, ENT_QUOTES).'
            </tr>
            
            <tr>
                <th>大学学部学科</th>
                <td>'.htmlspecialchars($univ, ENT_QUOTES).'大学'.htmlspecialchars($fac, ENT_QUOTES).'学部'.htmlspecialchars($depart, ENT_QUOTES).'学科</td>
            </tr>
            <tr>
                <th>テニス歴</th>
                <td>'."$year".'</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>'.htmlspecialchars($mail1, ENT_QUOTES).'</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>'.htmlspecialchars($naiyou, ENT_QUOTES).'</td>
            </tr>
        </table>
        <div class="button">
        	<input type="submit" value="送信する" /><input type="button" onclick="self.history.back()" value="入力画面に戻る" />
        </div>
        <!--button_end -->
		<input type="hidden" value="'.$namae.'" name="namae"/>
		
		<input type="hidden" value="'.$univ.'" name="univ"/>
		<input type="hidden" value="'.$fac.'" name="fac"/>
		<input type="hidden" value="'.$depart.'" name="depart"/>
		<input type="hidden" value="'.$year.'" name="year"/>
		
		<input type="hidden" value="'.$mail1.'" name="mail1"/>
		<input type="hidden" value="'.$naiyou.'" name="naiyou"/>
    </form>';
		}
		?>
   
</div>
<!--wrap_end-->
</body>
</html>
