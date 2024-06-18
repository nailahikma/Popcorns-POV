@extends('Template.base')

@section('title', 'Chart User')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        Dashboard
    </h4>
    <!-- Chart -->
    <section class="content">
        <div class="container-fluid">
            <div id="chart"></div>
        </div>
    </section>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/10/highcharts.js"></script>
    <script type="text/javascript">
        var user = <?php echo json_encode($user) ?>;
        Highcharts.chart('chart', {
            title: {
                text: "Chart Data User"
            },
            xAxis: {
                categories: ['Admin', 'Guest']
            },
            yAxis: {
                title: {
                    text: "Jumlah User"
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true,
                }
            },
            series: [{
                name: 'user',
                data: user
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
    <!-- End Chart -->
</div>
@endsection