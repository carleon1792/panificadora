<div class="main-contact">
    <h1 class="head">CREAR PRODUCTO</h1>
    <div class="row">
        {!!Form::open(['route'=>'producto.store', 'method'=>'POST'])!!}
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
                        {{Form::label('id', 'Tipo:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('tipo')}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {{Form::label('id', 'Precio:')}}
                    </div>
                    <div class="col-md-6">
                        {{Form::text('precio')}}
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            {!!Form::submit('Guardar',['class'=>'btn btn-sm btn-success'])!!}{!!Form::close()!!}
        </form>
    </div>
</div>
