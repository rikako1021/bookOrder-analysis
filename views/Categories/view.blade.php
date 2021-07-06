<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
    <title>{{ $category->category_name }}</title>
</head>
<body>
    <header.list h1>
   @include("parts.header")
</header>
<div class="return">
　　<a href="/">トップページ</a>>
    @foreach ($kinds as $kind)
    @if ($category ->kind_id == $kind -> id)
    <a href="/categories/{{$kind ->id}}">{{$kind ->kind_name}}</a>
    @endif
    @endforeach
    >{{$category->category_name}}
    </div>
    <h2 class="h2">{{ $category->category_name }}</h2>
    <p class="grovalNavigation">{{ $category->category_name }}のカテゴリ一覧</p>
          
     <form method='POST' action='/books/{id}'>
   
        
        @foreach ($books as $book)
        @if ($book -> category_id ==  $category ->id)
        <ul class="content">
    <li><a href="{{ action("App\Http\Controllers\CategoriesController@view2", $book ->id)}}">{{ $book->book_name }}</li>
    </ul>
     @endif
    @endforeach
    </form>

</body>
</html>