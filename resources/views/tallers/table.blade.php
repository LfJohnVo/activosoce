<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Emal</th>
                <th>Estatus</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tallers as $taller)
                <tr>
                    <td>{{ $taller->nombreTaller }}</td>
                    <td>{{ $taller->direccion }}</td>
                    <td>{{ $taller->telefono }}</td>
                    <td>{{ $taller->emal }}</td>
                    <td>{{ $taller->estatus }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['tallers.destroy', $taller->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('tallers.show', [$taller->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('tallers.edit', [$taller->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
