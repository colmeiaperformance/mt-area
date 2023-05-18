/*
 *  Document   : be_comp_calendar.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Calendar Page
 */

// Full Calendar, for more examples you can check out http://fullcalendar.io/
class pageCompCalendar {

  /*
   * Init calendar demo functionality
   *
   */
  static initCalendar() {
    let date = new Date();
    let d = date.getDate();
    let m = date.getMonth();
    let y = date.getFullYear();

    let calendar = new FullCalendar.Calendar(document.getElementById('js-calendar'), {
      themeSystem: 'bootstrap5',
      //themeSystem: 'standard',
      initialView: 'listMonth',
      titleFormat: { year: 'numeric', month: 'long' },
      timeZone: 'America/Sao_Paulo',
      firstDay: 0,
      locale: 'pt-br',
      editable: false,
      droppable: false,
      eventTimeFormat: { // like '14:30:00'
        hour: '2-digit',
        minute: '2-digit',
        meridiem: false
      },
      buttonText: {
        today:    'hoje',
        month:    'mês',
        week:     'semana',
        day:      'dia',
        list:     'lista'
      },
      headerToolbar: {
        left: 'title',
        center: '',
        right: 'prev,next today dayGridMonth,listMonth'
      },
      events: [
        {
          title: 'Evento Geral A',
          start: new Date(y, m, 1),
          allDay: true,
          color: '#6f9c40'
        },
        {
          title: 'Meditação Coletiva Especial',
          start: new Date(y, m, 3, 18),
          end: new Date(y, m, 3, 19),
          color: '#e04f1a'
        },
        {
          title: 'Evento B',
          start: new Date(y, m, 9, 15, 0),
          end: new Date(y, m, 12, 17, 0),
          // allDay: true,
          color: '#6f9c40'
        },
        {
          title: 'Assembleia A',
          start: new Date(y, m, 17),
          end: new Date(y, m, 19),
          allDay: true,
          color: '#e69f17'
        },
        {
          id: 999,
          title: 'Residencial A',
          start: new Date(y, m, 6, 15, 0, 0),
          color: '#e69f17'
        },
        {
          id: 999,
          title: 'Curso ao vivo A',
          start: new Date(y, m, d + 3, 15, 0),
          color: '#e04f1a'
        },
        {
          title: 'Residencial B',
          start: new Date(y, 4, 2, 3, 0),
          end: new Date(y, 4, 2, 3, 0),
          allDay: true,
          color: '#e69f17'
        },
        {
          title: 'Evento Geral C',
          start: new Date(y, m, d, 7, 15, 0),
          color: '#6f9c40'
        },
        {
          title: 'Evento D',
          start: new Date(y, m, d, 8, 0),
          end: new Date(y, m, d, 14, 0),
          color: '#6f9c40'
        },
        {
          title: 'Residencial C',
          start: new Date(y, m, 25),
          end: new Date(y, m, 27),
          allDay: true,
          color: '#e69f17'
        },
        {
          title: 'Live B',
          start: new Date(y, m, d + 8, 20, 0),
          end: new Date(y, m, d + 8, 22, 0),
          color: '#e04f1a'
        },
        {
          title: 'Curso A',
          start: new Date(y, m, 22),
          allDay: true,
          url: 'http://www.google.com',
          color: '#3c90df'
        }
      ]
    });

    calendar.render();
  }

  /*
   * Init functionality
   *
   */
  static init() {
    this.initCalendar();
  }
}

// Initialize when page loads
Dashmix.onLoad(() => pageCompCalendar.init());
