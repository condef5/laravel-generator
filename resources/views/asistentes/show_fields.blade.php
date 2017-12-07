<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $asistente->id !!}</p>
</div>

<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $asistente->nombre !!}</p>
</div>

<!-- Universidad Field -->
<div class="form-group">
    {!! Form::label('universidad', 'Universidad:') !!}
    <p>{!! $asistente->universidad !!}</p>
</div>

<!-- Ponencia Id Field -->
<div class="form-group">
    {!! Form::label('ponencia_id', 'Ponencia Id:') !!}
    <p>{!! $asistente->ponencia_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $asistente->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $asistente->updated_at !!}</p>
</div>

