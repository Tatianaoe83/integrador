@extends('adminlte::layouts.app')

@section('main-content')
 <script src="{{asset('/js/Chartjs.bundle.min.js')}}" type="text/javascript"></script>

<script>
    var mas = ['Disponible', 'Ocupado','Mantenimiento'];
    var $Disponible = <?php echo $Disponible; ?>;
    var $Ocupado = <?php echo $Ocupado; ?>;
    var $Mantenimiento = <?php echo $Mantenimiento; ?>;

    var barChartData = {
        labels: mas,
        datasets: [{
            label: 'Disponible',
            backgroundColor: ['rgba(46, 134, 01)','rgba(0, 128, 108)','rgba(180, 10, 0)'],
            data: [$Disponible,$Ocupado,$Mantenimiento]
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'doughnut',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: 'rgb(0, 255, 0)',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Grafica de Disponibilidad De Cuartos'
                }
            }
        });

    };
</script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Grafica</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
