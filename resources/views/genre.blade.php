<html>
<head>
    <title>Danh sách thể loại phim</title>
</head>
<body>

<h1>Danh sách thể loại phim</h1>

@foreach($genres as $row)
    <p>
        {{ $row->genre_name }} - {{ $row->genre_name_vn }}
    </p>
@endforeach

</body>
</html>