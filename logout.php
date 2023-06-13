<?php
session_start();

//SESSIONを初期化
$_SESSION = array();

//Cookieに保存してある"SessionIDの保存期間を過去にして破棄
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

//サーバ側セッションIDの破棄
session_destroy();

//処理後、index.phpへリダイレクト
header("Location: main.php");
exit();
?>