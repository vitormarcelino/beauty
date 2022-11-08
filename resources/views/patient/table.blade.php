<div class="table-responsive">
    <table class="table" id="event-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Observações</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach($patients as $patient)
                <tr>
                    <td>
                        <a href="{{ route('patients.show', [ $patient->id ]) }}">{{ $patient->name }}</a>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $patient->phone }}</p>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $patient->notes }}</span>
                    </td>
                    <td class="align-middle">
                        <a href="{{ route('patients.edit', [$patient->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>