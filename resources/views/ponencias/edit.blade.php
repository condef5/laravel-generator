@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ponencia
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ponencia, ['route' => ['ponencias.update', $ponencia->id], 'method' => 'patch']) !!}

                        @include('ponencias.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection