<!DOCTYPE html>
<html>
<head>
    <title>Danh sách phim</title>
</head>
<body>
    <h2>10 phim có thời lượng > 120 phút</h2>

    <ul>
        @foreach($movies as $movie)
            <li>
                {{ $movie->movie_name }} - 
                {{ $movie->release_date }} - 
                {{ $movie->runtime }} phút
            </li>
        @endforeach
    </ul>

</body>
</html>