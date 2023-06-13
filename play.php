<!-- ok -->
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

    <!-- top画面 -->
    <section id="top_hide" class="text-gray-600 body-font bg-gray-50">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -mx-4 -mb-10 text-center">
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="./img/game1.png">
                </div>
                <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">おみくじ</h2>
                <p class="leading-relaxed text-base">おみくじは、友達や家族と一緒に楽しむことができる素敵な遊びです。<br>運試しをして、予想外の結果や驚きを共有しましょう！</p>
                <button id="omikuzi" class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">プレイ</button>
            </div>
            <div class="sm:w-1/2 mb-10 px-4">
                <div class="rounded-lg h-64 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="./img/game2.png">
                </div>
                <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">絵本
                </h2>
                <p class="leading-relaxed text-base">絵本は、たくさんのおもしろいお話や素敵な絵が詰まった本です。<br>自分の好きな絵本を見つけて、一緒に読んで楽しみましょう！</p>
                <button id="book" class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">プレイ</button>
            </div>
            </div>
        </div>
    </section>

    <!-- おみくじ作成 -->
    <section id="omikuzi_hide" class="hidden">
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
                <p id="omikuzi_view" class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded h-96"><img src="./img/omikuzi.png"></p>
                <div class="text-center lg:w-2/3 w-full">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">ー 幸運を追え！おみくじトレジャーハント ーー</h1>
                    <p class="mb-8 leading-relaxed">参加者は、おみくじの結果に応じたヒントや手がかりを手に入れます。そのヒントや手がかりを頼りに、幸運の宝箱や隠された宝物を見つけるためのトレジャーハントが始まります。<br>このゲームでは、運試しと冒険の要素を組み合わせ、参加者がワクワク感と楽しみを味わえるようになっています。さあ、幸運を追い求め、お宝を見つけましょう！</p>
                <div class="flex justify-center">
                    <button id="omikuzi_btn" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">スタート</button>
                </div>
                </div>
            </div>
        </section>
    </section>

    <!-- ブック作成 -->
    <section id="book_hide" class="hidden">
        <div id="book_turn">
            <!-- ページ1 -->
            <section class="text-gray-600 body-font bg-red-50">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">『ふしぎな森の冒険』</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">『ふしぎな森の冒険』は、友情と勇気、そして夢と魔法の力をテーマにした、子どもたちに楽しさと感動を与える絵本です。<br>豪華なイラストと心温まるストーリーが、読者を魔法の森の中へ連れて行ってくれます。</p>
                    </div>
                    <div class="flex flex-wrap">
                    <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-black border-opacity-40">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">トム</h2>
                        <p class="leading-relaxed text-base mb-4">トムは森の中で賢い動物たちと出会い、彼らとの交流を通じて成長していきます。彼は困難に立ち向かいながらも、自分自身と周りの人々に勇気と希望を与える存在となります。</p>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-black border-opacity-40">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">ニコラス</h2>
                        <p class="leading-relaxed text-base mb-4">ニコラスは小さなサルのリスで、明るい茶色の毛並みを持っています。彼は元気いっぱいで活発な性格をしています。しっかり者で知恵もあり、時にはトムにアドバイスを与えることもあります。</p>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-black border-opacity-40">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">モフモフ</h2>
                        <p class="leading-relaxed text-base mb-4">モフモフはふわふわの白い毛皮を持つ羊です。彼は優しい性格で、いつもニコラスやトムを助ける手助けをしてくれます。モフモフは彼らの仲間であり、冒険の中での絆を象徴しています。</p>
                    </div>
                    <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-black border-opacity-40">
                        <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">フリッター</h2>
                        <p class="leading-relaxed text-base mb-4">フリッターは小さな鳥で、鮮やかな羽根を持っています。彼は森の中を自由自在に飛び回り、重要な情報や新しい発見をトムたちに伝えます。彼は冒険の進行をサポートする役割を果たします。</p>
                    </div>
                    </div>
                </div>
            </section>
            <!-- ページ2 -->
            <section class="text-gray-600 body-font bg-red-50">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-red-700"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">第１部</h1>
                        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">第一部ではトムが森の中での出会いや友情の形成、謎の宝地図を手にした冒険、そして宝物を見つけるという流れが描かれます。各話はトムと仲間たちの成長と絆を強める出来事に焦点を当てています。</p>
                    </div>
                    </div>
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="./img/book1.jpeg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">ふしぎな森の出会い</h2>
                        <p class="text-base leading-relaxed mt-2">トムは家の裏にあるふしぎな森へ足を踏み入れます。そこでトムは妖精たちや賢い動物たちと出会います。妖精たちは彼に特別な力を授け、トムは森の奥深くへの探検に興味津々です。</p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="./img/book2.jpeg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">謎の宝地図</h2>
                        <p class="text-base leading-relaxed mt-2">トムと仲間たちは古い木の根元で謎の宝地図を見つけます。それには光り輝く宝物が隠されているとされています。トムと仲間たちは宝物の探索に挑みます。</p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="./img/book3.jpeg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">宝物を手にする</h2>
                        <p class="text-base leading-relaxed mt-2">トムと仲間たちは最終的に宝物を見つけます。それは光り輝く魔法の宝石で、願いを叶える力があると言われています。トムは大切な願いを込めて宝石を使います。</p>
                    </div>
                    </div>
                </div>
            </section>
            <!-- ページ3 -->
            <section class="text-gray-600 body-font bg-red-50">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col">
                    <div class="h-1 bg-gray-200 rounded overflow-hidden">
                        <div class="w-24 h-full bg-red-700"></div>
                    </div>
                    <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">第２部</h1>
                        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">トムと仲間たちが新たな困難に立ち向かい、魔法の力を取り戻すための旅に出ます。冒険の中で困難を克服し、協力の大切さを学びます。魔法の力が失われた森の再生と輝きの復活にも注目することができます。</p>
                    </div>
                    </div>
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="./img/book4.webp">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">新たな困難の出現</h2>
                        <p class="text-base leading-relaxed mt-2">ある日、森に不思議な騒ぎが起こります。動物たちが騒ぎを伝えてきますが、原因はまだわかりません。トムと仲間たちは森の奥深くへと向かい、謎を解き明かすための冒険が始まります。</p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="./img/book5.jpeg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">消えた魔法の力</h2>
                        <p class="text-base leading-relaxed mt-2">トムと仲間たちは森の中で魔法の力が失われていることに気付きます。彼らは魔法の力を取り戻すため、森の守護者である賢者に助けを求めることにします。</p>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full" src="./img/book6.jpeg">
                        </div>
                        <h2 class="text-xl font-medium title-font text-gray-900 mt-5">魔法の復活と新たな絆</h2>
                        <p class="text-base leading-relaxed mt-2">トムと仲間たちは魔法の力を取り戻すための試練をクリアしていきます。魔法が戻った森は再び輝き始め、動物たちや妖精たちは喜びに包まれます。</p>
                    </div>
                    </div>
                </div>
            </section>
    </section>

    <!-- footer読み込み -->
    <?php include('footer.php'); ?>

<!-- JQuery -->
<script src="./js/jquery-3.6.0.min.js"></script>
<!-- turnjs -->
<script src="./js-turn/turn.js"></script>
<!-- js開始 -->
<script>
function tophide(){
    $("#top_hide").addClass("hidden");
}
//top画面消去
$("#omikuzi").on("click",function(){
        tophide();
    });
$("#book").on("click",function(){
        tophide();
    });
// omikuzi画面のみ表示
    $("#omikuzi").on("click",function(){
        $("#omikuzi_hide").removeClass("hidden");
        $("#book_hide").addClass("hidden");
    });
// quiz画面のみ表示
    $("#book").on("click",function(){
        $("#book_hide").removeClass("hidden");
        $("#omikuzi_hide").addClass("hidden");
    });
//omikuziランダム生成
    $("#omikuzi_btn").on("click",function(){
        const r = [
                    '<img src="./img/omikuzi1.avif">',
                    '<img src="./img/omikuzi2.png">',
                    '<img src="./img/omikuzi3.jpeg">',
                    '<img src="./img/omikuzi4.jpeg">',
                    '<img src="./img/omikuzi5.jpg">'
                ]
        const s = Math.floor(Math.random()*r.length);
        $("#omikuzi_view").html(r[s]);
    });
//turnjs起動
$("#book_turn").turn({
    width: 1510,
    height: 800,
    duration: 2000,
    elevation: 50,
    autoCenter: true,
    gradient: true
});
  </script>
</body>
</html>