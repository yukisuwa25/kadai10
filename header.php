<!-- ok -->
<?php
session_start();
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
<header class="text-black body-font bg-gray-200">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-black mb-4 md:mb-0">
      <img src="./img/header.png" class="w-12">
      <span class="ml-3 text-xl font-semibold">諏訪人形</span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./main.php">ホーム</a>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./login.php">ログイン</a>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./logout.php">ログアウト</a>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./ec_index.php">商品一覧</a>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./play.php">子供向け</a>
      <?php if($_SESSION["kanri_flg"]=="1"){ ?>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./user_select.php">U管理画面</a>
      <?php } ?>
      <?php if($_SESSION["kanri_flg"]=="1"){ ?>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./ec_select.php">I管理画面</a>
      <?php } ?>
      <?php if($_SESSION["kanri_flg"]=="1"){ ?>
      <a class="mr-5 hover:text-gray-900 font-semibold text-red-700" href="./form_select.php">M管理画面</a>
      <?php } ?>
    </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0 text-black">
      <a href="./user.php">会員登録</a>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button>
  </div>
</header>
</body>
</html>