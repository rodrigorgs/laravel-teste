@extends('admin_template')

@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Cadastrar Itens </h1>

</section>


    <div class="container">
      <form class="col-md-6" action="{{url('/Itens/verificar')}}" method="post">
            {{csrf_field()}}
            <br>
            <div class="well">

                @if(Session::has('message'))
                    <div class="alert alert-success">
                        {{ Session::get('message')}}
                    </div>
                @endif

                  <label class="control-label">Curso:</label>
                  <input type="text" class="form-control" name="curso" class="form-controll">                
                  <br> 
                  <label class="control-label">Atividade Cursada:</label>
                  <input type="text" class="form-control" name="atvc" class="form-controll">
                  <br>
                  <label class="control-label">Carga Horaria:</label>
                  <input type="text" class="form-control" name="ch" class="form-controll">
                  <br>
           <div>               
                                 
                </div>
                  <button style="margin-right: 5px;" class="btn btn-primary">Salvar</button>
                </div>
        </form>
    </div>
@endsection