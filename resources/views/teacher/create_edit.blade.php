@extends('admin_template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Cadastrar usuário - Professor<br>
            <small>Cadastro de usuário para um professor</small>
        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class='row'>
            <div class='col-md-12'>
                @if(isset($id))
                    <form role="form" action="{{ url('teacher/update') }}" method="POST">
                        @else
                            <form role="form" action="{{ url('teacher') }}" method="POST">
                                @endif
                                <div class="box-body">
                                    @if(isset($error))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-ban"></i> Alerta!</h4>
                                        Nome de usuário já está cadastrado no banco.
                                         </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="user_ufba">Nome de usuário UFBA</label>
                                        <input type="text" class="form-control" id="user_ufba"
                                               value="{{isset($user_ufba) ? $user_ufba : ''}}" name="user_ufba"
                                               placeholder="Usuário">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nome completo</label>
                                        <input type="text" class="form-control" id="name"
                                               value="{{isset($name) ? $name : ''}}"
                                               name="name" placeholder="Nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="collegiate">Colegiados</label>
                                        <input type="text" class="form-control" id="collegiates"
                                               value="{{isset($collegiates) ? $collegiates : ''}}" name="collegiates"
                                               placeholder="Colegiados">
                                    </div>
                                    <input type="hidden" name="id" value="{{isset($id) ? $id : ''}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                                <!-- /.box-body -->
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>

            </div>

        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection