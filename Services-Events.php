<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Church Events Calendar</title>
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; background: #f4f6f9; }
    #calendar { max-width: 1000px; margin: 40px auto; background: white; border-radius: 10px; padding: 20px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
    .fc-event { background: #4a6faf; border: none; color: white; padding: 5px 10px; border-radius: 6px; }
  </style>
</head>
<body>
  <div>
    <div class="container pt-3">
        <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
  </div>

  <h1 style="text-align:center; color:#4a6faf;">Church Calendar</h1>
  <div id="calendar"></div>

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        events: [
          { title: 'Sunday Service', start: '2025-11-30T10:00:00', end: '2025-11-30T12:00:00', backgroundColor: '#27ae60' },
          { title: 'Youth Group', start: '2025-12-05T19:00:00', backgroundColor: '#e67e22' },
          { title: 'Bible Study', start: '2025-12-03T18:30:00', recurring: true, daysOfWeek: [3] },
          { title: 'Christmas Eve Service', start: '2025-12-24T19:00:00', backgroundColor: '#c0392b' },
          { title: 'Prayer Meeting', start: '2025-11-26T07:00:00' }
        ],
        eventClick: function(info) {
          alert('Event: ' + info.event.title + '\nTime: ' + info.event.start.toLocaleString());
        }
      });
      calendar.render();
    });
  </script>
</body>
</html>