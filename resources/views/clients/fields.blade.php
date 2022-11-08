<div class="form-group col-sm-6">
    {!! Form::checkbox('legal_person', '1', null, ['id' => 'legal_person']); !!}
    <label class="form-check-label" for="legal_person">Pessoa Jurídica</label>
</div>

<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Cpf Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cpf', 'Cpf:') !!}
        {!! Form::text('cpf', null, ['class' => 'form-control cpf']) !!}
    </div>

    <!-- Cnpj Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cnpj', 'Cnpj:') !!}
        {!! Form::text('cnpj', null, ['class' => 'form-control cnpj']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control email', 'autocomplete' => 'off']) !!}
    </div>

    <!-- Phone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control phone']) !!}
    </div>

    <!-- Birth Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('birth_date', 'Birth Date:') !!}
        {!! Form::text('birth_date', null, ['class' => 'form-control date', 'id' => 'birth_date']) !!}
    </div>

    <!-- Address Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>

    <!-- Notes Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('notes', 'Notes:') !!}
        {!! Form::textarea('notes', null, ['class' => 'form-control', 'rows' => 3]) !!}
    </div>

</div>

@include('partials.submit', ['cancelLink' => route('clients.index'), 'deleteLink' => route('clients.destroy', [$client->id ?? '' ])])
