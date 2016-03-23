var platform = new H.service.Platform({
      'app_id': '2FWJlnoNbzvv8zmK8pcq',
      'app_code': 'Nx3bvbs2_HtVp3XdIhGrGg'
});

var defaultLayers = platform.createDefaultLayers();

document.addEventListener("DOMContentLoaded", function(){

  var map = new H.Map(document.getElementById('mapContainer'),
        defaultLayers.normal.map,
        {
          zoom: 16,
          center: {  lng: -122.39956493498761, lat: 37.79204772678918  },
        });
  var mapEvents = new H.mapevents.MapEvents(map);
  var behavior = new H.mapevents.Behavior(mapEvents);
  var ui = new H.ui.UI.createDefault(map, defaultLayers);

  var zoomRect = new H.ui.ZoomRectangle();
  zoomRect.setAlignment("right-middle");
  ui.addControl('zoomRect', zoomRect);

  window.addEventListener('resize', function() {
    map.getViewPort().resize();
  });


  map.addEventListener('contextmenu', onContextMenuRequested);
  function onContextMenuRequested(e) {
    e.items.push(new H.util.ContextItem({
      label: 'Hello Holberton School!',
    }));
    var geocoder = platform.getGeocodingService();
    var rgcParams = {
        prox: map.screenToGeo(e.viewportX, e.viewportY).lat + ', ' + map.screenToGeo(e.viewportX, e.viewportY).lng,
        mode: 'retrieveAddresses',
        maxResults: 1
    };
    function onRGCResult (result, contextMenuEvent) {

        var addressLabel = result.Response.View[0].Result[0].Location.Address.Label;
        contextMenuEvent.items.pop();
        contextMenuEvent.items.push(new H.util.ContextItem({
          label: addressLabel,
        }));
        contextMenuEvent.currentTarget.dispatchEvent(contextMenuEvent);
        contextMenuEvent.stopPropagation();
    };
    geocoder.reverseGeocode(rgcParams, function(result) {
      onRGCResult(result, e);
    }, function(error) {
      console.log(error);
    });
  }
});