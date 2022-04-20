<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Numero empleado</th>
                <th>Nombres</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Proyecto</th>
                <th>Email</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->numeroEmpleado }}</td>
                    <td>{{ $empleado->nombres }}</td>
                    <td>{{ $empleado->apellidoPaterno }}</td>
                    <td>{{ $empleado->apellidoMaterno }}</td>
                    <td>{{ $empleado->idProyecto }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{--<a href="{!! route('empleados.show', [$empleado->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>--}}
                            <a href="{!! route('empleados.edit', [$empleado->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
