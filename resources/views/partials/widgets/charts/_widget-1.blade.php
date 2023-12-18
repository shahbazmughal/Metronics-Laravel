<script>
	am4core.ready(function() {
		am4core.useTheme(am4themes_animated);
		var chart = am4core.create("livechartdiv", am4charts.XYChart);
		chart.hiddenState.properties.opacity = 0;
		chart.padding(0, 0, 0, 0);
		chart.zoomOutButton.disabled = true;
	
		var data = [];
		var visits = 10;
		var i = 0;
	
		for (i = 0; i <= 60; i++) {
			data.push({ date: new Date().setSeconds(i), value:0 });
		}
	
		chart.data = data;
	
		var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
		dateAxis.renderer.grid.template.location = 0;
		dateAxis.renderer.minGridDistance = 30;
		dateAxis.dateFormats.setKey("second", "ss");
		dateAxis.periodChangeDateFormats.setKey("second", "[bold]h:mm a");
		dateAxis.periodChangeDateFormats.setKey("minute", "[bold]h:mm a");
		dateAxis.periodChangeDateFormats.setKey("hour", "[bold]h:mm a");
		dateAxis.renderer.inside = true;
		dateAxis.renderer.axisFills.template.disabled = true;
		dateAxis.renderer.ticks.template.disabled = true;
	
		var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.tooltip.disabled = true;
		valueAxis.interpolationDuration = 500;
		valueAxis.rangeChangeDuration = 500;
		valueAxis.renderer.inside = true;
		valueAxis.renderer.minLabelPosition = 0.05;
		valueAxis.renderer.maxLabelPosition = 0.95;
		valueAxis.renderer.axisFills.template.disabled = true;
		valueAxis.renderer.ticks.template.disabled = true;
	
		var series = chart.series.push(new am4charts.LineSeries());
		series.dataFields.dateX = "date";
		series.dataFields.valueY = "value";
		series.interpolationDuration = 500;
		series.defaultState.transitionDuration = 0;
		series.tensionX = 0.8;
	
		chart.events.on("datavalidated", function () {
			dateAxis.zoom({ start: 1 / 15, end: 1.2 }, false, true);
		});
	
		dateAxis.interpolationDuration = 500;
		dateAxis.rangeChangeDuration = 500;
	
		function refreshChart() {
			var data = [];
			var visits = 10;
			var i = 0;
			for (i = 0; i <= 10; i++) {
				data.push({ date: new Date().setSeconds(i), value: 0 });
			}
			chart.data = data;
			chart.validateData();
		}
	
		var interval;
	
		function startInterval() {
			interval = setInterval(function() {
				visits =
					visits + Math.round((Math.random() < 1 ? 15 : -1) * Math.random() * 30);
				var lastdataItem = series.dataItems.getIndex(series && series.dataItems.length - 1);
				chart.addData(
					{ date: new Date(lastdataItem.dateX.getTime() + 5000), value: visits },
					1
				);
			}, 5000);
		}
	
		$("body").on("change" , "#live_events" , function () {
			localStorage.setItem("liveChart" , "on");
			if($("#live_events").is(":not(:checked)")) {
				localStorage.setItem("liveChart" , "off");
				if (interval) { 
					clearInterval(interval);
				}
			}  else { 
				refreshChart();
				startInterval();
			}
		})
	
		startInterval();
	
		series.fillOpacity = 1;
		var gradient = new am4core.LinearGradient();
		gradient.addColor(chart.colors.getIndex(0), 0.2);
		gradient.addColor(chart.colors.getIndex(0), 0);
		series.fill = gradient;
	
		dateAxis.renderer.labels.template.adapter.add("fillOpacity", function (fillOpacity, target) {
			var dataItem = target.dataItem;
			return dataItem.position;
		})
	
		dateAxis.events.on("validated", function () {
			am4core.iter.each(dateAxis.renderer.labels.iterator(), function (label) {
				label.fillOpacity = label.fillOpacity;
			})
		})
	
		dateAxis.renderer.labels.template.adapter.add("rotation", function (rotation, target) {
			var dataItem = target.dataItem;
			if (dataItem.date && dataItem.date.getTime() == am4core.time.round(new Date(dataItem.date.getTime()), "minute").getTime()) {
				target.verticalCenter = "middle";
				target.horizontalCenter = "left";
				return -90;
			}
			else {
				target.verticalCenter = "bottom";
				target.horizontalCenter = "middle";
				return 0;
			}
		})
	
		var bullet = series.createChild(am4charts.CircleBullet);
		bullet.circle.radius = 5;
		bullet.fillOpacity = 1;
		bullet.fill = chart.colors.getIndex(0);
		bullet.isMeasured = false;
	
		series.events.on("validated", function() {
			bullet.moveTo(series.dataItems.last.point);
			bullet.validatePosition();
		});
	
	});
</script>

<div class="card">
	<div class="card-header">
	  <h3 class="card-title align-items-start flex-column">
		<span class="card-label fw-bold text-dark"
		  >Live Sending</span
		>
	  </h3>
	  <div class="card-toolbar">
		<div
		  class="form-check form-check-solid col-form-label form-switch fv-row"
		>
		  <input
			class="form-check-input w-45px h-30px"
			type="checkbox" checked="" name="live_events" id="live_events"
		  />
		  <label
			class="form-check-label"
		  ></label>
		</div>
	  </div>
	</div>
	<div class="card-body">
		<div id="livechartdiv"></div>
	</div>
</div>