<?php
session_start();

//POST
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "SELECT * FROM kadai10_user_table WHERE lid=:lid AND life_flg=0";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$status = $stmt->execute();

//SQL実行時にエラーがある場合STOP
if($status==false){
    sql_error($stmt);
}

//抽出データ数を取得
$val = $stmt->fetch();

//該当１レコードがあればSESSIONに値を代入
$pw = password_verify($lpw, $val["lpw"]);
if($pw){ 
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  redirect("main.php");
}else{
  redirect("login.php");
}
exit();