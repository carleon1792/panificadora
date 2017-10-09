<div class="row">
    <h1>PRODUCTOS</h1>
    <table class="table" border="2">
        <thead>
        <td>Panificadora </td>
        <td>Tipo</td>
        <td>Precio</td>
        <td>Actualizar </td>
        <td>Eliminar </td>
        </thead>
        @foreach($productos as $producto)
            <tbody>
            <td>{{$producto->nombre_panificadora}}</td>
            <td>{{$producto->tipo}}</td>
            <td>{{$producto->precio}}</td>
            <td>{!! link_to_route('producto.edit',$title='Editar',$parameters=$producto->producto_id,
          $attributes=['class'=>'btn btn-primary']) !!}</td>
            <td>
                {!!Form::open(['route'=>['producto.destroy',$producto->producto_id], 'method'=>'DELETE'])!!}
                {!!Form::submit('Eliminar ',['class'=>'btn btn-danger'])!!}
                {!!Form::close()!!}
            </td>
            </tbody>
        @endforeach
    </table>
    <br>
    {!! link_to_route('producto.create',$title='Crear nuevo producto',null,
      $attributes=['class'=>'btn btn-primary']) !!}
</div>

