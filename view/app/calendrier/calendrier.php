<?php
?>
<style>
    #calendar {
        max-width: 900px;
        margin: 40px auto;
    }
</style>
<script>




    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
            defaultView: 'dayGridMonth',
            defaultDate: '2020-04-10',
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },

        });

        calendar.render();
    });



</script>
<div id='calendar'></div>