<?php
session_start();

//GETデータ取得
$id = $_GET["id"];

//DB接続
include("funcs.php");
$pdo = db_conn();
sschk();

//データ登録SQL作成
$sql = "DELETE FROM ec_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("ec_select.php");
}
?>