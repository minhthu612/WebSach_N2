<html>
<head>
</head>
<body>

<h2>Danh sách phim của Canada</h2>

<p>
    <strong>Tên phim</strong> 
    <strong>Ngày phát hành</strong> 
    <strong>Thời lượng</strong>
</p>

@foreach ($movies as $movie)
    <p>
        {{ $movie->movie_name }} 
        {{ $movie->release_date }} 
        {{ $movie->runtime }} phút
    </p>
@endforeach

</body>
</html>