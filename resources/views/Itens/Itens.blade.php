@extends('admin_template')

@section('content')
    <!-- Content Header (Page header) -->
<section class="content-header">
    <h3> Cadastrar Itens </h3>
</section>

    <div class="container">
        <form class="col-md-6" action="{{url('/itens/cadastrar')}}" method="post">
            {{csrf_field()}}
            <br>
            <div class="form-group">
                <div class="container">
                  <label style="margin-bottom: 40px"  class="control-label">Curso:</label>
                  <input style="margin-bottom: 40px" align="center" name="curso" class="form-controll"><br>                  
                
                  <label style="margin-bottom: 40px"  class="control-label">Atividade Cursada:</label>
                  <input style="margin-bottom: 40px" align="center" name="atvc" class="form-controll" ><br> 
                
                  <label style="margin-bottom: 40px"  class="control-label">Carga Horaria:</label>
                  <input style="margin-bottom: 40px" align="center" name="ch" class="form-controll"><br>                 
              <div>               
                                 
                </div>
                  <button style="margin-right: 5px;" class="btn btn primary">Salvar</button>
                </div>
        </form>
    </div>



@endsection