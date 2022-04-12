<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Auto</th>
                <th>Tarjeton</th>
                <th>Factura</th>
                <th>Responsiva empleado</th>
                <th>Ultima tenencia</th>
                <th>Ultima verificación</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documentoAutos as $documentoAuto)
                <tr>
                    <td>{{ $documentoAuto->auto->placas }}</td>
                    <td>
                        <a href="{!! route('tarjeton', [$documentoAuto->id]) !!}" class='btn-floating btn-sm btn-blue-grey'><i
                                class="fas fa-download"></i></a>
                    </td>
                    <td>
                        <a href="{!! route('factura', [$documentoAuto->id]) !!}" class='btn-floating btn-sm btn-blue-grey'><i
                                class="fas fa-download"></i></a>
                    </td>
                    <td>
                        <a href="{!! route('responsivaempleado', [$documentoAuto->id]) !!}" class='btn-floating btn-sm btn-blue-grey'><i
                                class="fas fa-download"></i></a>
                    </td>
                    <td>
                        <a href="{!! route('ultimatenencia', [$documentoAuto->id]) !!}" class='btn-floating btn-sm btn-blue-grey'><i
                                class="fas fa-download"></i></a>
                    </td>
                    <td>
                        <a href="{!! route('ultimaverificacion', [$documentoAuto->id]) !!}" class='btn-floating btn-sm btn-blue-grey'><i
                                class="fas fa-download"></i></a>
                    </td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['documentoAutos.destroy', $documentoAuto->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('documentoAutos.show', [$documentoAuto->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('documentoAutos.edit', [$documentoAuto->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
