<div class="table-responsive">
    <table class="table" id="dtBasicExample">
        <thead>
            <tr>
                <th>Arrendadora</th>
                <th>Plazo</th>
                <th>Fecha Inicio</th>
                <th>Fecha Final</th>
                <th>Monto Inicial</th>
                <th>Monto Mensualidad</th>
                <th>Estatus</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contratos as $contrato)
                <tr>
                    <td>{{ $contrato->id_arrendadora }}</td>
                    <td>{{ $contrato->plazo }}</td>
                    <td>{{ $contrato->fecha_inicio }}</td>
                    <td>{{ $contrato->fecha_final }}</td>
                    <td>{{ $contrato->monto_inicial }}</td>
                    <td>{{ $contrato->monto_mensualidad }}</td>
                    <td>{{ $contrato->estatus }}</td>
                    <td class="text-center ">
                        {!! Form::open(['route' => ['contratos.destroy', $contrato->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('contratos.show', [$contrato->id]) !!}" class='btn btn-light action-btn '><i
                                    class="fa fa-eye"></i></a>
                            <a href="{!! route('contratos.edit', [$contrato->id]) !!}" class='btn btn-warning action-btn edit-btn'><i
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
