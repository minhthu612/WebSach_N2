<h1>Top 10 Movies by Budget</h1>

@foreach($movies as $m)
    <p>{{ $m->movie_name }} - {{ $m->budget }}</p>
@endforeach