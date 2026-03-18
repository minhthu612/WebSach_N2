<html>
<head>
</head>
<body>

<h2>Danh sách phim của Canada</h2>


<table border="1">
    <tr>
        <th>Tên phim</th>
        <th>Ngày phát hành</th>
        <th>Thời lượng</th>
    </tr>

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

@foreach ($movies as $movie)
    <p>
        {{ $movie->movie_name }} 
        {{ $movie->release_date }} 
        {{ $movie->runtime }} phút
    </p>
@endforeach


</body>
</html>