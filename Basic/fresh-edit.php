<?php
$save_file=dirname(__FILE__)."/inf/freshman.txt";
$master_password = "FreshMan";

if (isset($_POST["msg"])) {
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
    if ($pass !== $master_password) {
        echo "This password is not correct!";
	 print "</br><a href=\"fresh-edit.php\">戻ってやり直し</a>";
        exit;
    }

    file_put_contents($save_file, $_POST["msg"]);
    echo "The information was successfully updated.";
    print "</br><a href=\"../home.php\">戻って確認</a>";
} else {
    $self = $_SERVER["SCRIPT_NAME"];
    echo <<< __FORM__
<!-- 投稿フォーム -->
<form method="POST" action="$self">
<textarea name="msg" cols="60" rows="10">
この文を消してから、広報をよろしく～
</textarea><br/>
パスワード:
<input type="password" name="pass" />
<input type="submit" value="投稿" />
</form>
__FORM__;
}
?>