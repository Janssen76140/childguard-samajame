<?php
?>
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
                center: 'title', //+nom pro
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
        <strong>Glissez vos réservations  <?= $prenom ?></strong>
    </p>
    <div class='fc-event'>My Event 1</div>
    <div class='fc-event'>My Event 2</div>
    <div class='fc-event'>My Event 3</div>
    <div class='fc-event'>My Event 4</div>
    <div class='fc-event'>My Event 5</div>

</div>

<div id='calendar-container'>
    <div id='calendar'></div>
</div>