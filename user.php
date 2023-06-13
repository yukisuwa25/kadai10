<?php
session_start();
include "funcs.php";
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
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">会員登録</h1>
    </div>

    <form method="post" action="user_insert.php">

    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-full">
          <div class="relative">
            <label class="leading-7 text-sm text-gray-600">名前</label>
            <input type="text" name="name" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label class="leading-7 text-sm text-gray-600">ID</label>
            <input type="text" name="lid" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label class="leading-7 text-sm text-gray-600">PW</label>
            <input type="text" name="lpw" class="w-full bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2 pb-24">
          <div class="relative">
            <label class="leading-7 text-sm text-gray-600">
            <input type="radio" name="kanri_flg" value="0">
            一般</label>
          </div>
        </div>

        <?php if($_SESSION["kanri_flg"]==1){?>

        <div class="p-2 w-1/2 pb-24">
          <div class="relative">
            <label class="leading-7 text-sm text-gray-600">
            <input type="radio" name="kanri_flg" value="1">
            管理者</label>
          </div>
        </div>
        <?php }?>


        <div class="p-2 w-full">
            <input type="submit" value="登録" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
        </div>
      </div>
    </div>
    </form>

  </div>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>