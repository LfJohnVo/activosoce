<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Empleado</th>
                <th>Color</th>
                <th>Placas</th>
                <th>Número serie</th>
                <th>Número motor</th>
                <th>Año</th>
                <th>Precio Compra</th>
                <th>Kminicial</th>
                <th>Kmfinal</th>
                <th>Foto</th>
                <th>Estatus</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($autos as $auto)
                <tr>
                    <td>{{ $auto->cat_tipos_equipo->tipoEquipo }}</td>
                    <td>{{ $auto->cat_marcas_equipo->marca }}</td>
                    <td>{{ $auto->cat_modelos_equipo->modelo }}</td>
                    <td>{{ $auto->idEmpleado }}</td>
                    <td>{{ $auto->color }}</td>
                    <td>{{ $auto->placas }}</td>
                    <td>{{ $auto->numeroSerie }}</td>
                    <td>{{ $auto->numeroMotor }}</td>
                    <td>{{ $auto->anio }}</td>
                    <td>{{ $auto->precio_Compra }}</td>
                    <td>{{ $auto->kmInicial }}</td>
                    <td>{{ $auto->kmFinal }}</td>
                    <td>
                        <a href="{!! route('compFoto', [$auto->id]) !!}" class='btn-floating btn-sm btn-blue-grey'><i
                                class="fas fa-download"></i></a>
                    </td>
                    <td>{{ $auto->estatus }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['autos.destroy', $auto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('autos.show', [$auto->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('autos.edit', [$auto->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
