<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Auto</th>
                <th>Taller</th>
                <th>Kilometraje</th>
                <th>Fecha ingreso</th>
                <th>Fecha entrega</th>
                <th>Motivo ingreso</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mantenimientoAutos as $mantenimientoAuto)
                <tr>
                    <td>{{ $mantenimientoAuto->auto->placas }}</td>
                    <td>{{ $mantenimientoAuto->tallere->nombreTaller }}</td>
                    <td>{{ $mantenimientoAuto->kilometraje }}</td>
                    <td>{{ $mantenimientoAuto->fechaIngreso }}</td>
                    <td>{{ $mantenimientoAuto->fechaEntrega }}</td>
                    <td>{{ $mantenimientoAuto->motivoIngreso }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['mantenimientoAutos.destroy', $mantenimientoAuto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('mantenimientoAutos.show', [$mantenimientoAuto->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('mantenimientoAutos.edit', [$mantenimientoAuto->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
