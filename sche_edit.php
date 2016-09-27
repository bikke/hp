<?php
$save_file=dirname(__FILE__)."/inf/message.txt";
$master_password = "coat";

if (isset($_POST["msg"])) {
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
    if ($pass !== $master_password) {
        echo "This password is not correct!";
        exit;
    }

    file_put_contents($save_file, $_POST["msg"]);
    echo "The information was successfully updated";
    print "</br><a href=\"schedule.php\">戻って確認</a>";
} else {
    $self = $_SERVER["SCRIPT_NAME"];
    echo <<< __FORM__
<!-- 投稿フォーム -->
<form method="POST" action="$self">
<textarea name="msg" cols="60" rows="10">
</textarea><br/>
パスワード:
<input type="password" name="pass" />
<input type="submit" value="投稿" />
</form>
__FORM__;
}
?>