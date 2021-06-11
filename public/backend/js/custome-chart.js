"use strict";

var statistics_chart = document.getElementById("myChart").getContext('2d');

var myChart = new Chart(statistics_chart, {
  type: 'line',
  data: {
    labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"],
    datasets: [
      {
        label: 'Absensi',
        data: [15, 30, 20, 35, 30, 54],
        borderWidth: 5,
        borderColor: '#6777ef',
        backgroundColor: 'transparent',
        pointBackgroundColor: '#fff',
        pointBorderColor: '#6777ef',
        pointRadius: 4
      },
      
      {
        label: 'Tidak Hadir',
        data: [15, 25, 25, 15, 27, 45],
        borderWidth: 5,
        borderColor: '#FC544B',
        backgroundColor: 'transparent',
        pointBackgroundColor: '#fff',
        pointBorderColor: '#FC544B',
        pointRadius: 4
      },

      {
        label: 'Terlambat',
        data: [5, 10, 30, 15, 20, 34],
        borderWidth: 5,
        borderColor: '#FFA426',
        backgroundColor: 'transparent',
        pointBackgroundColor: '#fff',
        pointBorderColor: '#FFA426',
        pointRadius: 4
      },
    ]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          display: false,
          drawBorder: false,
        },
        ticks: {
          stepSize: 10
        }
      }],
      xAxes: [{
        gridLines: {
          color: '#fbfbfb',
          lineWidth: 2
        }
      }]
    },
  }
});