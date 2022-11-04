require('jquery-mask-plugin');

$(".cpf").mask("000.000.000-00");
$('.money').mask('000.000,00', {reverse: true});
$(".phone").mask('(00) 90000-0000');

$('.date').mask('00/00/0000');
$(".cnpj").mask("99.999.999/9999-99");

$(document).ready(function() {
    let phone = $(".phone").val();
    // console.log(phone.match(/-[0-9][0-9][0-9]$/));
    if (phone.match(/-[0-9][0-9][0-9]$/)) {
        $('.phone').mask('(00) 0000-0000');
    }
});

let phoneHandle = () => {
    let phone = $('.phone');
    phone.mask('(00) 90000-0000');
}

$('.phone').keypress(phoneHandle);

$('.phone').on('blur', () => {
    let phone = $('.phone');
    if (phone.val().length == 14) {
        phone.mask('(00) 0000-0000');
    } else {
        phone.mask('(00) 90000-0000');
    }
});