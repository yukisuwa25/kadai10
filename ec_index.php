<?php
session_start();

//DB接続
include("funcs.php");
$pdo = db_conn();

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
    <link rel="stylesheet" href="./css/jquery.bxslider.css">
    <title>Document</title>
</head>
<body>
<!-- header読み込み -->
<?php include('header.php'); ?>

<section class="text-gray-600 body-font bg-gray-50">
    <div>
        <ul id="bxslider">
            <li class="h-96 flex flex-wrap w-full"><img class="w-full object-cover h-full object-center block absolute inset-0" src="./img/ec1.jpeg"></li>
            <li class="h-96 flex flex-wrap w-full"><img class="w-full object-cover h-full object-center block absolute inset-0" src="./img/ec2.jpeg"></li>
            <li class="h-96 flex flex-wrap w-full"><img class="w-full object-cover h-full object-center block absolute inset-0" src="./img/ec3.jpeg"></li>
            <li class="h-96 flex flex-wrap w-full"><img class="w-full object-cover h-full object-center block absolute inset-0" src="./img/ec4.png"></li>
            <li class="h-96 flex flex-wrap w-full"><img class="w-full object-cover h-full object-center block absolute inset-0" src="./img/ec5.avif"></li>
        </ul>
    </div>
<!-- 読み込み -->
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">商品一覧</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">当店の日本人形は、贈り物やコレクションとしてだけでなく、和風のインテリアや祝い事の装飾としても最適です。豪華な結婚式やお正月、お祭りの場など、特別なイベントに彩りを添えることができます。<br>ぜひ当サイトで品揃え豊富な日本人形をご覧いただき、日本の伝統美をお楽しみください。</p>
    </div>
    <?php foreach($values as $v){ ?>
    <div class="flex flex-wrap">
      <div class="lg:w-3/5 sm:w-1/2 p-8 m-auto">
    <a href="ec_item2.php?id=<?=$v["id"]?>">
        <div class="flex relative mt-8">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="upload/<?=$v["img"]?>">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?=$v["item"]?></h1>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3"><?=$v["value"]?>円</h1>
            <p class="leading-relaxed"><?=$v["content"]?></p>
            <h1 class="title-font text-lg font-medium text-gray-900 mt-3"><?=$v["indate"]?></h1>
          </div>
        </div>
    </a>
      </div>
    </div>
    <?php }?>
  </div>
</section>

<!-- footer読み込み -->
<?php include('footer.php'); ?>

<script src="./js/jquery-3.6.0.min.js"></script>
<script src="./js/jquery.bxslider.min.js"></script>
<script>
  $("#bxslider").bxSlider({auto:true,options:2000});
</script>
</body>
</html>