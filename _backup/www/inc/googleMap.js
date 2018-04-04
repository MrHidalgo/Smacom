var map;

var mapCenter = new google.maps.LatLng(48.61628, 32.62746);
var brooklyn = new google.maps.LatLng(50.21628, 32.62746);

var MY_MAPTYPE_ID = 'custom_style';

function initialize() {
    var featureOpts = [
        {
            featureType: 'water',
            stylers: [
                {color: '#000'}
            ]
        }
    ];

    var mapOptions = {
        zoom: 6,
        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,
        draggable: true,
        center: mapCenter,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
        },
        mapTypeId: MY_MAPTYPE_ID
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    if (lang == "ru") {

        var infowindow = new InfoBox({
            content: '<div class="markerTitle">ООО «Пирятинский деликатес»</div><div class="markerAdress">Украина, 37050, Полтавская обл.,<br />Пирятинский район,<br />с. Деймановка, ул. Наглого Марка, 46.<br />Тел./факс: (053-58) 3-33-17, 3-33-09;<br />E-mail: office@smacom.ua</div>',
            pixelOffset: new google.maps.Size(5, -65),
            zIndex: null,
            boxStyle: {
                background: "url('img/mapMarkerInfo.png') no-repeat",
                color: '#fff',
                padding: '35px 75px 80px 120px',
                width: "290px"
            },
            closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"

        });

    } else if (lang == "ua") {
        var infowindow = new InfoBox({
            content: '<div class="markerTitle">ТОВ «Пирятинський делікатес»</div><div class="markerAdress">37050, Україна, Полтавська обл.,<br />Пирятинський район, <br />с. Дейманівка вул. Наглого Марка, 46.<br />Tel./Fax: (053-58) 3-33-17, 3-33-09;<br />E-mail: office@smacom.ua</div>',
            pixelOffset: new google.maps.Size(5, -65),
            zIndex: null,
            boxStyle: {
                background: "url('img/mapMarkerInfo.png') no-repeat",
                color: '#fff',
                padding: '35px 75px 80px 120px',
                width: "290px"
            },
            closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"

        });
    } else {
        var infowindow = new InfoBox({
            content: '<div class="markerTitle">LLC "Pyryatyn delicacy"</div><div class="markerAdress">46 Nahloho Marka str., <br />Deymanovka, Pyryatyn district,<br />Poltava region, 37050, Ukraine.<br />Tel./Fax: (053-58) 3-33-17, 3-33-09;<br />E-mail: office@smacom.ua</div>',
            pixelOffset: new google.maps.Size(5, -65),
            zIndex: null,
            boxStyle: {
                background: "url('img/mapMarkerInfo.png') no-repeat",
                color: '#fff',
                padding: '35px 75px 80px 120px',
                width: "290px"
            },
            closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"

        });
    }

    var marker = new google.maps.Marker({
        position: brooklyn,
        map: map,
        title: 'ООО «Пирятинский деликатес»',
        icon: 'img/icon_marker.png'
    });


    var styledMapOptions = {
        name: 'Custom Style'
    };


    infowindow.open(map, marker);


    var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

    map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
}

google.maps.event.addDomListener(window, 'load', initialize);
