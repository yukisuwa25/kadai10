<?php
session_start();
//POSTデータ取得
$item = $_POST["item"];
$value = $_POST["value"];
$content = $_POST["content"];

//DB接続
include("funcs.php");
$pdo = db_conn();
sschk();

// ファイル処理
$status = fileUpload("upfile","upload/");
if($status==1 || $status==2){
  exit("UploadError");
}else{
  $img = $status;
}

//データ登録SQL作成
$sql = "INSERT INTO ec_table(item,value,content,img,indate)VALUES(:item,:value, :content, :img, sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':img', $img, PDO::PARAM_STR);
$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':value', $value, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("ec_select.php");
}
?>