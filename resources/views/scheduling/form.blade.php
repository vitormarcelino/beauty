@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">Agendamento</h6>
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
                        <label for="name" class="form-control-label">Paciente</label>
                        <select class="selectpicker" data-live-search="true">
                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                        </select>

                        <!-- <input class="form-control" type="text" @if(isset($patient)) value="{{ $patient->name }}" @endif placeholder="Nome" name="name" onfocus="focused(this)" onfocusout="defocused(this)"> -->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection