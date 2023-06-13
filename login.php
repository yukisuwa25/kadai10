<!-- n -->
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
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">ログイン画面</h1>
    </div>
    <!-- form作成 -->
    <form name="form1" action="login_act.php" method="post">
        <!-- id作成 -->
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
        <div class="relative flex-grow w-full">
            <label class="leading-7 text-sm text-gray-600">ID</label>
            <input type="text" name="lid" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative flex-grow w-full">
            <label class="leading-7 text-sm text-gray-600">PW</label>
            <input type="password" name="lpw" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <input type="submit" value="LOGIN" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
        </div>
    </form>
  </div>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>