


var options = {
    series: [{
    name: "",
    data: [7000],
  }],
  colors: ['#2BC153'],
    chart: {
      toolbar: {
        show: true,
        tools: {
          download: false
        }},
    type: 'bar',
    height: 90
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: [''
    ],
    labels: {
        show: false
      },
  }
  };

  var chart = new ApexCharts(document.querySelector(".display_budget_bar"), options);
  chart.render();