<h2>Top 10 phim có điểm cao nhất</h2>

@foreach($phim as $p)
    {{ $p->movie_name }} - {{ $p->release_date }} - {{ $p->vote_average }} <br>
@endforeach