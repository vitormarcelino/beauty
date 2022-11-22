@extends('layouts.master')

@section('content')

<div class="content">
    <!-- <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $patient->name }}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('patients.edit', [ $patient->id ]) !!}">Editar</a>
                </button>
            </div>
        </div>
        <div class="card-body">
            @if($patient->phone)<p>Telefone: {{ $patient->phone }}</p>@endif
            @if($patient->email)<p>Email: {{ $patient->email }}</p>@endif

            <div class="">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('scheduling.create', [ $patient->id ]) !!}">Novo Agendamento</a>
            </div>
        </div>
    </div> -->


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">{{ $patient->name }}</h3>
                        <!-- <p class="text-muted text-center"></p> -->
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Agendamentos</b> <a class="float-right">0</a>
                            </li>
                        </ul>

                        @if($patient->phone)<strong><i class="fas fa-book mr-1"></i> Telefone</strong>
                            <p class="text-muted">{{ $patient->phone }}</p>@endif

                        @if($patient->email)<strong><i class="fas fa-book mr-1"></i> Email</strong>
                            <p class="text-muted">{{ $patient->email }}</p>@endif

                        @if($patient->cpf)<strong><i class="fas fa-book mr-1"></i> CPF</strong>
                            <p class="text-muted">{{ $patient->cpf }}</p>@endif

                        @if($patient->address)<strong><i class="fas fa-book mr-1"></i> Endereço</strong>
                            <p class="text-muted">{{ $patient->address }}</p>@endif


                        <hr>
                        <strong><i class="far fa-file-alt mr-1"></i> Observações</strong>
                        <p class="text-muted">{{ $patient->notes }}</p>
                        <hr>
                        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('patients.edit', [ $patient->id ]) !!}">Editar Informações</a>
                        <hr>
                        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('scheduling.create', [ $patient->id ]) !!}">Novo Agendamento</a>

                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                            </div>

                            <div class="tab-pane" id="timeline">
                            </div>

                            <div class="tab-pane" id="settings">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

@endsection