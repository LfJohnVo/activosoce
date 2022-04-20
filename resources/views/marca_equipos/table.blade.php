<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Tipo equipo</th>
                <th>Marca</th>
                <th>Fabricante</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($marcaEquipos as $marcaEquipo)
                <tr>
                    <td>{{ $marcaEquipo->cat_tipos_equipo->tipoEquipo }}</td>
                    <td>{{ $marcaEquipo->marca }}</td>
                    <td>{{ $marcaEquipo->fabricante }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['marcaEquipos.destroy', $marcaEquipo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('marcaEquipos.show', [$marcaEquipo->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('marcaEquipos.edit', [$marcaEquipo->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
