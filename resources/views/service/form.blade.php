@extends('layouts.user_type.auth')

@section('content')

<div class="card">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">Cadastrar Paciente</h6>
    </div>
    <div class="card-body pt-4 p-3">
        <form action="{{ $action }}" method="POST" role="form text-left"> <!-- enctype="multipart/form-data" -->
            @csrf
            @if($method == "PATCH")
                @method('PATCH')
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nome</label>
                        <input class="form-control" type="text" @if(isset($service)) value="{{ $service->name }}" @endif placeholder="Nome" name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="duration" class="form-control-label">Duração</label>
                        <input class="form-control" type="text" @if(isset($service)) value="{{ $service->duration }}" @endif placeholder="Duração" name="duration" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <label for="description">Descrição</label>
                <div class="">
                    <textarea class="form-control" rows="3" placeholder="Descrição" name="description">@if(isset($service)) {{ $service->description }} @endif</textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Salvar</button>
            </div>
        </form>
    </div>
</div>

@endsection