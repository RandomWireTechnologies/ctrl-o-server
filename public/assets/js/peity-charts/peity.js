!function (document, window, $) {
    "use strict";
    // Just the defaults.
    $("span.pie").peity("pie")
    $('.donut').peity('donut')
    $(".line").peity("line")
    $(".bar").peity("bar")

    $(".bar-colours-1").peity("bar", {
        fill: ["red", "green", "blue"]
    })
    $(".bar-colours-2").peity("bar", {
        fill: function (value) {
            return value > 0 ? "green" : "red"
        }
    })
    $(".bar-colours-3").peity("bar", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(255, " + g + ", 0)"
        }
    })
    $(".pie-colours-1").peity("pie", {
        fill: ["cyan", "magenta", "yellow", "black"]
    })

    //*/-----------info color----------//*/
    $(".pie-info").peity("pie", {
        fill: ["#006064", "#9dcee6"],
        innerRadius: 0,
        radius: 15
    })
    $(".pie-info2").peity("pie", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(0, " + g + ", 100)"
        },
        innerRadius: 0,
        radius: 15
    })
    $(".donut-info").peity("donut", {
        fill: ["#006064", "#9dcee6"],
        innerRadius: 10,
        radius: 15
    })
    $(".donut-info2").peity("donut", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(0, " + g + ", 100)"
        }
    })
    $(".line-info").peity("line", {
        fill: ["#9dcee6"],
        stroke: ["#006064"]
    })
    $(".bar-info").peity("bar", {
        fill: ["#006064"]
    })
    //*/-----------Success color----------//*/
    $(".pie-success").peity("pie", {
        fill: ["#5cb85c", "#9bf19b"],
        innerRadius: 0,
        radius: 15
    })
    $(".pie-success2").peity("pie", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(92, " + g + ", 92)"
        },
        innerRadius: 0,
        radius: 15
    })
    $(".donut-success").peity("donut", {
        fill: ["#5cb85c", "#9bf19b"],
        innerRadius: 10,
        radius: 15
    })
    $(".donut-success2").peity("donut", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(92, " + g + ", 92)"
        },
        innerRadius: 10,
        radius: 15
    })
    $(".line-success").peity("line", {
        fill: ["#9bf19b"],
        stroke: ["#5cb85c"]
    })
    $(".bar-success").peity("bar", {
        fill: ["#5cb85c"]
    })
    //*/-----------Warning color----------//*/
    $(".pie-warning").peity("pie", {
        fill: ["#ffa726", "#f9d9ab"],
        innerRadius: 0,
        radius: 15
    })
    $(".pie-warning2").peity("pie", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(255, " + g + ", 38)"
        },
        innerRadius: 0,
        radius: 15
    })
    $(".donut-warning").peity("donut", {
        fill: ["#ffa726", "#f9d9ab"],
        innerRadius: 10,
        radius: 15
    })
    $(".donut-warning2").peity("donut", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(255, " + g + ", 38)"
        },
        innerRadius: 10,
        radius: 15
    })
    $(".line-warning").peity("line", {
        fill: ["#f9d9ab"],
        stroke: ["#ffa726"]
    })
    $(".bar-warning").peity("bar", {
        fill: ["#ffa726"]
    })
    //*/-----------Danger color----------//*/
    $(".pie-danger").peity("pie", {
        fill: ["#d9534f", "#ffa8a6"],
        innerRadius: 0,
        radius: 15
    })
    $(".pie-danger2").peity("pie", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(217, " + g + ", 79)"
        },
        innerRadius: 0,
        radius: 15
    })
    $(".donut-danger").peity("donut", {
        fill: ["#d9534f", "#ffa8a6"],
        innerRadius: 10,
        radius: 15
    })
    $(".donut-danger2").peity("donut", {
        fill: function (_, i, all) {
            var g = parseInt((i / all.length) * 255)
            return "rgb(217, " + g + ", 79)"
        },
        innerRadius: 10,
        radius: 15
    })
    $(".line-danger").peity("line", {
        fill: ["#ffa8a6"],
        stroke: ["#d9534f"]
    })
    $(".bar-danger").peity("bar", {
        fill: ["#d9534f"]
    })



    // Using data attributes
    $(".data-attributes span").peity("donut")

    // Simple evented example.
    $("select").change(function () {
        var text = $(this).val() + "/" + 5

        $(this)
                .siblings("span.graph")
                .text(text)
                .change()

        $("#notice").text("Chart updated: " + text)
    }).change()

    $("span.graph").peity("pie")

    // Updating charts.
    var updatingChart = $(".updating-chart").peity("line", {width: 64})

    setInterval(function () {
        var random = Math.round(Math.random() * 10)
        var values = updatingChart.text().split(",")
        values.shift()
        values.push(random)

        updatingChart
                .text(values.join(","))
                .change()
    }, 1000)

    var updatingChart2 = $(".updating-chart2").peity("line", {width: 64})

    setInterval(function () {
        var random = Math.round(Math.random() * 10)
        var values = updatingChart2.text().split(",")
        values.shift()
        values.push(random)

        updatingChart2
                .text(values.join(","))
                .change()
    }, 1000)

    var updatingChart3 = $(".updating-chart3").peity("line", {width: 64})

    setInterval(function () {
        var random = Math.round(Math.random() * 10)
        var values = updatingChart3.text().split(",")
        values.shift()
        values.push(random)

        updatingChart3
                .text(values.join(","))
                .change()
    }, 1000)

    var updatingChart4 = $(".updating-chart4").peity("line", {width: 64})

    setInterval(function () {
        var random = Math.round(Math.random() * 10)
        var values = updatingChart4.text().split(",")
        values.shift()
        values.push(random)

        updatingChart4
                .text(values.join(","))
                .change()
    }, 1000)
}(document, window, jQuery);