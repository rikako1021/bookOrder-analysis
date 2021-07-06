
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
   <a href="/">トップページ</a>   
   >{{$kinds -> kind_name}}
</div>
   <h2 class="h2">T書店発注予測</h2>

    <p class="grovalNavigation">～～～{{$kinds -> kind_name}}の一覧～～～</p>
 <main>
 <div> 
    <form method='POST' action='/'>
    @foreach ($categories as $category)
    @if ($category -> kind_id ==  $kinds ->id)
    <ul class="content">
    <li><a href="{{ action("App\Http\Controllers\CategoriesController@view", $category -> id)}}">{{ $category->category_name }}</li>
</ul>
    @endif
    @endforeach
    </form>
</div>

   </main> 
    <p id="all-category"></p>


</body>
</html>
