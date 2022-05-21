<html>
  <head>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Memory', 80],
          ['CPU', 55],
          ['Network', 68]
        ]);

        var options = {
          width: 400, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart1 = new google.visualization.Gauge(document.getElementById('chart_div1'));
        var chart2 = new google.visualization.Gauge(document.getElementById('chart_div2'));
        var chart3 = new google.visualization.Gauge(document.getElementById('chart_div3'));
        chart1.draw(data, options);
        chart2.draw(data, options);
        chart3.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div1" style="width: 400px; height: 120px;"></div>
    <div id="chart_div2" style="width: 400px; height: 120px;"></div>
    <div id="chart_div3" style="width: 400px; height: 120px;"></div>
  </body>
</html>
