<?php
//POSTデータ取得
$id = $_POST["id"];
$item = $_POST["item"];
$value = $_POST["value"];
$content = $_POST["content"];

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "UPDATE ec_table SET item=:item, value=:value, content=:content WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':item', $item, PDO::PARAM_STR);
$stmt->bindValue(':value', $value, PDO::PARAM_INT);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後
if($status==false){
    sql_error($stmt);
}else{
    redirect("ec_select.php");
}
?>