<?php
session_start();

if($_POST['acc'] == 'boot' && $_POST['pw'] == '123') {
    echo '登入成功';
    $_SESSION['login'] = 1;
} else {
    echo '登入失敗';
    header("location:login_page.php");
}


?>