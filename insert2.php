<?php
session_start();
//POSTデータ取得
$title = $_POST["title"];
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
$sql = "INSERT INTO kadai10_content_table2(title,content,img,indate)VALUES(:title, :content, :img, sysdate());";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':img', $img, PDO::PARAM_STR);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("select2.php");
}
?>