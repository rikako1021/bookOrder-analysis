

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
    <script src="{{ asset('js/category.js') }}"></script>
    <title>発注完確認</title>
</head>
<body>
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
	  <a href="{{ action("App\Http\Controllers\CategoriesController@view2", $book ->id)}}">{{$book->book_name}}の売上データ</a>>
    <a href="{{ action("App\Http\Controllers\CategoriesController@result_book", $book ->id)}}">分析結果・発注</a>
    >発注確認</a>
</div>
    <h2 class="h2">  発注確認</h2>
    <p class="p">以下の内容で発注しました。<br>

 <table 　border="1" width="55%">
    <tr>
　　　<th width="25%">　@if ($book ->kind_id == 1)書籍名 
         @elseif ($book ->kind_id == 2)曲名 
         @elseif ($book ->kind_id == 3)タイトル
         @elseif ($book ->kind_id == 4)ゲーム名 @endif</th>

      <th width="5%">発注数選択</th>
      <th width="10%">合計金額</th>

    </tr>
    <tr>
      <td> {{ $book->book_name }}</td>
      <td>{{ $_POST["order"] }}</td>   
     <td>
      <script>
    var a = {{ $_POST["order"] }};
    var b = {{ $book->price }};
    document.write(b*a);
    </script>円</td>
        </tr>
  </table> 
</body>
</html>