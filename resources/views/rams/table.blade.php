<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Tipo memoria</th>
                <th>Capacidad</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rams as $ram)
                <tr>
                    <td>{{ $ram->tipoMemoria }}</td>
                    <td>{{ $ram->capacidad }}</td>
                    <td class=" text-center">
                        {!! Form::open(['route' => ['rams.destroy', $ram->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('rams.show', [$ram->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('rams.edit', [$ram->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
