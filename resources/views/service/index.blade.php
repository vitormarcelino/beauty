@extends('layouts.master')

@section('content')

<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Serviços</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('services.create') !!}">+ Adicionar</a>
                </button>
            </div>
        </div>
        <div class="card-body">
            @include('service.table')
        </div>
    </div>
    <div class="text-center">

    </div>
</div>

@endsection