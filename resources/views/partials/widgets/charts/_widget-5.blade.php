<script>
  function loadmap() {
    anychart.onDocumentReady(function () {
      var url = "https://cdn.anychart.com/samples/maps-general-features/world-choropleth-map/data.json";

      $("#maps").html("");

      anychart.data.loadJsonFile(url, function (data) {
        var map = anychart.map();
        map.geoData("anychart.maps.world");
        map.interactivity().selectionMode("none");
        map.padding(0);

        var dataSet = anychart.data.set(data);
        var densityData = dataSet.mapAs({ value: "density" });
        var series = map.choropleth(densityData);

        series.labels(false);

        series
          .hovered()
          .fill("#1caf9a")
          .stroke(anychart.color.darken("#1caf9a"));

        series
          .selected()
          .fill("#c2185b")
          .stroke(anychart.color.darken("#c2185b"));

        series
          .tooltip()
          .useHtml(true)
          .format(function () {
            return (
              '<span style="color: #d9d9d9">Value</span>: ' +
              parseFloat(this.value).toLocaleString()
            );
          });

        var scale = anychart.scales.ordinalColor([
          { less: 10 },
          { from: 10, to: 30 },
          { from: 30, to: 50 },
          { from: 50, to: 100 },
          { from: 100, to: 200 },
          { from: 200, to: 300 },
          { from: 300, to: 500 },
          { from: 500, to: 1000 },
          { greater: 1000 },
        ]);
        scale.colors([
          "#81d4fa",
          "#4fc3f7",
          "#29b6f6",
          "#039be5",
          "#0288d1",
          "#0277bd",
          "#01579b",
          "#014377",
          "#000000",
        ]);

        var colorRange = map.colorRange();
        colorRange.enabled(true).padding([0, 0, 20, 0]);
        colorRange
          .ticks()
          .enabled(true)
          .stroke("3 #ffffff")
          .position("center")
          .length(7);
        colorRange.colorLineSize(5);
        colorRange.marker().size(7);
        colorRange
          .labels()
          .fontSize(11)
          .padding(3, 0, 0, 0)
          .format(function () {
            var range = this.colorRange;
            var name;
            if (isFinite(range.start + range.end)) {
              name = range.start + " - " + range.end;
            } else if (isFinite(range.start)) {
              name = "More than " + range.start;
            } else {
              name = "Less than " + range.end;
            }
            return name;
          });

        series.colorScale(scale);

        // create zoom controls
        var zoomController = anychart.ui.zoom();
        zoomController.render(map);

        // set container id for the chart
        map.container("maps");
        // initiate chart drawing
        map.draw();
      });
    });
  }
  loadmap();
</script>

<div class="p-5" id="maps"></div>
