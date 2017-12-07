<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Ponente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ponente_id', 'Selecione el Ponente:') !!}
    {!! Form::select('ponente_id', $ponentes , null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ponencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
