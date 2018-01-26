@extends('admin_template')

@section('content')
    <section class="content-header">
        <h1>
            Cadastrar processo<br>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class='row'>
            <div class='col-md-12'>
                <form role="form" action="{{ url('process') }}" method="POST">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <div class="box-body">
                        <div class="form-group">                          
                            <label for="number">Número</label>
                            <input type="text" class="form-control" id="number" value="{{isset($number) ? $number : ''}}" name="number" placeholder="Número">
                        </div>
                        <div class="form-group">
                            <label for="student">Estudante</label>
                            <input type="text" class="form-control" id="student" value="{{isset($student) ? $student : ''}}" name="student" placeholder="Estudante">
                        </div>
                        <div class="form-group">
                            <label for="course">Curso</label>
                            <input type="text" class="form-control" id="course" value="{{isset($course) ? $course : ''}}" name="course" placeholder="Curso">
                        </div>
                        <div class="form-group">
                            <label for="curriculum">Curriculum</label>
                            <input type="text" class="form-control" id="curriculum" value="{{isset($curriculum) ? $curriculum : ''}}" name="curriculum" placeholder="Curriculum">
                        </div>
                        <div class="form-group">
                            <label for="reference">Referência</label>
                            <input type="text" class="form-control" id="reference" value="{{isset($reference) ? $reference : ''}}" name="reference" placeholder="Referência">
                        </div>
                    </div>

                    <div class="">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection