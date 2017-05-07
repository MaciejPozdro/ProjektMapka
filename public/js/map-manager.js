var minPrice = 400;
var maxPrice = 800;

var oldMinPrice = 400;
var oldMaxPrice = 800;


var setMinRange = function(obj) {

    minPrice = parseInt($(obj).val());

};

var setMaxRange = function(obj) {

    maxPrice = parseInt($(obj).val());
};

window.setInterval(function(){
    if(oldMinPrice != minPrice) {
        oldMinPrice = minPrice;
        getAnnouncements();
    }

    if(oldMaxPrice != maxPrice) {
        oldMaxPrice = maxPrice;
        getAnnouncements();
    }
},2000);

var getAnnouncements = function() {
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11
    });
    var geocoder = new google.maps.Geocoder();


    $.get('/places/' + minPrice + '/' + maxPrice,function (result) {

        if(result.hasOwnProperty('address')) {
            result['address'].forEach(function (value, key) {
                geocodeAddress(geocoder, map, value, map, result['more'][key]);

            });
        } else {
            geocodeAddress(geocoder, map, 'Kraków, rynek 1', map, false);
        }
    });
};

var geocodeAddress = function(geocoder, resultsMap, localization, map, more) {
    geocoder.geocode({'address': localization}, function (results, status) {

        if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);

            if(more) {
                var image = 'http://maps.google.com/mapfiles/kml/pal2/icon50.png'
                var marker = new google.maps.Marker({
                    map: resultsMap,
                    title: 'Kliknij po wiecej szczegółów',
                    icon: image,
                    animation: google.maps.Animation.DROP,
                    position: results[0].geometry.location
                });

                var grid = '<div class="ui grid">';

                grid += '<div class="five wide column">';
                grid += '<img width="100px" height="100px" src="/foto/' + more.photo + '">';
                grid += '</div>';

                grid += '<div class="eleven wide column ">';
                grid += '<div style="width:200px;">';
                grid += '<b>' + 'Adres: ' + '</b>' + more.address + '<br>';
                grid += '<b>' + 'Opis: ' + '</b>' + '<br>' + more.description + '';
                grid += '<b>' + '<a href="">' + '<br>' + '<br>' + '<a href="/offer/'+ more.id +'">' + 'Czytaj wiecej...' + '</a>';
                grid += '</div>';
                grid += '</div>';

                var infoHtml = '<div style="overflow:hidden;">' + grid + '</div>';

                var infoWindow = new google.maps.InfoWindow({
                    content: infoHtml

                });

                marker.addListener('click', function () {
                    infoWindow.open(map, marker);
                });

            } else {

            }
        }
    });

}