<div class="row">
    <h1>PANIFICADORAS</h1>
    <table class="table" border="2">
        <thead>
        <td>Nombre</td>
        <td>Dirección</td>
        <td>Télefono</td>
        <td>Horario de atención</td>
        <td>Actualizar</td>
        <td>Eliminar</td>
        </thead>
        @foreach($panificadoras as $panificadora)
            <tbody>
            <td>{{$panificadora->nombre}}</td>
            <td>{{$panificadora->direccion}}</td>
            <td>{{$panificadora->telefono}}</td>
            <td>{{$panificadora->horario_atencion}}</td>
            <td>{!! link_to_route('panificadora.edit',$title='Editar',$parameters=$panificadora->panificadora_id,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
            <td>
                {!!Form::open(['route'=>['panificadora.destroy',$panificadora->panificadora_id], 'method'=>'DELETE'])!!}
                {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
                {!!Form::close()!!}
            </td>
            </tbody>
        @endforeach
    </table>
    <br>
    {!! link_to_route('panificadora.create',$title='Crear nueva panificadora',null,
      $attributes=['class'=>'btn btn-primary']) !!}
</div>

