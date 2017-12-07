<table class="table table-responsive" id="loops-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($loops as $loop)
        <tr>
            <td>{!! $loop->nombre !!}</td>
            <td>
                {!! Form::open(['route' => ['loops.destroy', $loop->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('loops.show', [$loop->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('loops.edit', [$loop->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>