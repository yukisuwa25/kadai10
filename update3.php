<?php
//POSTデータ取得
$id = $_POST["id"];
$title = $_POST["title"];
$content = $_POST["content"];

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "UPDATE kadai10_content_table3 SET title=:title, content=:content WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("select3.php");
}
?>