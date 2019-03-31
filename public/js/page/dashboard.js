jQuery(document).ready(function() {
    new Morris.Bar( {
        element:"morris_chart_3", data:anggaranRealisasi,
        xkey:"y", ykeys:["a", "b"], labels:["Anggaran", "Realisasi"]
    });

    if("undefined"!=typeof AmCharts&&0!==$("#dashboard_amchart_3").size()) {
        AmCharts.makeChart("dashboard_amchart_3", {
            type:"serial", addClassNames:!0, theme:"light", path:"../assets/global/plugins/amcharts/ammap/images/", autoMargins:!1, marginLeft:30, marginRight:8, marginTop:10, marginBottom:26, balloon: {
                adjustBorderColor: !1, horizontalPadding: 10, verticalPadding: 8, color: "#ffffff"
            }
            , dataProvider:[ {
                year: 2013, data: 3000, proyeksi: 2800
            }
            , {
                year: 2014, data: 5200, proyeksi: 3100
            }
            , {
                year: 2015, data: 4000, proyeksi: 2000
            }
            , {
                year: 2016, data: 3400, proyeksi: 3800
            }
            , {
                year: 2017, data: 3500, proyeksi: 4000
            }
            , {
                year: 2018, data: 6000, proyeksi: 5500
            }, {
                year: 2019, data: totalTahun2019, proyeksi: 6000, dashLengthColumn: 5, alpha: .2, additional: "(projection)"
            }
            ], valueAxes:[ {
                axisAlpha: 0, position: "left"
            }
            ], startDuration:1, graphs:[ {
                alphaField: "alpha", balloonText: "<span style='font-size:12px;'>[[title]] di tahun [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>", fillAlphas: 1, title: "Data PMKS", type: "column", valueField: "data", dashLengthField: "dashLengthColumn"
            }
            , {
                id: "graph2", balloonText: "<span style='font-size:12px;'>[[title]] di tahun [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>", bullet: "round", lineThickness: 3, bulletSize: 7, bulletBorderAlpha: 1, bulletColor: "#FFFFFF", useLineColorForBulletBorder: !0, bulletBorderThickness: 3, fillAlphas: 0, lineAlpha: 1, title: "Perkiraan", valueField: "proyeksi"
            }
            ], categoryField:"year", categoryAxis: {
                gridPosition: "start", axisAlpha: 0, tickLength: 0
            }
            , "export": {
                enabled: !0
            }
        }
        )
    }

    var e=AmCharts.makeChart("chart_4", {
        type:"serial", theme:"light", handDrawn:!0, handDrawScatter:3, legend: {
            useGraphSettings: !0, markerSize: 12, valueWidth: 0, verticalGap: 0
        }
        , dataProvider:dataKategori,
        valueAxes:[ {
            minorGridAlpha: .08, minorGridEnabled: !0, position: "top", axisAlpha: 0
        }
        ], startDuration:1, graphs:[ {
            balloonText: "<span style='font-size:13px;'>[[title]] [[category]]:<b>[[value]]</b></span>", title: "Data", type: "column", fillAlphas: .8, valueField: "data"
        }
        , {
            balloonText: "<span style='font-size:13px;'>[[title]] [[category]]:<b>[[value]]</b></span>", bullet: "round", bulletBorderAlpha: 1, bulletColor: "#FFFFFF", useLineColorForBulletBorder: !0, fillAlphas: 0, lineThickness: 2, lineAlpha: 1, bulletSize: 7, title: "Perkiraan", valueField: "proyeksi"
        }
    ], rotate:!0, categoryField:"kategori", categoryAxis: {
            gridPosition: "start"
        }
    }
    );
    $("#chart_4").closest(".portlet").find(".fullscreen").click(function() {
        e.invalidateSize()
    }
    )
});
