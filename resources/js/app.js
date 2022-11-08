require('./bootstrap');
require('./masks');
require('./datetimepicker');
require('./estimate');
require('jquery.autocomplete');

$('#legal_person').on('click', () => {
    processLegalPerson();
});

function processLegalPerson() {
    let legalPerson = $('#legal_person').is(":checked");
    if(legalPerson) {
        $('.cnpj').parent().show();
        $('.cpf').parent().hide();
        $('#birth_date').parent().hide();
    } else {
        $('.cnpj').parent().hide();
        $('.cpf').parent().show();
        $('#birth_date').parent().show();
    }
}

processLegalPerson();

$("#duration").on('change', () => {
    let duration = $("#duration").val();
    $("#durationLabel").text(maybePluralize(duration, 'Hora'));
});

var options = { 
    serviceUrl: '/api/decorators/find',
    minChars: 0,
    searchEverywhere: false,
}
var a = $('#decorator').autocomplete(options)

const maybePluralize = (count, noun, suffix = 's') =>
  `${count} ${noun}${count > 1 ? suffix : ''}`;

$(".payment_receive").on('click', (e) => {
    let element = $(e.currentTarget);
    let paymentId = element.data('payment-id');
    let eventId = element.data('event-id');
    let paid = element.data('paid');
    let data = {
        paid: !paid
    };
    $.ajax({
        type: 'POST',
        url: `/api/events/${eventId}/payments/${paymentId}/receive`,
        contentType: 'application/json; charset=utf-8',
        accept: 'application/json',
        dataType: "json",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        data: JSON.stringify(data),
        success: function (data) {
            element.data('paid', !paid);
            let receipt = element.parent().find('.receipt');
            if(element.data('paid')) {
                element.removeClass('btn-default');
                element.addClass('btn-success');
                element.text('Pago');
                receipt.removeClass('d-none');
            } else {
                element.removeClass('btn-success');
                element.addClass('btn-default');
                element.text('Confirmar Pagamento');
                receipt.addClass('d-none');
            }
        }
    });
});


$('#filter_status').on('change', function() {
    let filter = $(this).val()
    let queryString = ''
    if(filter !== 'all') {
        queryString = '?status=' + filter
    }
    window.location.href='/payments' + queryString
});