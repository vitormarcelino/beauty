@extends('layouts.master')

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Editar Cliente</h3>
            </div>
           <div class="card-body">
                {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'patch']) !!}
                    @include('clients.fields')
                {!! Form::close() !!}
                <form method="POST" action="{{ route('clients.destroy', [$client->id]) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
           </div>
       </div>
   </div>
@endsection
