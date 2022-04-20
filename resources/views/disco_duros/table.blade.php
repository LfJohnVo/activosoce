<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Tipo disco duro</th>
                <th>Capacidad</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($discoDuros as $discoDuro)
                <tr>
                    <td>{{ $discoDuro->tipoDiscoDuro }}</td>
                    <td>{{ $discoDuro->capacidad }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['discoDuros.destroy', $discoDuro->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('discoDuros.show', [$discoDuro->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('discoDuros.edit', [$discoDuro->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
