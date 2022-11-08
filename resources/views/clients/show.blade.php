@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><span class="fa @if ($client->legal_person) fa-city @else fa-user @endif"></span> {{ $client->name }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('clients.edit', [$client->id]) !!}">Editar</a>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <p></p>
                <a href="{{ route('events.create.client', [$client->id]) }}">
                    <button type="button" class="btn btn-default">Adicionar Evento</button>
                </a>
            </div>

        </div>


        <div class="card-body">
            @forelse($client->events() as $event)
            <div class="callout callout-info">
                <a href="{{ route('events.show', [$event->id])}}" class="text-primary text-decoration-none">
                    {{ $event->description() }}
                </a>
            </div>
            @empty
              <p>Não há eventos para este cliente</p>
            @endforelse
        </div>
    </div>

@endsection
