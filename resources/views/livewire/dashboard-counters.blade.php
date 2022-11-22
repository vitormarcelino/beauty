<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-info"><i class="far fa-clock"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Agendamentos</span>
                <span class="info-box-number">{{ $schedulings }}</span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-dollar-sign"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">A receber</span>
                <span class="info-box-number">R$ {{ $payment_to_receive }}</span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Pacientes</span>
                <span class="info-box-number">{{ $patients }}</span>
            </div>
        </div>
    </div>
</div>