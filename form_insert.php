<?php
session_start();
//POSTデータ取得
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "INSERT INTO kadai10_user_table2(name,email,comment,indate)VALUES(:name, :email, :comment, sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("form_top.php");
}
?>