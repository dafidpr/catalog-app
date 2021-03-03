    getDataChart();
      function getDataChart()
      {
          $.ajax({
              type: "get",
              url: base_url + "dashboard/getDataChart",
              dataType: "json",
              success: function (response) {
                var total = [];
                var date = []
                $.each(response, function(key, value){
                    total.push(value.sub_total);
                    date.push(value.created_at);
                })
                chartTransactions(total, date);
              }
          });
      }
    function chartTransactions(total, date)
    {
        var options = {
            series: [{
            name: 'TOTAL',
            data: total
          }],
            chart: {
            type: 'area',
            stacked: false,
            height: 350,
            zoom: {
              type: 'x',
              enabled: true,
              autoScaleYaxis: true
            },
            toolbar: {
              autoSelected: 'zoom'
            }
          },
          dataLabels: {
            enabled: false
          },
          markers: {
            size: 4,
          },
          fill: {
            type: 'gradient',
            gradient: {
              shadeIntensity: 1,
              inverseColors: false,
              opacityFrom: 0.5,
              opacityTo: 0,
              stops: [0, 90, 100]
            },
          },
          yaxis: {
            labels: {
                formatter: function (val) {
                    return 'Rp.' + new Intl.NumberFormat('in-IN', { maximumSignificantDigits: 3 }).format(val);
                }
              },
            title: {
              text: 'Total'
            },
            
          },
          xaxis: {
            categories: date,

          },
          tooltip: {
            shared: false,
            y: {
              formatter: function (val) {
                return 'Rp.' + new Intl.NumberFormat('in-IN', { maximumSignificantDigits: 3 }).format(val);
              }
            }
          }
          };
  
          var chart = new ApexCharts(document.querySelector("#transactionChart"), options);
          chart.render();
    }
        