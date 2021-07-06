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
    <div class="return">
    　<a href="/">トップページ</a>>   
    @foreach ($kinds as $kind)
    @if ($book ->kind_id == $kind -> id)
    <a href="/categories/{{$kind ->id}}">{{$kind ->kind_name}}</a>>
    @endif
    @endforeach
  	@foreach ($categories as $category)
	  @if ($book ->kind_id == $category -> id)
    <a href="{{ action("App\Http\Controllers\CategoriesController@view", $book ->kind_id)}}">{{ $category->category_name }}</a>>
  	@endif
    @endforeach
	  <a href="{{ action("App\Http\Controllers\CategoriesController@view2", $book ->id)}}">{{$book->book_name}}の売上データ</a>
    >分析結果・発注
</div>
    <p class="p">結果は以下の通りです<br>
    {{ $book->book_name }}は、来月<font color="red">
    <script>
    var numbers =[{{ $book->day1 }},{{ $book->day2 }},{{ $book->day3 }},{{ $book->day4 }},{{ $book->day5 }},{{ $book->day6 }},{{ $book->day7 }},{{ $book->day8 }},{{ $book->day9 }},{{ $book->day10 }},{{ $book->day11 }},{{ $book->day12 }},{{ $book->day13 }},{{ $book->day14 }},{{ $book->day15 }},{{ $book->day16 }},{{ $book->day17 }},{{ $book->day18 }},{{ $book->day19 }},{{ $book->day20 }}]
    var a =  numbers.reduce(function(a,b){
      return a+b;
    }); //売上過去20日分
    var b = Math.ceil(a*1.5);//1か月予測の四捨五入
    var y =  {{ $book->stocks }}　//在庫
    document.write(Math.ceil(b*0.9));
    </script> @if ($book ->kind_id == 1)冊 
         @elseif ($book ->kind_id == 2)枚
         @elseif ($book ->kind_id == 3)枚
         @elseif ($book ->kind_id == 4)本 @endif～<script>
    document.write(Math.ceil(b*1.1));
    </script>
     @if ($book ->kind_id == 1)冊 
         @elseif ($book ->kind_id == 2)枚
         @elseif ($book ->kind_id == 3)枚
         @elseif ($book ->kind_id == 4)本  @endif </font
      >仕入れるのが好ましいです。<br>
      発注も可能です。以下の内容でよろしければ<font color="red">発注</font
      >ボタンを押してください。
</p>
    <table  border="1" width="1000%">
      <tr>
        　　　
        <th width="30%">    
         @if ($book ->kind_id == 1)書籍名 
         @elseif ($book ->kind_id == 2)曲名 
         @elseif ($book ->kind_id == 3)タイトル
         @elseif ($book ->kind_id == 4)ゲーム名 @endif
         </th>
        <th width="10%">
         @if ($book ->kind_id == 1)著者 
         @elseif ($book ->kind_id == 2)歌手名 
         @elseif ($book ->kind_id == 3)製作者・監督
         @elseif ($book ->kind_id == 4)会社 @endif
        </th>
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
        <form action="/kakuninn/{{$book->id}}" method="post">
         @csrf
         <p><input type="text" name="order" placeholder="発注数"></p>
        </td>
        <td><p><input type="submit" value="送信"></p>
        </td>
        </form>
      </tr>
    </table>

    
</body>
</html>