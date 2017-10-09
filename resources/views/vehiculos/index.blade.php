<div class="row">
    <h1>VEHICULOS</h1>
    <table class="table" border="2">
        <thead>
        <td>Panificadora </td>
        <td>Placa</td>
        <td>Modelo</td>
        <td>Actualizar </td>
        <td>Eliminar </td>
        </thead>
        @foreach($vehiculos as $vehiculo)
            <tbody>
            <td>{{$vehiculo->nombre_panificadora}}</td>
            <td>{{$vehiculo->placa}}</td>
            <td>{{$vehiculo->modelo}}</td>
            <td>{!! link_to_route('vehiculo.edit',$title='Editar',$parameters=$vehiculo->vehiculo_id,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
            <td>
                {!!Form::open(['route'=>['vehiculo.destroy',$vehiculo->vehiculo_id], 'method'=>'DELETE'])!!}
                {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
                {!!Form::close()!!}
            </td>
            </tbody>
        @endforeach
    </table>
    <br>
    {!! link_to_route('vehiculo.create',$title='Crear nuevo vehiculo',null,
      $attributes=['class'=>'btn btn-primary']) !!}
</div>

