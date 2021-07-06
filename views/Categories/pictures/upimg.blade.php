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
<script src="{{ asset('js/category.js') }}"></script>
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

