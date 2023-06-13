<?php
session_start();

include "funcs.php";
sschk();

//DB接続
$id = filter_input( INPUT_GET, "id" );
$pdo = db_conn();

//データ登録SQL作成
$sql = "DELETE FROM kadai10_user_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect("user_select.php");
}
?>