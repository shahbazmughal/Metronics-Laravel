var KTChartsWidget36 = (function () {
var e = { self: null, rendered: !1 };
return {
    init: function () {
    !(function (e) {
        var a = document.getElementById("kt_charts_widget_36");
        if (a) {
        var t = parseInt(KTUtil.css(a, "height")),
            l = KTUtil.getCssVariableValue("--kt-gray-500"),
            r = KTUtil.getCssVariableValue("--kt-border-dashed-color"),
            o = KTUtil.getCssVariableValue("--kt-primary"),
            i =
            (KTUtil.getCssVariableValue("--kt-primary"),
            KTUtil.getCssVariableValue("--kt-success")),
            n = KTUtil.getCssVariableValue("--kt-info"),
            s = KTUtil.getCssVariableValue("--kt-dark"),
            m = KTUtil.getCssVariableValue("--kt-warning"),
            d = KTUtil.getCssVariableValue("--kt-danger"),
            g = {
            series: [
                {
                name: "Sent",
                data: [
                    90, 110, 110, 95, 95, 110, 110, 95, 95, 115, 115, 100, 100,
                    115, 115, 95, 95, 115, 115,
                ],
                },
                {
                name: "Delivered",
                data: [
                    80, 100, 100, 85, 85, 100, 100, 85, 85, 105, 105, 90, 90,
                    105, 105, 85, 85, 105, 105,
                ],
                },
                {
                name: "Opened",
                data: [
                    70, 90, 90, 75, 75, 90, 90, 75, 75, 95, 95, 80, 80, 95, 95,
                    75, 75, 95, 95,
                ],
                },
                {
                name: "Clicked",
                data: [
                    60, 80, 80, 65, 65, 80, 80, 65, 65, 85, 85, 70, 70, 85, 85,
                    65, 65, 85, 85,
                ],
                },
                {
                name: "Spammed",
                data: [
                    50, 70, 70, 55, 55, 70, 70, 55, 55, 75, 75, 60, 60, 75, 75,
                    55, 55, 75, 75,
                ],
                },
                {
                name: "Failed",
                data: [
                    40, 60, 60, 45, 45, 60, 60, 45, 45, 65, 65, 50, 50, 65, 65,
                    45, 45, 65, 65,
                ],
                },
            ],
            chart: {
                fontFamily: "inherit",
                type: "area",
                height: t,
                toolbar: { show: !1 },
            },
            plotOptions: {},
            legend: { show: !1 },
            dataLabels: { enabled: !1 },
            fill: {
                type: "gradient",
                gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.4,
                opacityTo: 0.2,
                stops: [15, 120, 100],
                },
            },
            stroke: {
                curve: "smooth",
                show: !0,
                width: 3,
                colors: [o, i, n, s, m, d],
            },
            xaxis: {
                categories: [
                "",
                "8 AM",
                "81 AM",
                "9 AM",
                "10 AM",
                "11 AM",
                "12 PM",
                "13 PM",
                "14 PM",
                "15 PM",
                "16 PM",
                "17 PM",
                "18 PM",
                "18:20 PM",
                "18:20 PM",
                "19 PM",
                "20 PM",
                "21 PM",
                "",
                ],
                axisBorder: { show: !1 },
                axisTicks: { show: !1 },
                tickAmount: 6,
                labels: {
                rotate: 0,
                rotateAlways: !0,
                style: { colors: l, fontSize: "12px" },
                },
                crosshairs: {
                position: "front",
                stroke: { color: [o, i, n, s, m, d], width: 1, dashArray: 3 },
                },
                tooltip: {
                enabled: !0,
                formatter: void 0,
                offsetY: 0,
                style: { fontSize: "12px" },
                },
            },
            yaxis: {
                max: 120,
                min: 30,
                tickAmount: 6,
                labels: { style: { colors: l, fontSize: "12px" } },
            },
            states: {
                normal: { filter: { type: "none", value: 0 } },
                hover: { filter: { type: "none", value: 0 } },
                active: {
                allowMultipleDataPointsSelection: !1,
                filter: { type: "none", value: 0 },
                },
            },
            tooltip: { style: { fontSize: "12px" } },
            colors: [o, i, n, s, m, d],
            grid: {
                borderColor: r,
                strokeDashArray: 4,
                yaxis: { lines: { show: !0 } },
            },
            markers: { strokeColor: [o, i, n, s, m, d], strokeWidth: 3 },
            };
        (e.self = new ApexCharts(a, g)),
            setTimeout(function () {
            e.self.render(), (e.rendered = !0);
            }, 200);
        }
    })(e);
    },
};
})();
"undefined" != typeof module && (module.exports = KTChartsWidget36),
KTUtil.onDOMContentLoaded(function () {
    KTChartsWidget36.init();
});