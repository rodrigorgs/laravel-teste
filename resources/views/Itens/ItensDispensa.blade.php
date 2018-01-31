@extends('admin_template')

@section('content')
    <!-- Content Header (Page header) -->
    <h3> Confirmar Itens Dispensados </h3>


    <div class="container">
        </form>
        <form class="col-md-6" action="{{url('/itens/store')}}" method="post" >
            {{csrf_field()}}
            <br>
            <div class="row" >
                <div class="container">

                    @foreach($get_discpl as $item)

                    <label style="margin-bottom: 40px"  class="control-label" >Atividade Dispensada:</label>
                    <input style="margin-bottom: 40px" align="center" name="atividade" class="form-controll" value="{{$item->name}}">
                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Codigo:</label>
                        <input style="margin-bottom: 40px" align="center" name="codigo" class="form-controll"  value="{{$item->code}}" >
                    </div>
                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Carga Horaria:</label>
                        <input style="margin-bottom: 40px" align="center" name="cargahoraria" class="form-controll" value="{{$item->load}}">
                    </div>
                    <div class="container">
                        <label style="margin-bottom: 40px"  class="control-label">Natureza:</label>
                        <input style="margin-bottom: 40px" align="center" name="natureza" class="form-controll" value="{{$get_natureza[0]->nature}}" >
                    </div>

                        @endforeach

                </div>
                <button style="margin-right: 5px;" class="btn btn primary">Confirmar</button>
            </div>

        </form>
    </div>




@endsection