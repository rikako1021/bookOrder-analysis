<!DOCTYPE html>

<html lang="ja" dir="ltr">
<head>
<meta charset="utf-8">
<title>フォーム計算のデモ</title>
<style>
  p {
    margin: 0;
  }
  .form-box {
    margin-bottom: 1em;
  }
#item_price_total, #postage_price,#total_price {
  display: inline-block;
  width: auto;
  padding: 0;
  background: none;
  border: none;
  font-size: inherit;
  cursor: default;
  vertical-align: baseline;
  -webkit-appearance: inherit;
}
</style>
<link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
<link rel="javascript" href="{{ asset('js/category.js') }}" />
<script src="{{ asset('js/category.js') }}" type="text/javascript"></script>
</head>
<body>
<div id="wrapper">
  <section id="contents">
    <h1 class="">フォーム自動計算</h1>
      <div class="">
      <form class="form-horizon" method="post" action="">
        <p>ご希望項目の数を選択してください。</p>

        <div class="form-box">
          <p class="buy_itemu_menu" data-price="300">花束
            <span class="kakaku">(定価 300円／会員価格 200円)</span>
          </p>
          <select name="花束数量">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
          </select>
        </div>

        <div class="form-box">
          <p class="buy_itemu_menu" data-price="700">防災セット
            <span class="kakaku">(定価 700円／会員価格 500円)</span>
          </p>
          <select name="防災セット数量">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
          </select>
        </div>
        <div class="form-box">
          <p class="buy_itemu_menu" data-price="2500">人力飛行機
            <span class="kakaku">(定価 2,500円／会員価格 2,300円)</span>
          </p>
          <select name="人力飛行機数量">
            <option data-num="0" value="0個" selected>0個</option>
            <option data-num="1" value="1個">1個</option>
            <option data-num="2" value="2個">2個</option>
            <option data-num="3" value="3個">3個</option>
          </select>
        </div>


        <hr>

        <script src="{{ asset('js/category.js') }}"></script>
        <div class="form-box">
          <label class="form-label">小計：</label>
          <input id="item_price_total" class="" name="小計" value="0円" readonly>
        </div>

        <div class="form-box">
          <label class="form-label">送料：</label>
          <input id="postage_price" class="" name="送料" value="300円" readonly>
          <span>※1発送につき300円（3,000円以上のご購入で送料無料）</span>
        </div>

        <div class="form-box">
          <label class="form-label">合計金額：</label>
          <input id="total_price" class="" name="合計金額" value="300円" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly>
          <div>
            <label class="checkbox">
            <input id="kaiinnkakaku" type="checkbox" name="会員価格" value="チェック有">
              会員の方はチェックしてください。会員価格に変更されます。
            </label>
          </div>

        </div>


        <div class="submit-form">
          <button id="form-check" type="submit" class="btn">送 信（されません）</button>
        </div>
      </form>
    </div><!-- section -->
  </section><!-- /entry-content -->
</div><!-- /#wrapper -->


<footer id="footer">
  <small class="copyright">&copy;できコツ</small>
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
    <script src="{{ asset('js/category.js') }}"></script>
    <title>分析結果</title>
</head>
<body>
    @include("parts.header")
    <p class="p">結果は以下の通りです<br>
    {{ $book->book_name }}は、来月<font color="red">10冊</font
      >仕入れるのが好ましいです。<br>
      発注も可能です。以下の内容でよろしければ<font color="red">発注</font
      >ボタンを押してください。
</p>
    <form action="/kakuninn/{id}" method="POST" >
    <table  border="1" width="1000%">
      <tr>
        　　　
        <th width="30%">書籍名</th>
        <th width="10%">著者</th>
        <th width="25%">
          在庫数<br />
          <script>
            var today = new Date();
            //年・月・日・曜日を取得
            var year = today.getFullYear();
            var month = today.getMonth() + 1;
            var week = today.getDay();
            var day = today.getDate();
            var time = new Date();
            //時・分・秒を取得
            var hour = time.getHours();
            var minute = time.getMinutes();
            var second = time.getSeconds();

            var week_ja = new Array("日", "月", "火", "水", "木", "金", "土");

            //年・月・日・曜日を書き出す
            document.write(
              "(" + month + "月" + day + "日" + hour + "時",
              +minute + "分時点" + ")"
            );
          </script>
        </th>
        <th width="10%">発注数</th>
        
        <th width="15%">発注確定</th>
      </tr>
      <tr>
        <td>{{ $book->book_name }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->stocks }}</td>
        <td>
        <div id="wrapper">
        <section id="contents">  
        <div class="">
        <form class="form-horizon" method="post" action="">
        <div class="form-box">
        <p class="buy_itemu_menu" data-price="{{ $book->price }}">{{ $book->book_name }}
        <span class="kakaku">({{ $book->price }}円</span>
        </p>
          <select name="example">
            <option data-num="0" value="0" selected>0</option>
            <option data-num="1" value="1">1</option>
            <option data-num="2" value="2">2</option>
            <option data-num="3" value="3">3</option>
            <option data-num="4" value="4">4</option>
            <option data-num="5" value="5">5</option>
            <option data-num="6" value="6">6</option>
            <option data-num="7" value="7">7</option>
            <option data-num="8" value="8">8</option>
            <option data-num="9" value="9">9</option>
            <option data-num="10" value="10">10</option>
          </select>
          </div>
          <hr>
        <div class="form-box">
          <label class="form-label">小計：</label>
          <input id="item_price_total" class="" name="小計" value="0円" readonly>
          <div class="form-box">
          <label class="form-label">小計：</label>
          <input id="item_price_total" class="" name="小計" value="0円" readonly>
        </div>

        <div class="form-box">
          <label class="form-label">送料：</label>
          <input id="postage_price" class="" name="送料" value="300円" readonly>
          <span>※1発送につき300円（3,000円以上のご購入で送料無料）</span>
        </div>

        <div class="form-box">
          <label class="form-label">合計金額：</label>
          <input id="total_price" class="" name="合計金額" value="300円" style="font-size: 150%; font-weight: bold; display: inline-block;" readonly>
          <div>
            <label class="checkbox">
            <input id="kaiinnkakaku" type="checkbox" name="会員価格" value="チェック有">
              会員の方はチェックしてください。会員価格に変更されます。
            </label>
          </div>

        </div>
        </div>
          </form>
        </td>
        <td><a href="{{ action("App\Http\Controllers\CategoriesController@kakuninn", $book ->id)}}">完了</td>
      </tr>
    </table>
    住所：<input type="text" name="text" value="{{ $book->order }}" />
<td><a href="{{ action("App\Http\Controllers\CategoriesController@update", $book ->id)}}">完了</td>
<p><span id="span3"></span></p>
<form action="/update/{{$book->id}}" method="post">
@csrf
    <p><input type="text" name="first_name"></p>
    <p><input type="text" name="last_name"></p>
    <p><input type="submit" value="送信"></p>
</form>
</body>
</html>
<script>
function clickBtn5(){
	// 値を取得
	const t3 = document.getElementById("text3").value;
	document.getElementById("span3").textContent = t3;
}
function clickBtn6(){
	document.getElementById("span3").textContent = "";
}
</script>