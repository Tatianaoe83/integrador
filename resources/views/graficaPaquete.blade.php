@extends('adminlte::layouts.app')

@section('main-content')

  <a href="{{ url('/Suscripcion') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i>Regresar</button></a>

 <script src="{{asset('/js/Chartjs.bundle.min.js')}}" type="text/javascript"></script>

<script>
    var mas = ['Basico','Estandar','Premium'];
    var $Basico = <?php echo $Basico; ?>;
    var $Estandar = <?php echo $Estandar; ?>;
    var $Premium = <?php echo $Premium; ?>;

    var barChartData = {
        labels: mas,
        datasets: [{
            label: 'Basico',
            backgroundColor: ['rgba(46, 134, 01)','rgba(0, 128, 108)','rgba(180, 10, 0)'],
            data: [$Basico,$Estandar,$Premium]
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
                    text: 'Grafica de paquetes registrados'
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
