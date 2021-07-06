<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>{{ $book->book_name }}</title>
</head>
 <body>
 <header.list h1>
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
	売上データ閲覧</a>
</div>
</header>
<h2 class="h2">{{ $book->book_name }}</h2>
<div style="position:absolute; top:200px; left:230px; width:800px; height:500px;">
   	<canvas id="myChart"></canvas>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
	<!-- グラフを描画 -->
   <script>
	//ラベル
	var labels = [
		"20日前",
		"19日前",
		"18日前",
		"17日前",
		"16日前",
		"15日前",
        "14日前",
		"13日前",
		"12日前",
		"11日前",
		"10日前",
		"9日前",
        "8日前",
		"7日前",
		"6日前",
		"5日前",
		"4日前",
		"3日前",
        "2日前",
		"1日前",
        
	];
	var average_weight_log = [
		{{ $book->day1 }},	
		{{ $book->day2 }},	
		{{ $book->day3 }},	
		{{ $book->day4 }},	
		{{ $book->day5 }},	
		{{ $book->day6 }},
        {{ $book->day7 }},
        {{ $book->day8 }},	
		{{ $book->day9 }},	
		{{ $book->day10 }},	
		{{ $book->day11 }},	
		{{ $book->day12 }},	
		{{ $book->day13 }},
        {{ $book->day14 }},	
        {{ $book->day15 }},	
		{{ $book->day16 }},	
		{{ $book->day17 }},	
		{{ $book->day18 }},	
		{{ $book->day19 }},	
		{{ $book->day20 }},
	];

	//グラフを描画
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
		type: 'line',
		data : {
			labels: labels,
			datasets: [
				{
					label: '{{ $book->book_name }}',
					data: average_weight_log,
					borderColor: "rgba(0,0,255,1)",
         			backgroundColor: "rgba(0,0,0,0)"
				},
		]
		},
     options: {
        scales: {
      // X 軸
      xAxes: [{
        // 軸線を表示しない
        gridLines: {
          display: false,
        },
        // 目盛り
        ticks: {
          fontColor: '#333',
        },
      }],
      // Y 軸
      yAxes: [{
        scaleLabel: {
          display: true,
          labelString: '売上数',
        },
        gridLines: {
          color: '#f3f3f3',
          zeroLineColor: '#ddd'
        },
        ticks: {
          fontColor: '#333',
          min: 0,
          max: 12,
          stepSize: 1,
        }
      }]
    },

	title: {
				display: true,
				text: '{{ $book->book_name }}（過去20日分のデータ）'
			}

		}
   });
   </script>
   </div> 
   <!-- グラフを描画ここまで -->
   <div style="position:absolute; top:200px; left:960px;">
   <form action="/result/{id}" method="POST" >
	  <input type="button" onclick="location.href='{{ action("App\Http\Controllers\CategoriesController@result_book", $book ->id)}}'" value="分析する"></td>

	  </div> 
</from>
 </body>
</html>