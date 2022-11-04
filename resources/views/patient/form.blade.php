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
                        <input class="form-control" type="text" @if(isset($patient)) value="{{ $patient->name }}" @endif placeholder="Nome" name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cpf" class="form-control-label">CPF</label>
                        <input class="form-control cpf" type="text" @if(isset($patient)) value="{{ $patient->cpf }}" @endif placeholder="CPF" name="cpf" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone" class="form-control-label">Celular</label>
                        <input class="form-control phone" type="text" @if(isset($patient)) value="{{ $patient->phone }}" @endif placeholder="Celular" name="phone" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user-name" class="form-control-label">Email</label>
                        <input class="form-control" type="text" @if(isset($patient)) value="{{ $patient->email }}" @endif placeholder="Email" name="email" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="birth_date" class="form-control-label">Nascimento</label>
                        <input class="form-control date" type="text" @if(isset($patient)) value="{{ $patient->birth_date }}" @endif placeholder="Nascimento" name="birth_date" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address" class="form-control-label">Endereço</label>
                        <input class="form-control" type="text" @if(isset($patient)) value="{{ $patient->address }}" @endif placeholder="Endereço" name="address" onfocus="focused(this)" onfocusout="defocused(this)">
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <label for="notes">Observações</label>
                <div class="">
                    <textarea class="form-control" rows="3" placeholder="Observações" name="notes">@if(isset($patient)) {{ $patient->notes }} @endif</textarea>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Salvar</button>
            </div>
        </form>
    </div>
</div>

@endsection