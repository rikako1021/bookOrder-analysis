<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
    <title>{{ $book->book_name }}</title>
    
</head>
<body>
<header.list h1>
   @include("parts.header")
</header>
<h2 class="h2">{{ $book->book_name }}</h2>
<p class="p">{{ $book->book_name }}の過去数か月間の売上推移は以下のグラフです。</p>


<form action="/result/{id}" method="POST" >

      <img class="list img"src="{{ asset('pictures/sales_graph.jpg') }}" />
      　<a class="botan" href="{{ action("App\Http\Controllers\CategoriesController@result_book", $book ->id)}}">分析する
</from>
</body>
</html>