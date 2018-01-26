@extends('admin_template')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Processos</h3>
                      
                        <div class="box-tools">
                          <a class="btn btn-xs btn-primary" href="{{ url('process/create') }}" ><i class="glyphicon glyphicon-plus"></i> Novo</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Número</th>
                                <th>Estudante</th>
                                <th>Curso</th>
                                <th>Curriculum</th>
                                <th>Referência</th>
                                <th>Criado em</th>
                                <th></th>
                            </tr>
                          
                            @foreach($processes as $process)
                                <tr onclick="{{ url('process', $process['id']) }}">
                                    <td>{{$process['number']}}</td>
                                    <td>{{$process['student']}}</td>
                                    <td>{{$process['course']}}</td>
                                    <td>{{$process['curriculum']}}</td>
                                    <td>{{$process['reference']}}</td>
                                    <td>{{$process['createdAt']}}</td>

                                  <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ url('process', $process['id']) }}" ><i class="glyphicon glyphicon-eye-open"></i> Editar</a>
                                        <a class="btn btn-xs btn-danger" href="{{ url('process/destroy', $process['id']) }}"><i class="glyphicon glyphicon-trash"></i> Excluir</a>
                                        {{--<form action="{{ url('departments/destroy', $department->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">--}}
                                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                                            {{--<button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>--}}
                                        {{--</form>--}}
                                    </td>
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