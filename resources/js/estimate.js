$('input[type=radio][name=feedback_type]').change((e) => {
    let possibleFeedbacks = [
        'email',
        'whatsapp'
    ];
    let hideFields = possibleFeedbacks.filter(x => ![e.currentTarget.value].includes(x));
    hideFields.map((item) => {
        $("#" + item).addClass('d-none');
    })
    $("#" + e.currentTarget.value).removeClass('d-none');
});

$('input[type=radio][name=type_client]').change((e) => {
    let element = $("#event_type_id");
    if(e.currentTarget.value == 'corporate') {
        element.addClass('d-none');
        $("#name").attr('placeholder', 'Sua Empresa');
    } else {
        element.removeClass('d-none');
        $("#name").attr('placeholder', 'Seu Nome');
    }
});
