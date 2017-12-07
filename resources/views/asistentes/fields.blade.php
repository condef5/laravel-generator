<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Universidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('universidad', 'Universidad:') !!}
    {!! Form::text('universidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Ponencia Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ponencia_id', 'Seleciona la Ponencia:') !!}
    {!! Form::select('ponencia_id', $ponencias , null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('asistentes.index') !!}" class="btn btn-default">Cancel</a>
</div>
