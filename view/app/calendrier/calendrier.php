<?php


use App\Controller\CalendrierController; ?>
<style>
    #external-events {
        position: fixed;
        z-index: 2;
        top: 300px;
        left: 10%;
        width: 150px;
        padding: 0 20px;
        border: 1px solid #ccc;
        background: #eee;
    }

    #external-events .fc-event {
        margin: 1em 0;
        cursor: move;
    }

    #calendar-container {
        padding-top: 150px;
        position: relative;
        z-index: 1;
        margin-left: 200px;
    }

    #calendar {
        max-width: 900px;
        margin: 20px auto;

    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendarInteraction.Draggable;

        var containerEl = document.getElementById('external-events');
        var calendarEl = document.getElementById('calendar');


// initialize the external events
// -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.fc-event',
            eventData: function (eventEl) {
                return {
                    title: eventEl.innerText
                };
            }
        });

// initialize the calendar
// -----------------------------------------------------------------

        var calendar = new Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid'],
            timeZone: 'UTC+1',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            editable: true,
            eventLimit: true ,
            droppable: true, // this allows things to be dropped onto the calendar

        });

        calendar.render();
    });
</script>
<div id='external-events'>

    <p>
        <strong><?= $prenom ?>, glissez vos réservations pour <?= $nom ?></strong>
    </p>

    <?php (new App\Controller\CalendrierController)->afficherprenomEnfants($prenom); ?>

</div>

<div id='calendar-container'>
    <div id='calendar'></div>
</div>