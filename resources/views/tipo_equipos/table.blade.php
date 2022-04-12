<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Tipo equipo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipoEquipos as $tipoEquipo)
                <tr>
                    <td>{{ $tipoEquipo->tipoEquipo }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['tipoEquipos.destroy', $tipoEquipo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{--<a href="{!! route('tipoEquipos.show', [$tipoEquipo->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>--}}
                            <a href="{!! route('tipoEquipos.edit', [$tipoEquipo->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
