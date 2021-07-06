
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
    <title>T書店発注システム</title>
</head>
<body>
   @include("parts.header")
   <div class="return">
     商品タイプ選択
</div >
   <h2 class="h2">T書店発注予測</h2>
       <p class="grovalNavigation">～～～カテゴリ選択～～～</p>
 <main>
 <div> 
    <form method='POST' action='/categories/{id}'>
    @foreach ($kinds as $kind)
    <ul class="content">
    <li><a href="{{ action("App\Http\Controllers\CategoriesController@index", $kind ->id)}}">{{$kind ->kind_name}}</li>
</ul>
    @endforeach
    </form>
</div>

   </main> 
    <p id="all-category"></p>


</body>
</html>
