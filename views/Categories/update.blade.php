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
    {{ $book->book_name }}は、来月<font color="red">10冊/コ</font
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
        <td>{{ $_POST["order"] }} </td>
        <td><a href="{{ action("App\Http\Controllers\CategoriesController@kakuninn", $book ->id)}}">完了</td>
      </tr>
    </table>
</form>
</form>
</body>
</html>