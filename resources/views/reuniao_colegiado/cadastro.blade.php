@extends('admin_template')

@section('css')
@parent
<link href="{{ asset("/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}" rel="stylesheet" type="text/css" />  
<link href="{{ asset("/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}" rel="stylesheet" type="text/css" />
@endsection    

@section('js')
@parent
<script src="{{URL::asset('/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::asset('/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.pt-BR.js')}}"></script>
<script>
  
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true, 
      todayHighlight: true,
      format: 'dd/mm/yyyy',
    	language: 'pt-BR'
    })    
  })
  $('#btn_salvar').click(function(){
    $.ajax({
    url: "reuniao/colegiado/salvar",
    type: "POST",
    data: $('#formulario').serialize(),
    context: document.body
  }).done(function() {
    $( this ).addClass( "done" );
  });
 });
  

</script>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-12'>
            <form id = "formulario" role="form">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="user_ufba">Data da Reunião do Colegiado</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input name="data" type="text" class="form-control pull-right" id="datepicker">
                        </div>
                    </div>            
                </div>
                <div id='tabela'>
                 @include('reuniao_colegiado.tabela', ['listaProcessos'=>$listaProcessos] )
                </div>

                <div class="">
                  <button id="btn_salvar" type="button" class="btn btn-success">Salvar</button>
                  <button type="clear" class="btn btn-warning">Limpar</button>
                  <input type="button" class="btn btn-primary" value="Voltar" onclick="window.location.href='/reuniao/colegiado/index'" />
                </div>
            </form>
    </div>      
      <div></div>
@endsection