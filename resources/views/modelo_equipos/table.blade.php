<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modeloEquipos as $modeloEquipo)
                <tr>
                    <td>{{ $modeloEquipo->cat_marcas_equipo->marca }}</td>
                    <td>{{ $modeloEquipo->modelo }}</td>
                    <td>{{ $modeloEquipo->anio }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['modeloEquipos.destroy', $modeloEquipo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('modeloEquipos.show', [$modeloEquipo->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('modeloEquipos.edit', [$modeloEquipo->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
