<?php
session_start();

include("funcs.php");
sschk();
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

<!-- メイン作成 -->
<section class="text-gray-600 body-font relative bg-gray-50">
  <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">登録画面</h1>
        </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <!-- form作成 -->
        <form method="POST" action="ec_insert.php" enctype="multipart/form-data" class="mx-auto">
            <!-- 商品名作成 -->
            <div class="p-2 w-full">
                <div class="relative">
                    <label class="leading-7 text-sm text-gray-600">商品名</label>
                    <input type="text" name="item" placeholder="商品名を入力" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <!-- 金額作成 -->
            <div class="p-2 w-full">
                <div class="relative">
                    <label class="leading-7 text-sm text-gray-600">金額</label>
                    <input type="text" name="value" placeholder="金額を入力" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
            </div>
            <!-- コンテンツ作成 -->
            <div class="p-2 w-full">
                <div class="relative">
                    <label for="content" class="leading-7 text-sm text-gray-600">商品紹介</label>
                    <textarea name="content" rows="4" cols="40" placeholder="商品紹介を入力" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
            </div>
            <!-- ファイルアップ -->
            <div>
                <input type="file" name="upfile" class="mb-24">
            </div>
            <!-- 送信ボタン -->
            <div class="p-2 w-full">
                <input type="submit" value="登録" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
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