$(document).ready(function () {
  var ctx = $(".chart-sayuran-plant");
  var myChart = new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Sawi", "Kankung", "Kentang", "Tomat", "Bayam"],
      datasets: [
        {
          label: "Statistics",
          data: [50, 125, 75, 45, 18],
          backgroundColor: "#7DC383",
          pointBackgroundColor: "#ffffff",
          pointRadius: 40,
        },
      ],
    },
    options: {
      legend: {
        // display: false,
      },
      maintainAspectRatio: false,
      scales: {
        yAxes: [
          {
            gridLines: {
              display: false,
            },
            ticks: {
              beginAtZero: true,
              stepSize: 10,
            },
          },
        ],
        xAxes: [
          {
            ticks: {
              display: false,
            },
            gridLines: {
              display: false,
            },
          },
        ],
      },
    },
  });

  var ctx = $('.chart-sayuran-plant-2');
  var myChart = new Chart(ctx, {
    type: "pie",
    data: {
      datasets: [
        {
          data: [8900,4500, 6100, 5250, 6680],
          backgroundColor: [
            "#74A84E",
            "#34364A",
            "#7DC383",
            "#FDBE34",
            "#F53D3A",
          ],
          label: "Dataset 1",
        },
      ],
      labels: ["Bandung", "Malang", "Garut", "Semarang", "Surabaya"],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {
        position: "bottom",
      },
    },
  });
});
