<div class="table-responsive">
    <table class="table" id="equipos-table">
        <thead>
            <tr>
                <th>Idtipoequipo</th>
        <th>Idempleado</th>
        <th>Idmarca</th>
        <th>Idmodelo</th>
        <th>Idram</th>
        <th>Iddiscoduro</th>
        <th>Foto</th>
        <th>Numeroserie</th>
        <th>Preciocompra</th>
        <th>Estatus</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($equipos as $equipo)
            <tr>
                       <td>{{ $equipo->idTipoEquipo }}</td>
            <td>{{ $equipo->idEmpleado }}</td>
            <td>{{ $equipo->idMarca }}</td>
            <td>{{ $equipo->idModelo }}</td>
            <td>{{ $equipo->idRam }}</td>
            <td>{{ $equipo->idDiscoDuro }}</td>
            <td>{{ $equipo->foto }}</td>
            <td>{{ $equipo->numeroSerie }}</td>
            <td>{{ $equipo->precioCompra }}</td>
            <td>{{ $equipo->estatus }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['equipos.destroy', $equipo->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('equipos.show', [$equipo->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('equipos.edit', [$equipo->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
