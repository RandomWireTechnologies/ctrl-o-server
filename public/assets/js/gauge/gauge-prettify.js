$(function () {

    var opts = {
        lines: 12, // The number of lines to draw
        angle: .0, // The length of each line
        lineWidth: 0.12, // The line thickness
        pointer: {
            length: 0.8, // The radius of the inner circle
            strokeWidth: 0.030, // The rotation offset
            color: '#e0e0e0' // Fill color
        },
        colorStart: '#36a9e1',   // Colors
        colorStop: '#36a9e1',    // just experiment with them
        strokeColor: '#E0E0E0',   // to see which ones work best for you
        generateGradient: true
    };

    selectGaguge1 = new Gauge(document.getElementById("gauge-1")).setOptions(opts);
    selectGaguge1.maxValue = 3000;
    selectGaguge1.set(2190);

    selectGaguge1 = new Gauge(document.getElementById("gauge-2")).setOptions(opts);
    selectGaguge1.maxValue = 3000;
    selectGaguge1.set(2190);

    selectGaguge1 = new Gauge(document.getElementById("gauge-3")).setOptions(opts);
    selectGaguge1.maxValue = 3000;
    selectGaguge1.set(2190);

    selectGaguge1 = new Gauge(document.getElementById("gauge-4")).setOptions(opts);
    selectGaguge1.maxValue = 3000;
    selectGaguge1.set(2190);

    selectGaguge1 = new Gauge(document.getElementById("gauge-5")).setOptions(opts);
    selectGaguge1.maxValue = 3000;
    selectGaguge1.set(2190);

    opts.angle = 0.3;

    selectGaguge2 = new Donut(document.getElementById("donut-1")).setOptions(opts);
    selectGaguge2.maxValue = 3000;
    selectGaguge2.set(1844);

    selectGaguge2 = new Donut(document.getElementById("donut-2")).setOptions(opts);
    selectGaguge2.maxValue = 3000;
    selectGaguge2.set(1844);

    selectGaguge2 = new Donut(document.getElementById("donut-3")).setOptions(opts);
    selectGaguge2.maxValue = 3000;
    selectGaguge2.set(1844);

    selectGaguge2 = new Donut(document.getElementById("donut-4")).setOptions(opts);
    selectGaguge2.maxValue = 3000;
    selectGaguge2.set(1844);

    selectGaguge2 = new Donut(document.getElementById("donut-5")).setOptions(opts);
    selectGaguge2.maxValue = 3000;
    selectGaguge2.set(1844);
});
