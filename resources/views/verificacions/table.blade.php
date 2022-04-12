<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Documentos autos</th>
                <th>Verificación</th>
                <th>Bimestre</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($verificacions as $verificacion)
                <tr>
                    <td>{{ $verificacion->idDocumentosAutos }}</td>
                    <td>{{ $verificacion->verificacion }}</td>
                    <td>{{ $verificacion->bimestre }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['verificacions.destroy', $verificacion->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('verificacions.show', [$verificacion->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('verificacions.edit', [$verificacion->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
