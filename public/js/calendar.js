$(document).ready(function() {

  $('#calendar').fullCalendar({

    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,listYear'
    },

    height: 500,

listTime: false, // don't show the time column in list view

// THIS KEY WON'T WORK IN PRODUCTION!!!
// To make your own Google API key, follow the directions here:
// http://fullcalendar.io/docs/google_calendar/
googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

// US Holidays
events: 'en.usa#holiday@group.v.calendar.google.com',

eventClick: function(event) {
// opens events in a popup window
window.open(event.url, 'gcalevent', 'width=700,height=600');
return false;
},

loading: function(bool) {
  $('#loading').toggle(bool);
}

});

});