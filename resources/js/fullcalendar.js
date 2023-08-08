// resources/js/fullcalendar.js
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendario');

    var calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin],
        events: [
            // Aqui você pode definir os eventos do calendário
        ]
    });

    calendar.render();
});





