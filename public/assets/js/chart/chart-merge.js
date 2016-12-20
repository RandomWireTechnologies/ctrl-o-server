! function(document, window, $) {
    "use strict";
    var ctx_bar = document.getElementById("myChart_bar");
    var ctx1_line = document.getElementById("myChart_line");
    var ctx2_radar = document.getElementById("myChart_radar");
    var ctx3_pie = document.getElementById("myChart_pie");
    var ctx4_doughnut = document.getElementById("myChart_doughnut");
    var ctx5_polar = document.getElementById("myChart5_polar");
    var myChart_bar = new Chart(ctx_bar, {
        type: 'bar',
        data: {
            labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
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
                            beginAtZero: true
                        }
                    }]
            },
            responsive: true
        }
    });

    var myChart_line = new Chart(ctx1_line, {
        type: 'line',
        data: {
            datasets: [{
                    label: 'Scatter Dataset',
                    data: [{
                            x: -10,
                            y: 0
                        }, {
                            x: 0,
                            y: 10
                        }, {
                            x: 10,
                            y: 5
                        }]
                }]
        },
        options: {
            scales: {
                xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }]
            },
            responsive: true
        }
    });

    var myChart_radar = new Chart(ctx2_radar, {
        type: 'radar',
        data: {
            labels: ["Php", "Asp", "Android", "Design", "Mysql", "IOS", "Running"],
            datasets: [
                {
                    label: "first number dataset",
                    backgroundColor: "rgba(255, 206, 86, 0.2)",
                    borderColor: "rgba(255, 206, 86, 1)",
                    pointBackgroundColor: "rgba(179,181,198,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "second number dataset",
                    backgroundColor: "rgba(54, 169, 225, 0.2)",
                    borderColor: "rgba(54, 169, 225, 1)",
                    pointBackgroundColor: "rgba(255,99,132,1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        },
        options: {
            scales: {
                xAxes: [{
                        type: 'linear',
                        position: 'bottom'
                    }],
                responsive: true
            }
        }
    });

    var myChart_pie = new Chart(ctx3_pie, {
        type: 'pie',
        data: {
            labels: [
                "Blue",
                "Yellow",
                "Orange"
            ],
            datasets: [
                {
                    data: [200, 150, 100],
                    backgroundColor: [
                        "rgba(54,169,225,0.7)",
                        "rgba(255,206,86,0.7)",
                        "rgba(255,159,64,0.7)"
                    ],
                    hoverBackgroundColor: [
                        "rgba(54,169,225,0.8)",
                        "rgba(255,206,86,0.8)",
                        "rgba(255,159,64,0.8)"
                    ],
                    borderColor: [
                        "rgba(54,169,225,0.7)",
                        "rgba(255,206,86,0.7)",
                        "rgba(255,159,64,0.7)"
                    ]
                }]
        },
        options: {
            responsive: true
        }
    });

    var myChart_doughnut = new Chart(ctx4_doughnut, {
        type: 'doughnut',
        data: {
            labels: [
                "Blue",
                "Yellow",
                "Orange"
            ],
            datasets: [
                {
                    data: [200, 150, 100],
                    backgroundColor: [
                        "rgba(54,169,225,0.7)",
                        "rgba(255,206,86,0.7)",
                        "rgba(255,159,64,0.7)"
                    ],
                    hoverBackgroundColor: [
                        "rgba(54,169,225,0.8)",
                        "rgba(255,206,86,0.8)",
                        "rgba(255,159,64,0.8)"
                    ],
                    borderColor: [
                        "rgba(54,169,225,0.7)",
                        "rgba(255,206,86,0.7)",
                        "rgba(255,159,64,0.7)"
                    ]
                }]
        },
        options: {
            responsive: true
        }

    });

    var myChart5_polar = new Chart(ctx5_polar, {
        type: 'polarArea',
        data: {
            datasets: [{
                    data: [
                        11,
                        16,
                        7,
                        3,
                        14
                    ],
                    backgroundColor: [
                        "#FF6384",
                        "#4BC0C0",
                        "#FFCE56",
                        "#E7E9ED",
                        "#36a9e1"
                    ],
                    label: 'My dataset' // for legend
                }],
            labels: [
                "Red",
                "Green",
                "Yellow",
                "Grey",
                "Blue"
            ]
        },
        options: {
            responsive: true
        }
    });
}(document, window, jQuery);



