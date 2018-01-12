@extends('admin_template')

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <form role="form" action="{{ url('teacher') }}" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="user_ufba">Nome de usuário UFBA</label>
                        <input type="text" class="form-control" id="user_ufba" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label for="name">Nome completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="collegiate">Colegiados</label>
                        <input type="text" class="form-control" id="collegiate" placeholder="Colegiados">
                    </div>
                    {{--<div class="checkbox">--}}
                    {{--<label>--}}
                    {{--<input type="checkbox"> Check me out--}}
                    {{--</label>--}}
                    {{--</div>--}}
                </div>
                <!-- /.box-body -->

                <div class="">
                <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

            <!-- Box -->
            {{--<div class="box box-primary">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Randomly Generated Tasks</h3>--}}
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>--}}
                        {{--<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{----}}
                {{--</div><!-- /.box-body -->--}}
                {{--<div class="box-footer">--}}
                    {{--<form action='#'>--}}
                        {{--<input type='text' placeholder='New task' class='form-control input-sm' />--}}
                    {{--</form>--}}
                {{--</div><!-- /.box-footer-->--}}
            {{--</div><!-- /.box -->--}}
        </div><!-- /.col -->
        {{--<div class='col-md-6'>--}}
            {{--<!-- Box -->--}}
            {{--<div class="box box-primary">--}}
                {{--<div class="box-header with-border">--}}
                    {{--<h3 class="box-title">Second Box</h3>--}}
                    {{--<div class="box-tools pull-right">--}}
                        {{--<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>--}}
                        {{--<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--A separate section to add any kind of widget. Feel free--}}
                    {{--to explore all of AdminLTE widgets by visiting the demo page--}}
                    {{--on <a href="https://almsaeedstudio.com">Almsaeed Studio</a>.--}}
                {{--</div><!-- /.box-body -->--}}
            {{--</div><!-- /.box -->--}}
        {{--</div><!-- /.col -->--}}

    </div><!-- /.row -->
@endsection