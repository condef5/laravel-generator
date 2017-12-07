@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Loop
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($loop, ['route' => ['loops.update', $loop->id], 'method' => 'patch']) !!}

                        @include('loops.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection