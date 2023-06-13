<?php
session_start();

//GETデータ取得
$id = $_GET["id"];

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "SELECT * FROM ec_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if($status==false) {
    sql_error($stmt);
}

//1データ取得
$v = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tailwind.css">
    <title>Document</title>
</head>
<body>
<!-- header読み込み -->
<?php include('header.php'); ?>

<section class="text-gray-600 body-font bg-gray-50">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="upload/<?=$v["img"]?>">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"><?=$v["item"]?></h1>
      <p class="mb-8 leading-relaxed"><?=$v["value"]?>円</p>
      <label><input type="number" value="1" name="num" min="1" max="50" class="bg-gray-50 text-center">個</label>
      <p class="mb-8 leading-relaxed"><?=$v["content"]?></p>
        <input type="hidden" name="id" value="<?=$v["id"]?>">
        <input type="hidden" name="upfile" value="<?=$v["img"]?>">
        <input type="hidden" name="item" value="<?=$v["item"]?>">
        <input type="hidden" name="value" value="<?=$v["value"]?>">
        <a href="#">
            <div class="p-2 w-full">
            <input type="submit" value="購入" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
        </div>
        </a>
      <!-- <div class="p-2 w-full">
        <input type="submit" value="購入" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
      </div> -->
    </div>
  </div>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>