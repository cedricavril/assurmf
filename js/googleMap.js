var map4554543 = null;
function loadMap4554543() {

    var position = new google.maps.LatLng(parseFloat(44.88063752685904), parseFloat(-0.5478870784179479));
    var zoom = parseInt(12);
    var maptype = 0;
    var maptypeId;
    switch (maptype) {
        case 0:
        maptypeId = google.maps.MapTypeId.ROADMAP;
        break;
        case 1:
        maptypeId = google.maps.MapTypeId.SATELLITE;
        break;
        case 2:
        maptypeId = google.maps.MapTypeId.HYBRID;
        break;
        case 3:
        maptypeId = google.maps.MapTypeId.TERRAIN;
        break;
        default :
        maptypeId = google.maps.MapTypeId.ROADMAP;
    }

    var controls = ["0","1","0","0"];

    var scaleControl = false;
    if (controls[2] == 1) {
        scaleControl = true;
    }

    var mapTypeControl = false;
    if (controls[1] == 1) {
        mapTypeControl = true;
    }

    var overviewMapControl = false;
    if (controls[3] == 1) {
        overviewMapControl = true;
    }

    var zoomControl = true;
    var navigationControl = true;
    var navigationControlOptionsStyle;
    var panControl = true;
    var zoomControlStyle = google.maps.ZoomControlStyle.DEFAULT;
    if (controls[0] == 3) {
        navigationControlOptionsStyle = google.maps.NavigationControlStyle.ZOOM_PAN;
        zoomControlStyle = google.maps.ZoomControlStyle.LARGE;
    }
    else if (controls[0] == 2) {
        navigationControlOptionsStyle = google.maps.NavigationControlStyle.ZOOM_PAN;
        zoomControlStyle = google.maps.ZoomControlStyle.SMALL;
    }
    else if (controls[0] == 1) {
        navigationControlOptionsStyle = google.maps.NavigationControlStyle.SMALL;
        zoomControlStyle = google.maps.ZoomControlStyle.SMALL;
        panControl = false;
    }
    else {
        navigationControlOptionsStyle = google.maps.NavigationControlStyle.SMALL;
        navigationControl = false;
        zoomControl = false;
        panControl = false;
    }

    var myOptions = {
        zoom: zoom,
        center: position,
        mapTypeId: maptypeId,
        scaleControl: scaleControl,
        panControl: panControl,
        zoomControl: zoomControl,
        zoomControlOptions: {
            style: zoomControlStyle
        },
        mapTypeControl: mapTypeControl,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID, google.maps.MapTypeId.TERRAIN]
        },
        overviewMapControl: overviewMapControl,
        overviewMapControlOptions: {opened: true},
        streetViewControl: false,
        navigationControl: navigationControl,
        navigationControlOptions: {
            style: navigationControlOptionsStyle
        }
    };
  map4554543 = new google.maps.Map(document.getElementById("map_canvas_4554543"), myOptions);
 
    loadMarkers4554543(["<div class=\"gmapInfoWindowGutter2 gmapInfoWindowGutter2viewMode\"><div><center<strong>ASSUR & MF</strong></center><h2 class=\"subheading\">31 Rue du G\u00e9n\u00e9ral de Gaulle, 33310 Lormont, France<\/h2><div><p><\/p><\/div><\/div><\/div>"], ["marker1","ASSUR & MF 31 Rue du G\u00e9n\u00e9ral de Gaulle, 33310 Lormont, France","",[44.8777182,-0.5331242],"","ASSUR & MF 31 Rue du G\u00e9n\u00e9ral de Gaulle, 33310 Lormont, France"]);
}

infos4554543 = [];
function loadMarkers4554543(infowindow_data, markers) {

    for (var i = 0; i < markers.length; i += 6) {
        var position = new google.maps.LatLng(markers[i + 3][0], markers[i + 3][1]);
        var marker = new google.maps.Marker({
            position: position,
            content: infowindow_data[i / 6],
            icon: 'images/mapLogo.svg',
            map: map4554543               });

        google.maps.event.addListener(marker, 'click', function() {
            closeInfos4554543();
            var info = new google.maps.InfoWindow({
                content: this.content,
                maxWidth: 300
            });
            info.open(map4554543,this);
            infos4554543[0]=info;
        });

        markers[i] = marker.fk;
    }
}

function closeInfos4554543(){
    if (infos4554543.length > 0){
        infos4554543[0].set("marker",null);
        infos4554543[0].close();
        infos4554543.length = 0;
    }
}



jQuery(document).ready(function() {
    loadMap4554543();
});
