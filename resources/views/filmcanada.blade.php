<html>
<head>
</head>
<body>

<h2>Danh sách phim của Canada</h2>

<<<<<<< HEAD
=======

>>>>>>> 718e0470d6ad3cc0f29e0fef198b217339e98e64
<table border="1">
    <tr>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Thời lượng</th>
    </tr>
<<<<<<< HEAD

    @foreach ($movies as $movie)
    <tr>
        <td>{{ $movie->movie_name }}</td>
        <td>{{ $movie->release_date }}</td>
        <td>{{ $movie->runtime }} phút</td>
    </tr>
    @endforeach

</table>

=======

    @foreach ($movies as $movie)
    <tr>
        <td>{{ $movie->movie_name }}</td>
        <td>{{ $movie->release_date }}</td>
        <td>{{ $movie->runtime }} phút</td>
    </tr>
    @endforeach

</table>

<p>
    <strong>Tên phim</strong> 
    <strong>Ngày phát hành</strong> 
    <strong>Thời lượng</strong>
</p>

>>>>>>> 718e0470d6ad3cc0f29e0fef198b217339e98e64
</body>
</html>