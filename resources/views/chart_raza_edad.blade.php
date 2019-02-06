@extends('layouts.panel_administrador_master')
@section('title', 'Chart Raza')
@section('content')
<div class="container">
    <div class="row">
            <canvas id="bubble-chart" width="800" height="800"></canvas>
    </div>
        
</div>

<script>
new Chart(document.getElementById("bubble-chart"), {
    type: 'bubble',
    data: {
      labels: "Africa",
      datasets: [
        {
          label: ["Border Coli"],
          backgroundColor: "rgba(255,221,50,0.2)",
          borderColor: "rgba(255,221,50,1)",
          data: [{
            x: 12,
            y: 1,
            r: 30
          }]
        }, {
          label: ["Husky"],
          backgroundColor: "rgba(60,186,159,0.2)",
          borderColor: "rgba(60,186,159,1)",
          data: [{
            x: 10,
            y: 2,
            r: 15
          }]
        }, {
          label: ["Bichon"],
          backgroundColor: "rgba(0,0,0,0.2)",
          borderColor: "#000",
          data: [{
            x: 10,
            y: 3,
            r: 10
          }]
        }, {
          label: ["Caniche"],
          backgroundColor: "rgba(193,46,12,0.2)",
          borderColor: "rgba(193,46,12,1)",
          data: [{
            x: 11,
            y: 4,
            r: 13
          }]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Perros por raza y Edad'
      }, scales: {
        yAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Raza"
          }
        }],
        xAxes: [{ 
          scaleLabel: {
            display: true,
            labelString: "Edad"
          }
        }]
      }
    }
});


</script>
@endsection