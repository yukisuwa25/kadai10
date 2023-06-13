<?php
session_start();

//GETデータ取得
$id = $_GET["id"];

//DB接続
include("funcs.php");
$pdo = db_conn();
sschk();

//データ登録SQL作成
$sql = "SELECT * FROM kadai10_content_table4 WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if($status==false) {
    sql_error($stmt);
}

//全データ取得
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

<section class="text-gray-600 body-font relative bg-gray-50">
  <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">更新画面</h1>
        </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <!-- form作成 -->
        <form method="POST" action="update4.php" class="mx-auto">
            <!-- タイトル作成 -->
            <div class="p-2 w-full">
                <div class="relative">
                    <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
                    <input value="<?=$v["title"]?>" type="text" name="title" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <!-- コンテンツ作成 -->
            <div class="p-2 w-full">
                <div class="relative">
                    <label for="content" class="leading-7 text-sm text-gray-600">テキスト</label>
                    <textarea name="content" rows="4" cols="40" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"><?=$v["content"]?></textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="<?=$v["id"]?>">
            <!-- 送信ボタン -->
            <div class="p-2 w-full">
                <input type="submit" value="更新" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
            </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>