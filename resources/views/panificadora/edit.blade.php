<div class="main-contact">
    <h1 class="head">EDITAR PANIFICADORA</h1>
    <div class="row">
        {!!Form::open(['route'=>['panificadora.update',$panificadora->panificadora_id], 'method'=>'PUT'])!!}
        <form>
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Nombre:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('nombre',$panificadora->nombre)}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Dirección:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('direccion',$panificadora->direccion)}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Télefono:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('telefono',$panificadora->telefono)}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Horario de atención:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('horario_atencion',$panificadora->horario_atencion)}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            {!!Form::submit('Editar',['class'=>'btn  btn-success'])!!}{!!Form::close()!!}
        </form>
    </div>
</div>


