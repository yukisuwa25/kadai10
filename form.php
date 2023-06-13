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
<section id="form" class="text-gray-600 body-font relative bg-gray-50">
<form method="post" action="form_insert.php">
<div class="container px-5 pt-24 mx-auto">
  <div class="flex flex-col">
        <div class="h-1 bg-gray-200 rounded overflow-hidden">
          <div class="w-24 h-full bg-red-700"></div>
        </div>
        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
          <h1 class="sm:w-2/5 text-black font-medium title-font text-2xl mb-2 sm:mb-0">ー お問い合わせ ー</h1>
          <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0 text-black">お客様のご質問やご要望に対応するため、専門のカスタマーサポートチームがお手伝いいたします。<br>商品に関するお問い合わせや疑問点がございましたら、お気軽にご連絡ください。</p>
        </div>
      </div>
  </div>
  <div class="container px-5 pb-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3223.919705568491!2d139.89417527585292!3d36.09544530710899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018a59d4938306f%3A0xed9ea7dcf5ab6616!2z6KuP6Kiq5Lq65b2i5bqX!5e0!3m2!1sja!2sjp!4v1686068202025!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">住所</h2>
          <p class="mt-1">〒306-0515<br>茨城県坂東市沓掛543番地</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">メールアドレス</h2>
          <a class="text-indigo-500 leading-relaxed">example@email.com</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">電話番号</h2>
          <p class="leading-relaxed">000-000-000</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0 bg-gray-50">
      <h2 class="text-gray-900 text-lg mb-10 font-medium title-font">お問い合わせフォーム</h2>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">お名前 : </label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="example:">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス : </label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="example:">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">お問い合わせ内容 : </label>
        <textarea id="comment" name="comment" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" placeholder="example:"></textarea>
      </div>
      <input class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg" type="submit" value="送信">
    </div>
  </div>
  </form>
</section>
</body>
</html>