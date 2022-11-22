@extends('layouts.master')

@section('content')


<div class="content">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Novo Agendamento</h3>
        </div>
        <div class="card-body">
            <form action="{{ $action }}" method="POST" role="form text-left"> <!-- enctype="multipart/form-data" -->
                @csrf
                @if($method == "PATCH")
                    @method('PATCH')
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <select class="custom-select" disabled>
                                <option  value="{{ $patient->id}}">{{ $patient->name }}</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="patient_id" value="{{ $patient->id}}" />

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="service_id">Serviço</label>
                            <select class="custom-select" name="service_id">
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Data e Hora</label>
                            <input name="date" class="form-control datetimepicker" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="value">Valor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">R$</span>
                                </div>
                                <input type="text" class="form-control money" name="value">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="paid">Pago</label>
                            <select class="custom-select" name="paid">
                                <option value="0">Não</option>
                                <option value="1">Sim</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="notes">Observações</label>
                            <textarea class="form-control" rows="3" placeholder="Observações" name="notes"></textarea>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-primary btn-md mt-4 mb-4">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection