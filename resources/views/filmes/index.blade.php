<p>Filmes:</p>
@foreach($filmes as $filme)
 <p>{{ $filme->titulo }} ({{ $filme->ano }})</p>
@endforeach
