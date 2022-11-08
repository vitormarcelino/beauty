<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Cpf/Cnpj</th>
                <th class="text-right">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $client)
            <tr>
            <td>{!! $client->name !!}</td>
            <td>@if($client->legal_person){{ $client->cnpj }}@else{{ $client->cpf }}@endif</td>
            <td class="text-right">
                <div class='btn-group'>
                    <a href="{!! route('clients.show', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a>
                    <a href="{!! route('clients.edit', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-edit"></i></a>
                </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
