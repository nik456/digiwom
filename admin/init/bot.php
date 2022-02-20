
<!--begin::Base Scripts -->
<script src="../assets/js/vendors.bundle.js" type="text/javascript"></script>
<script src="../assets/js/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->

<!--begin::Page Snippets -->

<!--end::Page Snippets -->
    <script>
        $(document).ready(
            () => {
                $('#clicks')
                    .plot(
                        [[{"balance":0,"cpm":0,"date":"2020-05-13","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-12","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-11","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-10","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-09","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-08","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-07","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-06","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0}].map((item) => { return [ moment(item.date).diff(moment(0), "days"), item.clicks]; })],
                        {
                            colors: ["#d12610", "#37b7f3", "#52e136"],
                            grid: {
                                borderColor: "#eee",
                                borderWidth: 1,
                                clickable: !0,
                                hoverable: !0,
                                tickColor: "#eee",
                            },
                            series: {
                                lines: {
                                    show: !0,
                                    lineWidth: 2,
                                    fill: !0,
                                    fillColor: {
                                        colors: [{
                                            opacity: .05
                                        }, {
                                            opacity: .01
                                        }]
                                    }
                                },
                                points: {
                                    show: !0,
                                    radius: 3,
                                    lineWidth: 1
                                },
                                shadowSize: 2
                            },
                            xaxis: {
                                tickFormatter: function (a, b) {
                                    return moment(0).add(a + 1, 'days').format('YYYY-MM-DD');
                                },
                                ticks: 11,
                                tickDecimals: 0,
                                tickColor: "#eee"
                            },
                            yaxis: {
                                ticks: 11,
                                tickDecimals: 0,
                                tickColor: "#eee"
                            }
                        }
                    );
            }
        );
    </script>
    <script>
        $(document).ready(
            () => {
                $('#spendings')
                    .plot(
                        [[{"balance":0,"cpm":0,"date":"2020-05-13","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-12","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-11","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-10","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-09","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-08","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-07","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":"2020-05-06","imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0}].map((item) => { return [ moment(item.date).diff(moment(0), "days"), item.balance]; })],
                        {
                            colors: ["#d12610", "#37b7f3", "#52e136"],
                            grid: {
                                borderColor: "#eee",
                                borderWidth: 1,
                                clickable: !0,
                                hoverable: !0,
                                tickColor: "#eee",
                            },
                            series: {
                                lines: {
                                    show: !0,
                                    lineWidth: 2,
                                    fill: !0,
                                    fillColor: {
                                        colors: [{
                                            opacity: .05
                                        }, {
                                            opacity: .01
                                        }]
                                    }
                                },
                                points: {
                                    show: !0,
                                    radius: 3,
                                    lineWidth: 1
                                },
                                shadowSize: 2
                            },
                            xaxis: {
                                tickFormatter: function (a, b) {
                                    return moment(0).add(a + 1, 'days').format('YYYY-MM-DD');
                                },
                                ticks: 11,
                                tickDecimals: 0,
                                tickColor: "#eee"
                            },
                            yaxis: {
                                ticks: 11,
                                tickDecimals: 0,
                                tickColor: "#eee"
                            }
                        }
                    );
            }
        );
    </script>

    <script>
        $(document).ready(
            () => {
                let t = {
                    labels: [{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":1},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":2},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":3},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":4},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":5},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":6},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":7},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":8},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":9},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":10},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":11},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":12},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":13},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":14},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":15},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":16},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":17},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":18},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":19},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":20},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":21},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":22},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":23}].map((item) => { return item.hour; }),
                    datasets: [{
                        backgroundColor: "teal",
                        data: [{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":0},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":1},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":2},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":3},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":4},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":5},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":6},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":7},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":8},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":9},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":10},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":11},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":12},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":13},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":14},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":15},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":16},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":17},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":18},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":19},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":20},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":21},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":22},{"balance":0,"cpm":0,"date":null,"imps":0,"dimps":0,"clicks":0,"ctr":0,"hour":23}].map((item) => { return item.clicks; }),
                    }]
                };

                new Chart($('#clicks-by-hour'),{
                    type: "bar",
                    data: t,
                    options: {
                        title: {
                            display: !1
                        },
                        tooltips: {
                            intersect: !1,
                            mode: "nearest",
                            xPadding: 10,
                            yPadding: 10,
                            caretPadding: 10
                        },
                        legend: {
                            display: !1
                        },
                        responsive: !0,
                        maintainAspectRatio: !1,
                        barRadius: 4,
                        scales: {
                            xAxes: [{
                                display: !1,
                                gridLines: !1,
                                stacked: !0
                            }],
                            yAxes: [{
                                display: !1,
                                stacked: !0,
                                gridLines: !1
                            }]
                        },
                        layout: {
                            padding: {
                                left: 0,
                                right: 0,
                                top: 0,
                                bottom: 0
                            }
                        }
                    }
                });
            }
        );
    </script>
    <script>
        $(document).ready(
            () => {
                new Chartist.Pie(
                    "#spending-by-campaign-piechart",
                    {
                        labels: app.__vue__.dataSpendingByCampaignLabelList,
                        series: app.__vue__.dataSpendingByCampaignValueList.map(
                            (item, index) => {
                                return {
                                    className: 'custom',
                                    meta: {
                                        color: app.__vue__.colorList[index]
                                    },
                                    value: item,
                                };
                            }
                        ),
                    },
                    {
                        donut: !0,
                        donutWidth: 17,
                        showLabel: !1
                    }
                )
                    .on("draw", function(e) {
                        if ("slice" === e.type) {
                            var t = e.element._node.getTotalLength();
                            e.element.attr({
                                "stroke-dasharray": t + "px " + t + "px"
                            });
                            var a = {
                                "stroke-dashoffset": {
                                    id: "anim" + e.index,
                                    dur: 1e3,
                                    from: -t + "px",
                                    to: "0px",
                                    easing: Chartist.Svg.Easing.easeOutQuint,
                                    fill: "freeze",
                                    stroke: e.meta.color
                                }
                            };
                            0 !== e.index && (a["stroke-dashoffset"].begin = "anim" + (e.index - 1) + ".end"),
                                e.element.attr({
                                    "stroke-dashoffset": -t + "px",
                                    stroke: e.meta.color
                                }),
                                e.element.animate(a, !1)
                        }
                    }
                );
            }
        );
    </script>
    <script>
        {
            // These methods can be done with URLSearchParams, but it wont support IOS Safari 10.2 users (0.53% of global usage)(2018-03-28)(https://caniuse.com/#search=URLSearchParams). It is better to support them since they are likely to be rich.
            let getGetParameter = function(name, url = window.location.href) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, "\\$&");
                var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, " "));
            };

            // These methods can be done with URLSearchParams, but it wont support IOS Safari 10.2 users (0.53% of global usage)(2018-03-28)(https://caniuse.com/#search=URLSearchParams). It is better to support them since they are likely to be rich.
            let removeGetParameter = function(key, sourceURL = window.location.href) {
                var rtn = sourceURL.split("?")[0],
                    param,
                    params_arr = [],
                    queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
                if (queryString !== "") {
                    params_arr = queryString.split("&");
                    for (var i = params_arr.length - 1; i >= 0; i -= 1) {
                        param = params_arr[i].split("=")[0];
                        if (param === key) {
                            params_arr.splice(i, 1);
                        }
                    }
                    rtn = (params_arr.length > 0)
                        ?
                        rtn + "?" + params_arr.join("&")
                        :
                        rtn
                    ;
                }
                return rtn;
            };

            let toastrMessage = getGetParameter('toastrMessage');
            if (toastrMessage !== null) {
                toastr.info(toastrMessage);
                window.history.replaceState({}, null, removeGetParameter('toastrMessage'));
            }
        }
    </script>
    <script>
        window.VueData = {
            dataSpendingByCampaignList: [],
        };
    </script>

<script>
  if (!app.__vue__) {
    window.app = new Vue({
      el: '#app',
    });
  }

  function widgetUserBalanceUpdate(balance) {
      let c = balance > 0 ? 'm--font-success' : 'm--font-danger';
      let balanceText = Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(balance);
      $('#widget-user-balance')
          .text(balanceText)
          .removeClass('m--font-danger')
          .removeClass('m--font-success')
          .addClass(c);
  }

  $(document).ready(function() {
    $('.selectpicker').selectpicker();

    $('#m_aside_left_minimize_toggle').on('click', () => {
      $(window).trigger('resize');
    });

      widgetUserBalanceUpdate(0);
  });


</script>


<!-- end::Body -->

</body></html>