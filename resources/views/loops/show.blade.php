@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Loop
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('loops.show_fields')
                    <a href="{!! route('loops.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
