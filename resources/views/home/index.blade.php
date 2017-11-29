@extends('home.app')

@section('main')
<div class="title m-b-md">
    Alô, {{ $nome }}!
</div>

<ul>
@foreach ($itens as $item)
  <li>{{ $item }}</li>
@endforeach
</ul>
@endsection