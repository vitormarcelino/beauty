<div class="card">
    <div class="card-header">
        <h3 class="card-title">Próximos Agendamentos</h3>
    </div>

    <div class="card-body p-0">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Paciente</th>
                    <th>Data e Hora</th>
                    <th>Serviço</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedulings as $scheduling)
                <tr>
                    <td>{{ $scheduling->id }}</td>
                    <td>{{ $scheduling->patient()->name }}</td>
                    <td>{{ $scheduling->date }}</td>
                    <td>{{ $scheduling->service()->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>