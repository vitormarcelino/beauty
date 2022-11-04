@extends('layouts.user_type.auth')

@section('content')

<div class="card">
    <div class="card-header pb-0 px-3">
        <h6 class="mb-0">{{ $patient->name }}</h6>
    </div>
</div>

@endsection