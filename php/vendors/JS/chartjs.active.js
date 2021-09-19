(function ($) {
    "use strict";
    
    if( $('#example-chartjs-lineArea').length ) {
        var ECLA = document.getElementById('example-chartjs-lineArea').getContext('2d');
        var ECLAconfig = {
            type: 'line',
            data: {
                labels: ['0', '5', '10','15', '20','25', '30','35', '40','45', '50'],
                datasets: [{
                    label: 'Total View',
                    data: [20,35,30,60,68,35,60,80,65,60,85],
                    backgroundColor: 'rgba(66, 139, 250, 0.3)',
                    borderColor: '#428bfa',
                    pointBorderColor: '#428bfa',
                }]
            },
            options: {
                maintainAspectRatio: false,
				legend: {
                    labels: {
                        fontColor: 'whitesmoke',
                    }
                },
                scales: {
                    xAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#aaaaaa',
                        },
                    }],
                    yAxes: [{
                        display: true,
                        gridLines: {
                            color: 'rgba(136,136,136,0.1)',
                            lineWidth: 1,
                            drawBorder: false,
                            zeroLineWidth: 1,
                            zeroLineColor: 'rgba(136,136,136,0.1)',
                        },
                        ticks: {
                            fontColor: '#aaaaaa',
                        },
                    }]
                }
            }
        };
        var ECLAchartjs = new Chart(ECLA, ECLAconfig);
    } 
})(jQuery);