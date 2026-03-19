<!DOCTYPE html>
<html>
<head>
    <title>Doanh thu</title>
    <style>
        body {
            font-family: Times;
            padding: 20px;
        }

        .movie {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h2>Top 10 phim có doanh thu cao nhất</h2>

@foreach($movies as $movie)
    <div class="movie">
        <b>{{ $loop->iteration }}. {{ $movie->movie_name }}</b><br>
        Ngày phát hành: {{ $movie->release_date }} <br>
        Doanh thu: {{ number_format($movie->budget) }} USD
    </div>
@endforeach

</body>
</html>