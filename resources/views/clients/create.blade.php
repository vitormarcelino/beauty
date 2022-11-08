@extends('layouts.master')

@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Novo Cliente</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'clients.store', "class" => "col-md-12"]) !!}
                    @include('clients.fields')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
