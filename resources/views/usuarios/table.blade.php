<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
               {{-- <th>Email Verified At</th>
                <th>Password</th>
                <th>Remember Token</th> --}}
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    {{--<td>{{ $usuario->email_verified_at }}</td>
                    <td>{{ $usuario->password }}</td>
                    <td>{{ $usuario->remember_token }}</td>--}}
                    <td class="text-center ">
                        {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{!! route('usuarios.show', [$usuario->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a> --}}
                            <a href="{!! route('usuarios.edit', [$usuario->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
