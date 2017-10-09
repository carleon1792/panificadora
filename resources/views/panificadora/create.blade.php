<div class="main-contact">
    <h1 class="head">CREAR PANIFICADORA</h1>
    <div class="row">
        {!!Form::open(['route'=>'panificadora.store', 'method'=>'POST'])!!}
        <form>
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Nombre:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('nombre')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Dirección:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('direccion')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Télefono:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('telefono')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Horario de atención:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('horario_atencion')}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            {!!Form::submit('Crear',['class'=>'btn  btn-success'])!!}{!!Form::close()!!}
        </form>
    </div>
</div>
