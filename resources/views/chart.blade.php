
@extends('layouts.adminLayout.admin_design')
@section('content')

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> </a></div>
  </div>
<!--End-breadcrumbs-->
<!DOCTYPE html>
<html>
<head>
    <title>Visualisation</title>
</head>
   
<body>

<div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var users =  <?php echo json_encode($users) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'Channel Name'
        },
        subtitle: {
            text: 'Location : ISURF Lab'
        },
         xAxis: {
            categories: ['April']
        },
        yAxis: {
            title: {
                text: 'Data per sec'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Range',
            data: users
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>


@endsection