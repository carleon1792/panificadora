<div class="main-contact">
    <h1 class="head">EDITAR VEHICULO</h1>
    <div class="row">
        {!!Form::open(['route'=>['vehiculo.update',$vehiculo->vehiculo_id], 'method'=>'PUT'])!!}
        <form>
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Seleccionar la panificadora:')}}
                    </div>
                    <div class="col-md-6">
                        {!! Form::select('select_panificadora', $panificadoras,''
                        ,array('class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Placa:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('placa')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Modelo:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('modelo')}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Crear',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}
        </form>
    </div>
</div>
