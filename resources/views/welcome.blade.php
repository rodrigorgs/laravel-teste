@extends('home.app')
@section('main')
    <div>
        {{--Linha quebrando o master --}}
        {{--<p> <a href="/login">{!! app(App\Http\Controllers\PhpCasAuthenticationController::class)->infophpcas() !!}</a></p> --}}
        <p><a href="{{url('admin')}}">Acesso ao sistema</a></p>
    </div>
    <div class="title m-b-md">
        Testando o deploy!!!
    </div>
    <div>
        <p><a href="/mail/enviar">Enviar email</a></p>
    </div>
@endsection