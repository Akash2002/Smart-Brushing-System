<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Brushing Pattern</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

</head>

<body>

<?php
    include "connection.php";

    $sql = "CALL GetSensorData();";
    $result = $conn->query($sql);
    if ( $result == FALSE )
    {
        echo "Error";
        return;
    }

    $data1 = array();
    while($row = $result->fetch_assoc()) {
       $data1[] = $row['XAxis'];
       $data2[] = $row['YAxis'];
    }
    $conn->close();
?>

<script>
$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        height: 100,
        title: {
            text: 'Brushing Pattern'
        },
        xAxis: {
            categories: [<?php echo join($data2, ",") ?>],
            title: {
                text: null
            }
          },
        yAxis: {
            min: 0,
            title: {
                text: 'Days',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                },
                pointWidth: 20
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Number of days',
            data: [<?php echo join($data1,",") ?>]
        }]
    });
});

</script>

<div id="container" style="min-width: 500px; height: 400px; margin: 0 auto"></div>

</body>
</html>
