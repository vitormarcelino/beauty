<div class="table-responsive">
    <table class="table" id="event-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>

            @foreach($services as $service)
                <tr>
                    <td>
                        <a href="{{ route('services.show', [ $service->id ]) }}">{{ $service->name }}</a>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $service->description }}</p>
                    </td>
                    <td class="align-middle">
                        <a href="{{ route('services.edit', [$service->id]) }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>