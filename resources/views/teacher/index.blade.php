@extends('admin_template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        {{--<h1>--}}
            {{--Cadastrar usuário - Professor<br>--}}
            {{--<small>Cadastro de usuário para um professor</small>--}}
        {{--</h1>--}}

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de professores</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Nome</th>
                                <th>Usuário UFBA</th>
                                <th>Colegiados</th>
                            </tr>
                            @foreach($teachers as $teacher)
                                <tr onclick="console.log({{$teacher['id']}});">
                                    <td>{{$teacher['name']}}</td>
                                    <td>{{$teacher['user_ufba']}}</td>
                                    <td>{{$teacher['collegiates']}}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
@endsection