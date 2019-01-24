@extends('layouts.panel_administrador_master')
@section('title', 'Panel de Administrador - Charts')
@section('content')
<div id="content-wrapper">

        <div class="container-fluid">
         <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Usuarios registrados</div>
            <div class="card-body">
                  <canvas id="myChart" width="100%" height="30%"></canvas>
    <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [
                @foreach($usersPerMonth as $month)
                    {{$month['month'].','}}
                @endforeach
            ],
            datasets: [{
                label: 'Usuarios logueados este mes',
                data: [
                    @foreach($usersPerMonth as $users)   
                        [{{$users['users']}}],
                    @endforeach
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    '#2ef3b0',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    </script>
            </div>
        </div>
    </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
@endsection