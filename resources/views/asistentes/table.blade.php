<table class="table table-responsive" id="asistentes-table">
    <thead>
        <th>Nombre</th>
        <th>Universidad</th>
        <th>Ponencia</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($asistentes as $asistente)
        <tr>
            <td>{!! $asistente->nombre !!}</td>
            <td>{!! $asistente->universidad !!}</td>
            <td>{!! $asistente->ponencia->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['asistentes.destroy', $asistente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('asistentes.show', [$asistente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('asistentes.edit', [$asistente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>