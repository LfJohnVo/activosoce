<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Razon social</th>
                <th>Rfc</th>
                <th>Dirección</th>
                <th>Estatus</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($arrendadoras as $arrendadora)
                <tr>
                    <td>{{ $arrendadora->nombre }}</td>
                    <td>{{ $arrendadora->razonSocial }}</td>
                    <td>{{ $arrendadora->rfc }}</td>
                    <td>{{ $arrendadora->direccion }}</td>
                    <td>{{ $arrendadora->estatus }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['arrendadoras.destroy', $arrendadora->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{--<a href="{!! route('arrendadoras.show', [$arrendadora->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>--}}
                            <a href="{!! route('arrendadoras.edit', [$arrendadora->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
