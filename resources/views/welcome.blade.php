<!DOCTYPE html>
<html>
<head>
    <title>Patient Counts by County</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['County', 'Patients'],
                @foreach ($patientCounts as $county => $count)
                    ['{{ $county }}', {{ $count }}],
                @endforeach
            ]);

            var options = {
                title: 'Patient Counts by County',
                chartArea: {width: '50%'},
                hAxis: {
                    title: 'County',
                },
                vAxis: {
                    title: 'Total Patients',
                    minValue: 0
                }
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('column_chart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>
</body>
</html>
