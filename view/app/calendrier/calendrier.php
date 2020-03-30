<?php
?>
<style>
    #external-events {
        position: fixed;
        z-index: 2;
        top: 300px;
        left: 10%;
        width: 150px;
        padding: 0 10px;
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
        var checkbox = document.getElementById('drop-remove');

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
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function (info) {
// is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
// if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

        calendar.render();
    });
</script>
<div id='external-events'>
    <p>
        <strong>Draggable Events</strong>
    </p>
    <div class='fc-event'>My Event 1</div>
    <div class='fc-event'>My Event 2</div>
    <div class='fc-event'>My Event 3</div>
    <div class='fc-event'>My Event 4</div>
    <div class='fc-event'>My Event 5</div>
    <p>
        <input type='checkbox' id='drop-remove'/>
        <label for='drop-remove'>remove after drop</label>
    </p>
</div>

<div id='calendar-container'>
    <div id='calendar'></div>
</div>