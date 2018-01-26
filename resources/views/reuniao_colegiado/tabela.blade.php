

<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Processos</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered">
      <tbody>
        <tr>
          <th>  </th>
          <th>Número Processo</th>
          <th>Interessado</th>
          <th>Curso</th>
          <th>Curriculo</th>
          <th>Observação</th>
        </tr>
        @foreach($listaProcessos as $processo)
          <tr>
            <td>
              <div class="form-group">
                
               @if(Request::segment(3) == 'cadastro')
              {{-- COLOCAR AQUI O CHECKBOX DO FORMULARIO --}}
               @endif
                
                <label class="">
                  <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                </label>
                <label class="">
                  <div class="icheckbox_flat-green" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                </label>
                <label>
                  <div class="icheckbox_flat-green disabled" aria-checked="false" aria-disabled="true" style="position: relative;"><input type="checkbox" class="flat-red" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                </label>
              </div>
            </td>
            <td>{{$processo['numero']}}</td>
            <td>{{$processo['interessado']}}</td>
            <td>{{$processo['curso']}}</td>
            <td>{{$processo['curriculo']}}</td>
            <td>{{$processo['observacao']}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>                      