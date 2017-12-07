@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Asistente
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($asistente, ['route' => ['asistentes.update', $asistente->id], 'method' => 'patch']) !!}

                        @include('asistentes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection