<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>ID</th>
                <th>Año</th>
                {{-- <th>Documento auto</th> --}}
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tenencias as $tenencia)
                <tr>
                    <td>{{ $tenencia->idTenencias }}</td>
                    <td>{{ $tenencia->anio }}</td>
                    {{-- <td>{{ $tenencia->idDocumentoAuto }}</td>--}}
                    <td class="text-center ">
                        {!! Form::open(['route' => ['tenencias.destroy', $tenencia->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('tenencias.show', [$tenencia->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('tenencias.edit', [$tenencia->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
