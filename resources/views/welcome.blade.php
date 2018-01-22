@extends('home.app')
@section('main')
<div>
  <p> <a href="/login">{!! app(App\Http\Controllers\PhpCasAuthenticationController::class)->infophpcas() !!}</a></p>  
</div>
    <div class="title m-b-md">
        Testando o deploy!!!
    </div>
<div>
  <p><a href="/mail/enviar">Enviar email</a></p>
</div>
@endsection