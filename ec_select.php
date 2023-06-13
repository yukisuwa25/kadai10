<?php
session_start();

//DB接続
include("funcs.php");
$pdo = db_conn();
sschk();

//データ登録SQL作成
$sql = "SELECT * FROM ec_table;";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
if($status==false) {
    sql_error($stmt);
}

//全データ取得
$values =  $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<section class="bg-gray-50">
    <div class="text-gray-600 body-font bg-gray-50 text-center pt-24">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">アイテム管理画面</h1>
    </div>
<?php if($_SESSION["kanri_flg"]==1){?>
    <div class="text-gray-600 body-font bg-gray-50 text-center pt-24">
        <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="./ec_item.php">商品追加</a>
    </div>
<?php }?>
<?php foreach($values as $v){ ?>
<section class="text-gray-600 body-font bg-gray-50">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="upload/<?=$v["img"]?>">
    <div class="text-center lg:w-2/3 w-full">
      <p class="mb-8 leading-relaxed"><?=$v["item"]?></p>
      <p class="mb-8 leading-relaxed"><?=$v["value"]?>円</p>
      <p class="mb-8 leading-relaxed"><?=$v["content"]?></p>
      <p class="mb-8 leading-relaxed"><?=$v["indate"]?></p>
    </div>
  </div>
  <?php if($_SESSION["kanri_flg"]==1){?>
    <div class="flex justify-center pb-24">
        <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" href="ec_detail.php?id=<?=$v["id"]?>">編集</a>
        <a class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg" href="ec_delete.php?id=<?=$v["id"]?>">削除</a>
    </div>
  <?php }?>
</section>
<?php }?>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>