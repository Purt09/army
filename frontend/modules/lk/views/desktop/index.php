<?php
/**
 * @var $this \yii\web\View
 */

$this->title = 'Рабочий стол пользователя: ' . Yii::$app->user->identity->base->firstname . ' ' . Yii::$app->user->identity->base->lastname;

$moodle_link = '<form action="' . Yii::$app->params['moodle_host_info'] . 'autoauth.php" method="post">'
    . '<input type="text" name="username" value="' . Yii::$app->user->identity->username . '" style="display:none">'
    . '<input type="text" name="password" value="' . Yii::$app->user->identity->password . '" style="display:none">'
    . '<button type="submit" class="btn btn-success">Дистанционное обучение</button>'
    . '</form>';
?>
<script>

  document.addEventListener('DOMContentLoaded', function() {

    var containerEl = document.getElementById('external-events-list');
    new FullCalendar.Draggable(containerEl, {
      itemSelector: '.external-event',
      eventData: function(eventEl) {
        return {
          title: eventEl.innerText.trim()
        }
      }
    });
    var calendarEl = document.getElementById('calendar');

    FullCalendar.globalLocales.push(function () {
      'use strict';

      var ru = {
        code: "ru",
        week: {
          dow: 1, // Monday is the first day of the week.
          doy: 4  // The week that contains Jan 4th is the first week of the year.
        },
        buttonText: {
          prev: "Назад",
          next: "Вперед",
          today: "Сегодня",
          month: "Месяц",
          week: "Неделя",
          day: "День",
          list: "Список"
        },
        weekText: "Нед",
        allDayText: "Весь день",
        moreLinkText: function(n) {
          return "+ ещё " + n;
        },
        noEventsText: "Нет событий"
      };

      return ru;

    }());

    var calendar = new FullCalendar.Calendar(calendarEl, {
      locale: 'ru',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      initialDate: '2020-06-12',
      navLinks: true, // can click day/week names to navigate views
      nowIndicator: true,

      weekNumbers: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      selectable: true,
      dayMaxEvents: true, // allow "more" link when too many events
      events: [
        {
          title: 'Событие на весь день',
          start: '2020-06-01',
          color: 'purple'
        },
        {
          title: 'На 3 дня',
          start: '2020-06-07',
          end: '2020-06-10'
        },
        {
          groupId: 999,
          title: 'Создать тест для 565 группы',
          start: '2020-06-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Доклад начальнику',
          start: '2020-06-16T16:00:00'
        },
        {
          title: 'Конференция',
          start: '2020-06-11',
          end: '2020-06-13'
        },
        {
          title: 'Совещание',
          start: '2020-06-12T10:30:00',
          end: '2020-06-12T12:30:00'
        },
        {
          title: 'Обед',
          start: '2020-06-12T12:00:00'
        },
        {
          title: 'Совещание',
          start: '2020-06-12T14:30:00'
        },
        {
          title: 'День рождение',
          start: '2020-06-12T17:30:00'
        },
        {
          title: 'Тест',
          start: '2020-06-12T20:00:00'
        },
        {
          title: 'Сходить в учеб. часть',
          start: '2020-06-13T07:00:00'
        },
        {
          title: 'Ссылка',
          url: 'http://google.com/',
          start: '2020-06-28'
        }
      ]
    });

    calendar.render();
  });

</script>
<div class="row">
    <div class="col-md-3">
        <?= $moodle_link ?> <br>
        <div class="box box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">События</h4>
            </div>
            <div class="box-body">
                <!-- the events -->
                <div id="external-events-list">
                    <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative; z-index: auto; left: 0px; top: 0px;">Событие 1</div>
                    <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Событие 2</div>
                    <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Событие 3</div>
                    <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Событие 4</div>
                    <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Событие 5</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="box box-primary">
            <div id='calendar'></div>
        </div>
    </div>

</div>