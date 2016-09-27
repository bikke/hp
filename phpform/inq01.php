<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>お問い合わせフォーム・入力ページ</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="initial-scale=1.0">
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
    <h1>お問い合わせフォーム・入力ページ</h1>
    <p>必要事項を入力して、確認ページに移ってください～</p>
    <form action="./inq02.php" method="post">
        <table>
            <tr>
                <th><label for="namae">お名前<span>＊必須</span></label></th>
                <td><input id="namae" type="text" name="namae" /></td>
            </tr>
            <tr>
                <th>大学/学部/学科</th>
                <td>
                    
                    <input id="namae" type="text" name="univ" />大学
                    <input id="namae" type="text" name="fac" />学部
                    <input id="namae" type="text" name="depart" />学科
                    
                </td>
            </tr>
            <tr>
                <th>テニス歴</th>
                <td>
                    
                    <!--年作成-->
                    <select name="year">

                        <option>未経験</option>
			<option>3年未満</option>
			<option>3～6年</option>
			<option>6年以上</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="mail1">メールアドレス<span>＊必須</span></label></th>
                <td><input id="mail1" name="mail1" type="text" /><span>outlook.comのアドレス以外でお願いします</span></td>
            </tr>
            <tr>
                <th><label for="mail2">メールアドレス確認用<span>＊必須</span></label></th>
                <td><input id="mail2" name="mail2" type="text" /><span>outlook.comのアドレス以外でお願いします</span></td>
            </tr>
            <tr>
                <th><label for="naiyou">お問い合わせ内容<span>＊必須</span></label></th>
                <td><textarea id="naiyou" name="naiyou" cols="*" rows="*"></textarea></td>
            </tr>
        </table>
        <div class="button">
        	<input type="submit" value="内容を確認する" /><input type="reset" value="内容をリセットする" />
        </div>
        <!--button_end -->
    </form>
    
</div>
<!--wrap_end-->
</body>
</html>
