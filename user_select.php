<?php
session_start();

include "funcs.php";
sschk();
$pdo = db_conn();

//データ登録SQL作成
$sql = "SELECT * FROM kadai10_user_table";
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

<section class="text-gray-600 body-font bg-gray-50">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">ユーザー管理画面</h1>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">L-ID</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">フラグ</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
          </tr>
        </thead>
        <?php foreach($values as $v){ ?>
            <tbody>
            <tr>
                <td class="px-4 py-3"><?=h($v["id"])?></td>
                <td class="px-4 py-3"><?=h($v["name"])?></td>
                <td class="px-4 py-3"><?=h($v["lid"])?></td>
                <?php if($v["kanri_flg"]==1){ ?>
                <td class="px-4 py-3 text-lg text-gray-900">管理</td>
                <?php } ?>
                <?php if($v["kanri_flg"]==0){ ?>
                <td class="px-4 py-3 text-lg text-gray-900">一般</td>
                <?php } ?>
                <td class="px-4 py-3 text-red-800"><a href="user_delete.php?id=<?=h($v["id"])?>">削除</a></td>
            </tr>
            </tbody>
        <?php } ?>
      </table>
    </div>
  </div>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>
</body>
</html>