<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Top 10 Phim</title>
</head>
<body>

    <h1>DANH SÁCH 10 BỘ PHIM CÓ ĐIỂM CAO NHẤT</h1>
    <hr>

    @foreach($movies as $key => $movie)
        <p>
            <strong>#{{ $key + 1 }}</strong>. 
            Tên phim: {{ $movie->movie_name }} | 
            Ngày phát hành: {{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }} | 
            Điểm: {{ $movie->vote_average }}
        </p>
    @endforeach
    <hr>
</body>
</html>