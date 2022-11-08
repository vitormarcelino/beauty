require('eonasdan-bootstrap-datetimepicker');
require('./pt-br');

$('.datetimepicker').datetimepicker({
    format: "DD/MM/YYYY HH:mm",
    sideBySide: true,
    stepping: 30,
    locale: 'pt-br',
    icons: {
        time: 'far fa-clock',
        date: 'far fa-calendar',
        up: 'fas fa-arrow-up',
        down: 'fas fa-arrow-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-calendar-check',
        clear: 'far fa-trash-alt',
        close: 'far fa-times-circle'
    }
});

$('.datepicker').datetimepicker({
    format: "DD/MM/YYYY",
    stepping: 30,
    icons: {
        time: 'far fa-clock',
        date: 'far fa-calendar',
        up: 'fas fa-arrow-up',
        down: 'fas fa-arrow-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right',
        today: 'fas fa-calendar-check',
        clear: 'far fa-trash-alt',
        close: 'far fa-times-circle'
    }
});

