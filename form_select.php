<?php
session_start();

//DB接続
include("funcs.php");
$pdo = db_conn();

//データ登録SQL作成
$sql = "SELECT * FROM kadai10_user_table2;";
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

<section class="text-gray-600 body-font relative bg-gray-50">
<?php foreach($values as $v){ ?>
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">お問い合わせ内容</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-full">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">ID : </label>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?=$v["id"]?></p>
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">お名前 : </label>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?=$v["name"]?></p>
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス : </label>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?=$v["email"]?></p>
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">お問い合わせ内容 : </label>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?=$v["comment"]?></p>
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">送信日時 : </label>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"><?=$v["indate"]?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>