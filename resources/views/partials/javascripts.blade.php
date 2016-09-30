<script   src="http://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>




<!--<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>-->
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('js') }}/bootstrap.min.js"></script>

<script src="{{ url('js') }}/moment.min.js"></script>
<script src="{{ url('js') }}/fullcalendar.min.js"></script>
<script src="{{ url('js') }}/gcal.js"></script>
<script src="{{ url('js') }}/calendar.js"></script>

<script src="{{ url('quickadmin/js') }}/main.js"></script>


<!-- Load d3.js and c3.js -->
<script src="{{ url('js') }}/d3.v3.min.js" charset="utf-8"></script>
<script src="{{ url('js') }}/c3.min.js"></script>

<script type="text/javascript">
  var chart = c3.generate({
    size: {
      height: 200,
      width: 525
    },
    data: {
        columns: [
            ['Budget', 300, 350, 300, 250, 300, 315]
        ],
        types: {
            data1: 'area',
            data2: 'area-spline'
        }
    }
});


</script>