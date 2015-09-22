/**
 * Plugin's jquery functions and included jQuery libraries
 */

 
/* Fix display of map in tabs */
function fixDisplayInTabs(e, t) {
    function n() {
        if (i != null) {
            clearTimeout(i)
        }
        if (e.is(":hidden")) {
            i = setTimeout(n, s)
        } else {
            i = setTimeout(function() {
                r()
            }, s)
        }
    }

    function r() {
        if (i != null) {
            clearTimeout(i)
        }
        data = e.data("gmap");
        if (data) {
            var n = data.gmap;
            var r = data.markers;
            google.maps.event.trigger(n, "resize");
            e.gMapResp("fixAfterResize");
            if (t) {
                for (var s = 0; s < r.length; s++) {
                    google.maps.event.trigger(r[s], "close");
                    google.maps.event.trigger(r[s], "click")
                }
            }
        }
    }
    var i = null;
    var s = 25;
    if (e.is(":hidden")) {
        n()
    } else {
        i = setTimeout(function() {
            n()
        }, s * 3)
    }
}
/* Open a certain marker (where openMarker(1, 5) mean: open the 5th marker from the 1st map displayed) */
function openMarker(e, t) {
    jQuery(".responsive-map").each(function(n) {
        if (jQuery(this).data("gmap") && e == n + 1) {
            var r = jQuery(this).data("gmap").markers;
            google.maps.event.trigger(jQuery(this).gMapResp("getMarker", t), "click")
        }
    })
}

/* Create address search control */
function createSearchControl(map) {
        var control = document.createElement('div');
        var input = document.createElement('input');
        control.appendChild(input);
        control.setAttribute('id', 'locationDiv');
        input.setAttribute('id', 'locationInput');
        //input.setAttribute('placeholder', searchText);
        map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(control);

        var ac = new google.maps.places.Autocomplete(input, {
            types: ['geocode']
        });
        google.maps.event.addListener(ac, 'place_changed', function() {
            var place = ac.getPlace();
            //console.debug(place);
            map.setCenter(place.geometry.location);
            map.setZoom(19);
        });

        google.maps.event.addListener(map, 'bounds_changed', function() {
            input.blur();
            input.value = '';
        });

        input.onkeyup = submitGeocode(input);
    }

/* Geocodes the address enetered in the input field */
function submitGeocode(input) {
    return function(e) {
        var keyCode;

        if (window.event) {
            keyCode = window.event.keyCode;
        } else {
            keyCode = e.which;
        }

        if (keyCode == 13) {
            geocoder.geocode({
                address: input.value
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.fitBounds(results[0].geometry.viewport);
                } 
            });
        }
    }
}
 
 /** Get the pre-defined map style (id is a number between 1-30 inclusive, representing the id of the map style) **/
 function getStyleString(id) {
    var mapstyle;
    switch (id) {
    case '1':
        mapstyle = [{"stylers":[{"featureType":"all"}]}];
        break;
    case '2':
        mapstyle = [{"stylers":[{"featureType":"all"},{"saturation":-100},{"gamma":0.50},{"lightness":30}]}];
        break;
    case '3':
        mapstyle = [{"stylers":[{"invert_lightness":true},{"visibility":"on"}]}];
        break;
    case '4':
        mapstyle = [{"stylers":[{"invert_lightness":true},{"hue":"#0000b0"},{"saturation":-30}]}];
        break;
    case '5':
        mapstyle = [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];
        break;
    case '6':
        mapstyle = [{"stylers":[{"lightness":10},{"gamma":1.2},{"saturation":-20},{"visibility":"on"},{"weight":0.1},{"hue":"#00ccff"}]}];
        break;
    case '7':
        mapstyle = [{"stylers":[{"saturation":-20},{"visibility":"on"},{"hue":"#00ccff"},{"invert_lightness":true},{"lightness":5}]}];
        break;
    case '8':
        mapstyle = [{"stylers":[{"saturation":-20},{"visibility":"on"},{"lightness":5},{"hue":"#ff004c"},{"gamma":1.45}]}];
        break;
    case '9':
        mapstyle = [{"featureType":"water","stylers":[{"color":"#021019"}]},{"featureType":"landscape","stylers":[{"color":"#08304b"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},{"featureType":"transit","stylers":[{"color":"#146474"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}];
        break;
    case '10':
        mapstyle = [{"stylers":[{"visibility":"on"},{"saturation":-30},{"hue":"#ccff00"},{"lightness":-20},{"gamma":1},{"weight":0.1},{"invert_lightness":true}]}];
        break;
    case '11':
        mapstyle = [{"stylers":[{"hue":"#00ccff"},{"saturation":5},{"lightness":-20}]}];
        break;
    case '12':
        mapstyle = [{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"hue":149},{"saturation":-78},{"lightness":0}]},{"featureType":"road.highway","stylers":[{"hue":-31},{"saturation":-40},{"lightness":2.8}]},{"featureType":"poi","elementType":"label","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"hue":163},{"saturation":-26},{"lightness":-1.1}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"hue":3},{"saturation":-24.24},{"lightness":-38.57}]}];
        break;
    case '13':
        mapstyle = [{"stylers":[{"gamma":1.58},{"saturation":30},{"weight":0.1}]}];
        break;
    case '14':
        mapstyle = [{"stylers":[{"invert_lightness":true},{"weight":0.1},{"hue":"#00ffa2"},{"visibility":"on"},{"saturation":-120},{"lightness":10},{"gamma":1.2}]}];
        break;
    case '15':
        mapstyle = [{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#00ccff"},{"weight":0.1},{"saturation":80}]},{"featureType":"road.local","elementType": "geometry","stylers":[{"visibility":"on"},{"lightness":30}]},{"featureType":"transit","stylers":[{"hue":"#0077ff"},{"lightness":100},{"color":"#141480"},{"visibility":"simplified"},{ "saturation":-30},{"gamma":0.96},{"invert_lightness":true}]},{"featureType":"administrative.neighborhood","stylers":[{"invert_lightness":true},{"visibility":"on"}]},{"featureType": "road.highway.controlled_access","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","stylers":[{"weight":0.1}]},{"featureType":"road.local","stylers":[{ "visibility":"off"}]},{"featureType":"administrative","stylers":[{"invert_lightness":true},{"hue":"#00ff66"},{"saturation":30},{"lightness":-20},{"gamma":1.91}]},{"stylers":[{ "weight":0.1}]}];
        break;
    case '16':
        mapstyle = [{"featureType":"road","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"visibility":"off"}]},{"featureType":"administrative","stylers":[{ "weight":0.9}]}];
        break;
    case '17':
        mapstyle = [{"stylers":[{"hue":"#ffd500"},{"lightness":-30}]}];
        break;
    case '18':
        mapstyle = [{"featureType":"road","stylers":[{"hue":"#e6ff00"}]},{"featureType":"road","stylers":[{"visibility":"on" },{"weight":0.1},{"lightness":10},{"gamma":0.96}]},{ "featureType":"administrative","elementType":"labels.icon","stylers":[{"visibility":"simplified"},{"weight":0.1}]},{"stylers":[{"hue":"#0019ff"},{"lightness":10},{"gamma":0.96}]},{ "stylers":[{"gamma":0.96},{"weight":0.1}]},{"featureType":"administrative","stylers":[{"color":"#328080"}]}];
        break;
    case '19':
        mapstyle = [{"featureType":"road","stylers":[{"lightness":-10},{"weight":0.1},{"hue":"#008000"}]},{"stylers":[{"saturation":30},{"lightness":-10}]}];
        break;
    case '20':
        mapstyle = [{"stylers":[{"visibility":"on"},{"weight":0.9},{"hue":"#005eff"},{"lightness":-10},{"gamma":1.2}]}];
        break;
    case '21':
        mapstyle = [{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#aee2e0"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#abce83"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#769E72"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#7B8758"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#EBF4A4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"visibility":"simplified"},{"color":"#8dab68"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5B5B3F"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ABCE83"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#A4C67D"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#9BBF72"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#EBF4A4"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#87ae79"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#7f2200"},{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"visibility":"on"},{"weight":4.1}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#495421"}]},{"featureType":"administrative.neighborhood","elementType":"labels","stylers":[{"visibility":"off"}]}];
        break;
    case '22':
        mapstyle = [{"featureType":"administrative","stylers":[{"visibility":"on"}]},{"featureType":"poi","stylers":[{"visibility":"on"}]},{"featureType":"road","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"visibility":"on"}]},{"featureType":"transit","stylers":[{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-77}]},{"featureType":"road"}];
        break;
    case '23':
        mapstyle = [{"featureType":"water","elementType":"all","stylers":[{"hue":"#87bcba"},{"saturation":-37},{"lightness":-17},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#4f6b46"},{"saturation":-23},{"lightness":-61},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":-55},{"lightness":13},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#ffa200"},{"saturation":100},{"lightness":-22},{"visibility":"on"}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":-55},{"lightness":-31},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#f69d94"},{"saturation":84},{"lightness":9},{"visibility":"on"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":45},{"lightness":36},{"visibility":"on"}]},{"featureType":"administrative.country","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":45},{"lightness":36},{"visibility":"on"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":45},{"lightness":36},{"visibility":"on"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":35},{"lightness":-19},{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"hue":"#d38bc8"},{"saturation":-6},{"lightness":-17},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#b2ba70"},{"saturation":-19},{"lightness":-25},{"visibility":"on"}]}];
        break;
    case '24':
        mapstyle = [{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"on"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"on"}]}];
        break;
    case '25':
        mapstyle = [{"stylers":[{"saturation":-100},{"gamma":1}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"poi.place_of_worship","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"saturation":50},{"gamma":0},{"hue":"#50a5d1"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#333333"}]},{"featureType":"road.local","elementType":"labels.text","stylers":[{"weight":0.5},{"color":"#333333"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"gamma":1},{"saturation":50}]}];
        break;
    case '26':
        mapstyle = [{"featureType":"water","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"landscape","stylers":[{"color":"#f2f2f2"}]},{"featureType":"road","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]}];
        break;
    case '27':
        mapstyle = [{"featureType":"water","elementType":"all","stylers":[{"hue":"#1CB2BD"},{"saturation":53},{"lightness":-44},{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"hue":"#1CB2BD"},{"saturation":40}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#BBDC00"},{"saturation":80},{"lightness":-20},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"}]}];
        break;
    case '28':
        mapstyle = [{"featureType":"administrative","stylers":[{"visibility":"on"}]},{"featureType":"poi","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"water","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","stylers":[{"color":"#84afa3"},{"lightness":52}]},{"stylers":[{"saturation":-17},{"gamma":0.36}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#3f518c"}]}];
        break;
    case '29':
        mapstyle = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#193341"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#2c5a71"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#29768a"},{"lightness":-37}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#406d80"}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#3e606f"},{"weight":2},{"gamma":0.84}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"weight":0.6},{"color":"#1a3541"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#2c5a71"}]}];
        break;
    case '30':
        mapstyle = [{"featureType":"landscape","stylers":[{"hue":"#00dd00"}]},{"featureType":"road","stylers":[{"hue":"#dd0000"}]},{"featureType":"water","stylers":[{"hue":"#000040"}]},{"featureType":"poi.park","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","stylers":[{"hue":"#ffff00"}]},{"featureType":"road.local","stylers":[{"visibility":"off"}]}];
        break;
    case '31':
        mapstyle = [{"featureType":"landscape","stylers":[{"hue":"#FFE100"},{"saturation":34.48275862068968},{"lightness":-1.490196078431353},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FF009A"},{"saturation":-2.970297029703005},{"lightness":-17.815686274509815},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FFE100"},{"saturation":8.600000000000009},{"lightness":-4.400000000000006},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#00C3FF"},{"saturation":29.31034482758622},{"lightness":-38.980392156862735},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#0078FF"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#00FF19"},{"saturation":-30.526315789473685},{"lightness":-22.509803921568633},{"gamma":1}]}];
        break;
    case '32':
        mapstyle = [{"featureType":"landscape","stylers":[{"hue":"#FFA800"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#53FF00"},{"saturation":-73},{"lightness":40},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FBFF00"},{"saturation":0},{"lightness":0},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#00FFFD"},{"saturation":0},{"lightness":30},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00BFFF"},{"saturation":6},{"lightness":8},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#679714"},{"saturation":33.4},{"lightness":-25.4},{"gamma":1}]}];
        break;
    case '33':
        mapstyle = [{"featureType":"landscape","stylers":[{"hue":"#FFAD00"},{"saturation":50.2},{"lightness":-34.8},{"gamma":1}]},{"featureType":"road.highway","stylers":[{"hue":"#FFAD00"},{"saturation":-19.8},{"lightness":-1.8},{"gamma":1}]},{"featureType":"road.arterial","stylers":[{"hue":"#FFAD00"},{"saturation":72.4},{"lightness":-32.6},{"gamma":1}]},{"featureType":"road.local","stylers":[{"hue":"#FFAD00"},{"saturation":74.4},{"lightness":-18},{"gamma":1}]},{"featureType":"water","stylers":[{"hue":"#00FFA6"},{"saturation":-63.2},{"lightness":38},{"gamma":1}]},{"featureType":"poi","stylers":[{"hue":"#FFC300"},{"saturation":54.2},{"lightness":-14.4},{"gamma":1}]}];
        break;
    case '34':
        mapstyle = [{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill"},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"color":"#7dcdcd"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]}];
        break;
    case '35':
        mapstyle = [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];
        break;
    case '36':
        mapstyle = [{"featureType":"water","stylers":[{"color":"#19a0d8"}]},{"featureType":"administrative","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"},{"weight":6}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#e85113"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-40}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#efe9e4"},{"lightness":-20}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"road.highway","elementType":"labels.icon"},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","stylers":[{"lightness":20},{"color":"#efe9e4"}]},{"featureType":"landscape.man_made","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"lightness":-100}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"hue":"#11ff00"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"lightness":100}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"hue":"#4cff00"},{"saturation":58}]},{"featureType":"poi","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#f0e4d3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#efe9e4"},{"lightness":-10}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"simplified"}]}];
        break;
    case '37':
        mapstyle = [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];
        break;
    case '38':
        mapstyle = [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#b5cbe4"}]},{"featureType":"landscape","stylers":[{"color":"#efefef"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#83a5b0"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#bdcdd3"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#e3eed3"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}];
        break;
    case '39':
        mapstyle = [{"stylers":[{"hue":"#dd0d0d"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}];
        break;
    case '40':
        mapstyle = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ffdfa6"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#b52127"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#c5531b"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#74001b"},{"lightness":-10}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#da3c3c"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#74001b"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#da3c3c"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#990c19"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#74001b"},{"lightness":-8}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#6a0d10"},{"visibility":"on"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#ffdfa6"},{"weight":0.4}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]}];
        break;
    case 'default':
        mapstyle = [{"stylers":[{"featureType":"all"}]}];
        break;
    default:
    }
    return mapstyle;
}
 
/** Get the type of the map: roadmap, satellite, terrain or hybrid **/
function getMapType(string) {
    var mapType;
    switch (string.toUpperCase()) {
    case 'ROADMAP':
        mapType = google.maps.MapTypeId.ROADMAP;
        break;
    case 'SATELLITE':
        mapType = google.maps.MapTypeId.SATELLITE;
        break;
    case 'TERRAIN':
        mapType = google.maps.MapTypeId.TERRAIN;
        break;
    case 'HYBRID':
        mapType = google.maps.MapTypeId.HYBRID;
        break;
    default:
        mapType = google.maps.MapTypeId.ROADMAP;
    }
    return mapType;
}

/** Select the text inside the given element **/
function selectText(element) {
    var doc = document
        , text = doc.getElementById(element)
        , range, selection
    ;    
    if (doc.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
    } else if (window.getSelection) {
        selection = window.getSelection();        
        range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
    }
}

/** Show the color picker **/
function showHideColorPicker() {
    if (jQuery("#style").val() == 0) {
        // Custom color selected
        jQuery(".colorPicker-picker").show();
        jQuery(".colorPicker-picker").css('position', 'absolute');
        jQuery(".colorPicker-picker").css('display', 'inline');
        jQuery("#colorinfo").hide();
    } else {
        // Custom style selected
        jQuery(".colorPicker-picker").hide();
        jQuery("#colorinfo").show();
    }
}

/** Update the map live preview according to settings **/
function updateMap(pluginurl) {
    google_adtest = "on";
    var address = jQuery("#address").val();
    var description = jQuery("#pdescription").val();
    if (jQuery("#pdescription").val().trim().length == 0) {
        jQuery("#pdescription").val(jQuery("#address").val())
    }
    if (jQuery("#center").val().trim().length == 0) {
        var lat = null;
        var lng = null
    } else {
        var center = jQuery("#center").val().split(",");
        var lat = center[0];
        var lng = center[1]
    }

    // The map style 
    var styles='';
    if (jQuery("#style").val() == 0) {
        // Custom color
        styles = [{ "stylers": [{"hue": jQuery("#newcolor").val() } ] } ];
        var pstyle = jQuery("#newcolor").val();
    } else {
        // Custom style
        styles = getStyleString(jQuery("#style").val());
        var pstyle = jQuery("#style").val();
    }
    var ppoi = Boolean(jQuery("select#poi").val());
    // If points of interest (poi) is set to "no" add this option to the style string
    // And this is the JSON for no points of interest: ', { "featureType": "poi", "stylers": [ { "visibility": "off" } ] }'
    var noPOI = ', {"featureType":"poi","stylers":[{"visibility": "off"}]}';
    if (!ppoi) {
        stylesString = JSON.stringify(styles)
        stylesNoPOI = stylesString.substring(0, stylesString.length - 1) + noPOI + ']';
        styles = jQuery.parseJSON(stylesNoPOI);
    }

    var zoom = parseInt(jQuery("select#zoom").val());
    var mapdiv = jQuery("#responsive_map");
    var maptype = getMapType(jQuery("select#type").val());
    var panControl = Boolean(jQuery("select#panControl").val());
    var zoomControl = Boolean(jQuery("select#zoomControl").val());
    var pdraggable = Boolean(jQuery("select#draggable").val());
    var prefresh = Boolean(jQuery("select#refresh").val());
    var pscrollwheel = Boolean(jQuery("select#scrollwheel").val());
    var psearchbox = Boolean(jQuery("select#searchbox").val());
    var pclustering = Boolean(jQuery("select#clustering").val());
    var plogging = Boolean(jQuery("select#logging").val());
    
    var mapTypeControl = Boolean(jQuery("select#typeControl").val());
    var scaleControl = Boolean(jQuery("select#scaleControl").val());
    var streetViewControl = Boolean(jQuery("select#streetControl").val());
    var width = jQuery("#width").val() + jQuery("select#widthm").val();
    var height = jQuery("#height").val() + jQuery("select#heightm").val();
    var pancontrol = (panControl == "") ? "no" : "yes";
    var zoomcontrol = (zoomControl == "") ? "no" : "yes";
    var draggable = (pdraggable == "") ? "no" : "yes";
    var refresh = (prefresh == "") ? "no" : "yes";
    var scrollwheel = (pscrollwheel == "") ? "no" : "yes";
    var searchbox = (psearchbox == "") ? "no" : "yes";
    var clustering = (pclustering == "") ? "no" : "yes";
    var logging = (plogging == "") ? "no" : "yes";
    var poi = (ppoi == "") ? "no" : "yes";
    var typecontrol = (mapTypeControl == "") ? "no" : "yes";
    var scalecontrol = (scaleControl == "") ? "no" : "yes";
    var streetcontrol = (streetViewControl == "") ? "no" : "yes";
    var popup = "no";
    var adbg = jQuery("#adbg").val();
    var pubid = jQuery("#pubid").val();
    
    // The array with addresses
    var addresses = address.split("|");
    var descriptions = description.split("|");
    
    // The array with custom icons
    if (jQuery("#iconurl").val().trim().length != 0) {
        var icons = jQuery("#iconurl").val().split("|");
    }
    
    var markers = '[';
    var iconsGenerated = '';
    for (var i = 0; i < addresses.length; i++) {
        var addr = addresses[i].replace(new RegExp("'", "g"), "\'");
        var descr = descriptions[i];
        var showPopup = Boolean(jQuery("select#popup").val());
        popup = (jQuery("select#popup").val() == "") ? "no" : "yes"
        if (descr == null || descr.trim().length == 0) {
            descr = addr
        }
        descr = descr.replace(new RegExp("\"", "g"), "\'").replace(new RegExp("\n", "g"), " ");
        // Replace in the html code the {br} expression with < br >  tag
        descr =  descr.replace(new RegExp("{br}", "g"), "<br>"); 
        var directionstext = jQuery("#directions").val();
        
        // The custom icon
        if (jQuery("input[name=color]:checked").val() != "custom") {
            var icon = jQuery("input[name=color]:checked").val();
            var iconUrl = pluginurl + "/responsive-maps-plugin/includes/icons/" + icon + ".png";
            iconsGenerated += icon;
        } else { 
            icon = jQuery("#iconurl").val();
            if (icons) {
                if(icons[i]) {
                    iconUrl = icons[i];
                } else {
                    iconUrl = icons[0];
                }
            }
            iconsGenerated += iconUrl.trim();
        }
        
        // Add icon separator between icons if not the last icon
        if (i != addresses.length - 1) {
            iconsGenerated += ' | ';
        }
        var html = descr + '<br><a target=\'_blank\' href=\'http://maps.google.com/?daddr=' + encodeURIComponent(addr).replace(new RegExp("'", "g"), "&#39;") + '\'>' + directionstext + '</a>';
        
        // If more markers, add the neccessary "," delimiter between markers
        if (i > 0) markers += ",";
        
        // Extract the langitude and longitude; if given, use them, otherwise use the address
        var marker_latitude = null;
        var marker_longitude = null;
        if (addr.trim().length != 0) {
            
            var coordinates = addr.split(",");
            var marker_latitude = coordinates[0];
            var marker_longitude = coordinates[1];
        
            if(marker_latitude.indexOf(".") == -1 ) {
                markers += '{' + '"address": "' + addr + '", "html": "' + html + '", "popup": ' + showPopup + ', "flat": true, "icon": {"image": "' + iconUrl + '"}}';
            } else { 
                var coordinates = addr.split(",");
                var lat = coordinates[0];
                var lng = coordinates[1];
                markers += '{' + '"latitude": "' + marker_latitude + '", "longitude": "'+ marker_longitude + '", "html": "' + html + '", "popup": ' + showPopup + ', "flat": true, "icon": {"image": "' + iconUrl + '"}}';
            } 
        } 
    }
    markers += ']';
    mapdiv.gMapResp({
        maptype: maptype,
        log: plogging,
        zoom: zoom,
        markers: jQuery.parseJSON(markers),
        panControl: panControl,
        zoomControl: zoomControl,
        draggable: pdraggable,
        mapTypeControl: mapTypeControl,
        scaleControl: scaleControl,
        streetViewControl: streetViewControl,
        overviewMapControl: true,
        styles: styles,
        scrollwheel: pscrollwheel,
        latitude: lat,
        longitude: lng,
        onComplete: function () {
            var gmap = mapdiv.data('gmap').gmap;
            if (pclustering) {
            	var markerCluster = new MarkerClusterer(gmap, mapdiv.data('gmap').markers);
            }
            if (pubid.trim() != "") {
                var adUnitDiv = document.createElement('div');
                var adUnitOptions = {
                    format: google.maps.adsense.AdFormat.HALF_BANNER,
                    position: google.maps.ControlPosition.RIGHT_BOTTOM,
                    backgroundColor: adbg,
                    borderColor: '#666666',
                    titleColor: '#333333',
                    textColor: '#666666',
                    urlColor: '#999999',
                    publisherId: pubid,
                    map: gmap,
                    visible: true
                };
                var adUnit = new google.maps.adsense.AdUnit(adUnitDiv, adUnitOptions);
            }
        }
    });
	if (psearchbox) createSearchControl(mapdiv.data('gmap').gmap);
    var parsedDescription = jQuery("#pdescription").val().replace(new RegExp("\"", "g"), "\'").replace(new RegExp("<", "g"), "&lt;").replace(new RegExp(">", "g"), "&gt;");
    jQuery("#shortcode").html('[res_map address="' + address + '" description="' + parsedDescription + '" directionstext="' + directionstext + '" icon="' + iconsGenerated + '" style="' + pstyle + '" pancontrol="' + pancontrol + '" scalecontrol="' + scalecontrol + '" typecontrol="' + typecontrol + '" streetcontrol="' + streetcontrol + '" zoom="' + zoom + '" zoomcontrol="' + zoomcontrol + '" draggable="' + draggable + '" scrollwheel="' + scrollwheel + '" searchbox="' + searchbox + '" clustering="' + clustering + '" logging="' + logging + '" poi="' + poi + '" width="' + width + '" height="' + height + '" maptype="' + maptype + '" popup="' + popup + '" center="' + jQuery("#center").val() + '" refresh="' + refresh + '" publisherid="' + pubid + '" adbg="' + adbg + '"]')
}

/**
 * Really Simple Color Picker in jQuery
 *
 * Licensed under the MIT (MIT-LICENSE.txt) licenses.
 *
 * Copyright (c) 2008-2012
 * Lakshan Perera (www.laktek.com) & Daniel Lacy (daniellacy.com)
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to
 * deal in the Software without restriction, including without limitation the
 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */(function(a){var b,c,d=0,e={control:a('<div class="colorPicker-picker">&nbsp;</div>'),palette:a('<div id="colorPicker_palette" class="colorPicker-palette" />'),swatch:a('<div class="colorPicker-swatch">&nbsp;</div>'),hexLabel:a('<label for="colorPicker_hex">Hex</label>'),hexField:a('<input type="text" id="colorPicker_hex" />')},f="transparent",g;a.fn.colorPicker=function(b){return this.each(function(){var c=a(this),g=a.extend({},a.fn.colorPicker.defaults,b),h=a.fn.colorPicker.toHex(c.val().length>0?c.val():g.pickerDefault),i=e.control.clone(),j=e.palette.clone().attr("id","colorPicker_palette-"+d),k=e.hexLabel.clone(),l=e.hexField.clone(),m=j[0].id,n,o;a.each(g.colors,function(b){n=e.swatch.clone(),g.colors[b]===f?(n.addClass(f).text("X"),a.fn.colorPicker.bindPalette(l,n,f)):(n.css("background-color","#"+this),a.fn.colorPicker.bindPalette(l,n)),n.appendTo(j)}),k.attr("for","colorPicker_hex-"+d),l.attr({id:"colorPicker_hex-"+d,value:h}),l.bind("keydown",function(b){if(b.keyCode===13){var d=a.fn.colorPicker.toHex(a(this).val());a.fn.colorPicker.changeColor(d?d:c.val())}b.keyCode===27&&a.fn.colorPicker.hidePalette()}),l.bind("keyup",function(b){var d=a.fn.colorPicker.toHex(a(b.target).val());a.fn.colorPicker.previewColor(d?d:c.val())}),a('<div class="colorPicker_hexWrap" />').append(k).appendTo(j),j.find(".colorPicker_hexWrap").append(l),g.showHexField===!1&&(l.hide(),k.hide()),a("body").append(j),j.hide(),i.css("background-color",h),i.bind("click",function(){c.is(":not(:disabled)")&&a.fn.colorPicker.togglePalette(a("#"+m),a(this))}),b&&b.onColorChange?i.data("onColorChange",b.onColorChange):i.data("onColorChange",function(){}),(o=c.data("text"))&&i.html(o),c.after(i),c.bind("change",function(){c.next(".colorPicker-picker").css("background-color",a.fn.colorPicker.toHex(a(this).val()))}),c.val(h);if(c[0].tagName.toLowerCase()==="input")try{c.attr("type","hidden")}catch(p){c.css("visibility","hidden").css("position","absolute")}else c.hide();d++})},a.extend(!0,a.fn.colorPicker,{toHex:function(a){if(a.match(/[0-9A-F]{6}|[0-9A-F]{3}$/i))return a.charAt(0)==="#"?a:"#"+a;if(!a.match(/^rgb\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*\)$/))return!1;var b=[parseInt(RegExp.$1,10),parseInt(RegExp.$2,10),parseInt(RegExp.$3,10)],c=function(a){if(a.length<2)for(var b=0,c=2-a.length;b<c;b++)a="0"+a;return a};if(b.length===3){var d=c(b[0].toString(16)),e=c(b[1].toString(16)),f=c(b[2].toString(16));return"#"+d+e+f}},checkMouse:function(d,e){var f=c,g=a(d.target).parents("#"+f.attr("id")).length;if(d.target===a(f)[0]||d.target===b[0]||g>0)return;a.fn.colorPicker.hidePalette()},hidePalette:function(){a(document).unbind("mousedown",a.fn.colorPicker.checkMouse),a(".colorPicker-palette").hide()},showPalette:function(c){var d=b.prev("input").val();c.css({top:b.offset().top+b.outerHeight(),left:b.offset().left}),a("#color_value").val(d),c.show(),a(document).bind("mousedown",a.fn.colorPicker.checkMouse)},togglePalette:function(d,e){e&&(b=e),c=d,c.is(":visible")?a.fn.colorPicker.hidePalette():a.fn.colorPicker.showPalette(d)},changeColor:function(c){b.css("background-color",c),b.prev("input").val(c).change(),a.fn.colorPicker.hidePalette(),b.data("onColorChange").call(b,a(b).prev("input").attr("id"),c)},previewColor:function(a){b.css("background-color",a)},bindPalette:function(c,d,e){e=e?e:a.fn.colorPicker.toHex(d.css("background-color")),d.bind({click:function(b){g=e,a.fn.colorPicker.changeColor(e)},mouseover:function(b){g=c.val(),a(this).css("border-color","#598FEF"),c.val(e),a.fn.colorPicker.previewColor(e)},mouseout:function(d){a(this).css("border-color","#000"),c.val(b.css("background-color")),c.val(g),a.fn.colorPicker.previewColor(g)}})}}),a.fn.colorPicker.defaults={pickerDefault:"ffffff",colors:["3399ff","cdb79e","2e0460","ffee28","d5b8f2","236688","8abb3b","ff7f66","2185c5","de117d","00ffaa","186776","ff0000","c0392b","78d9d9","ffac74","81ff92","2bb4a0","ff7878","3366FF","800080","e67e22","FF00FF","FFCC00","FFFF00","00FF00","00FFFF","00CCFF","993366","e74c3c","FF99CC","FFCC99","FFFF99","CCFFFF","99CCFF"],addColors:[],showHexField:!0}})(jQuery);
 
/**
 * @name MarkerClusterer for Google Maps v3
 * @version version 1.0
 * @author Luke Mahe
 * @fileoverview
 * The library creates and manages per-zoom-level clusters for large amounts of
 * markers.
 * <br/>
 * This is a v3 implementation of the
 * <a href="http://gmaps-utility-library-dev.googlecode.com/svn/tags/markerclusterer/"
 * >v2 MarkerClusterer</a>.
 */

/**
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
(function(){var d=null;function e(a){return function(b){this[a]=b}}function h(a){return function(){return this[a]}}var j;
function k(a,b,c){this.extend(k,google.maps.OverlayView);this.c=a;this.a=[];this.f=[];this.ca=[53,56,66,78,90];this.j=[];this.A=!1;c=c||{};this.g=c.gridSize||60;this.l=c.minimumClusterSize||2;this.J=c.maxZoom||d;this.j=c.styles||[];this.X=c.imagePath||this.Q;this.W=c.imageExtension||this.P;this.O=!0;if(c.zoomOnClick!=void 0)this.O=c.zoomOnClick;this.r=!1;if(c.averageCenter!=void 0)this.r=c.averageCenter;l(this);this.setMap(a);this.K=this.c.getZoom();var f=this;google.maps.event.addListener(this.c,
"zoom_changed",function(){var a=f.c.getZoom();if(f.K!=a)f.K=a,f.m()});google.maps.event.addListener(this.c,"idle",function(){f.i()});b&&b.length&&this.C(b,!1)}j=k.prototype;j.Q="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/images/m";j.P="png";j.extend=function(a,b){return function(a){for(var b in a.prototype)this.prototype[b]=a.prototype[b];return this}.apply(a,[b])};j.onAdd=function(){if(!this.A)this.A=!0,n(this)};j.draw=function(){};
function l(a){if(!a.j.length)for(var b=0,c;c=a.ca[b];b++)a.j.push({url:a.X+(b+1)+"."+a.W,height:c,width:c})}j.S=function(){for(var a=this.o(),b=new google.maps.LatLngBounds,c=0,f;f=a[c];c++)b.extend(f.getPosition());this.c.fitBounds(b)};j.z=h("j");j.o=h("a");j.V=function(){return this.a.length};j.ba=e("J");j.I=h("J");j.G=function(a,b){for(var c=0,f=a.length,g=f;g!==0;)g=parseInt(g/10,10),c++;c=Math.min(c,b);return{text:f,index:c}};j.$=e("G");j.H=h("G");
j.C=function(a,b){for(var c=0,f;f=a[c];c++)q(this,f);b||this.i()};function q(a,b){b.s=!1;b.draggable&&google.maps.event.addListener(b,"dragend",function(){b.s=!1;a.L()});a.a.push(b)}j.q=function(a,b){q(this,a);b||this.i()};function r(a,b){var c=-1;if(a.a.indexOf)c=a.a.indexOf(b);else for(var f=0,g;g=a.a[f];f++)if(g==b){c=f;break}if(c==-1)return!1;b.setMap(d);a.a.splice(c,1);return!0}j.Y=function(a,b){var c=r(this,a);return!b&&c?(this.m(),this.i(),!0):!1};
j.Z=function(a,b){for(var c=!1,f=0,g;g=a[f];f++)g=r(this,g),c=c||g;if(!b&&c)return this.m(),this.i(),!0};j.U=function(){return this.f.length};j.getMap=h("c");j.setMap=e("c");j.w=h("g");j.aa=e("g");
j.v=function(a){var b=this.getProjection(),c=new google.maps.LatLng(a.getNorthEast().lat(),a.getNorthEast().lng()),f=new google.maps.LatLng(a.getSouthWest().lat(),a.getSouthWest().lng()),c=b.fromLatLngToDivPixel(c);c.x+=this.g;c.y-=this.g;f=b.fromLatLngToDivPixel(f);f.x-=this.g;f.y+=this.g;c=b.fromDivPixelToLatLng(c);b=b.fromDivPixelToLatLng(f);a.extend(c);a.extend(b);return a};j.R=function(){this.m(!0);this.a=[]};
j.m=function(a){for(var b=0,c;c=this.f[b];b++)c.remove();for(b=0;c=this.a[b];b++)c.s=!1,a&&c.setMap(d);this.f=[]};j.L=function(){var a=this.f.slice();this.f.length=0;this.m();this.i();window.setTimeout(function(){for(var b=0,c;c=a[b];b++)c.remove()},0)};j.i=function(){n(this)};
function n(a){if(a.A)for(var b=a.v(new google.maps.LatLngBounds(a.c.getBounds().getSouthWest(),a.c.getBounds().getNorthEast())),c=0,f;f=a.a[c];c++)if(!f.s&&b.contains(f.getPosition())){for(var g=a,u=4E4,o=d,v=0,m=void 0;m=g.f[v];v++){var i=m.getCenter();if(i){var p=f.getPosition();if(!i||!p)i=0;else var w=(p.lat()-i.lat())*Math.PI/180,x=(p.lng()-i.lng())*Math.PI/180,i=Math.sin(w/2)*Math.sin(w/2)+Math.cos(i.lat()*Math.PI/180)*Math.cos(p.lat()*Math.PI/180)*Math.sin(x/2)*Math.sin(x/2),i=6371*2*Math.atan2(Math.sqrt(i),
Math.sqrt(1-i));i<u&&(u=i,o=m)}}o&&o.F.contains(f.getPosition())?o.q(f):(m=new s(g),m.q(f),g.f.push(m))}}function s(a){this.k=a;this.c=a.getMap();this.g=a.w();this.l=a.l;this.r=a.r;this.d=d;this.a=[];this.F=d;this.n=new t(this,a.z(),a.w())}j=s.prototype;
j.q=function(a){var b;a:if(this.a.indexOf)b=this.a.indexOf(a)!=-1;else{b=0;for(var c;c=this.a[b];b++)if(c==a){b=!0;break a}b=!1}if(b)return!1;if(this.d){if(this.r)c=this.a.length+1,b=(this.d.lat()*(c-1)+a.getPosition().lat())/c,c=(this.d.lng()*(c-1)+a.getPosition().lng())/c,this.d=new google.maps.LatLng(b,c),y(this)}else this.d=a.getPosition(),y(this);a.s=!0;this.a.push(a);b=this.a.length;b<this.l&&a.getMap()!=this.c&&a.setMap(this.c);if(b==this.l)for(c=0;c<b;c++)this.a[c].setMap(d);b>=this.l&&a.setMap(d);
a=this.c.getZoom();if((b=this.k.I())&&a>b)for(a=0;b=this.a[a];a++)b.setMap(this.c);else if(this.a.length<this.l)z(this.n);else{b=this.k.H()(this.a,this.k.z().length);this.n.setCenter(this.d);a=this.n;a.B=b;a.ga=b.text;a.ea=b.index;if(a.b)a.b.innerHTML=b.text;b=Math.max(0,a.B.index-1);b=Math.min(a.j.length-1,b);b=a.j[b];a.da=b.url;a.h=b.height;a.p=b.width;a.M=b.textColor;a.e=b.anchor;a.N=b.textSize;a.D=b.backgroundPosition;this.n.show()}return!0};
j.getBounds=function(){for(var a=new google.maps.LatLngBounds(this.d,this.d),b=this.o(),c=0,f;f=b[c];c++)a.extend(f.getPosition());return a};j.remove=function(){this.n.remove();this.a.length=0;delete this.a};j.T=function(){return this.a.length};j.o=h("a");j.getCenter=h("d");function y(a){a.F=a.k.v(new google.maps.LatLngBounds(a.d,a.d))}j.getMap=h("c");
function t(a,b,c){a.k.extend(t,google.maps.OverlayView);this.j=b;this.fa=c||0;this.u=a;this.d=d;this.c=a.getMap();this.B=this.b=d;this.t=!1;this.setMap(this.c)}j=t.prototype;
j.onAdd=function(){this.b=document.createElement("DIV");if(this.t)this.b.style.cssText=A(this,B(this,this.d)),this.b.innerHTML=this.B.text;this.getPanes().overlayMouseTarget.appendChild(this.b);var a=this;google.maps.event.addDomListener(this.b,"click",function(){var b=a.u.k;google.maps.event.trigger(b,"clusterclick",a.u);b.O&&a.c.fitBounds(a.u.getBounds())})};function B(a,b){var c=a.getProjection().fromLatLngToDivPixel(b);c.x-=parseInt(a.p/2,10);c.y-=parseInt(a.h/2,10);return c}
j.draw=function(){if(this.t){var a=B(this,this.d);this.b.style.top=a.y+"px";this.b.style.left=a.x+"px"}};function z(a){if(a.b)a.b.style.display="none";a.t=!1}j.show=function(){if(this.b)this.b.style.cssText=A(this,B(this,this.d)),this.b.style.display="";this.t=!0};j.remove=function(){this.setMap(d)};j.onRemove=function(){if(this.b&&this.b.parentNode)z(this),this.b.parentNode.removeChild(this.b),this.b=d};j.setCenter=e("d");
function A(a,b){var c=[];c.push("background-image:url("+a.da+");");c.push("background-position:"+(a.D?a.D:"0 0")+";");typeof a.e==="object"?(typeof a.e[0]==="number"&&a.e[0]>0&&a.e[0]<a.h?c.push("height:"+(a.h-a.e[0])+"px; padding-top:"+a.e[0]+"px;"):c.push("height:"+a.h+"px; line-height:"+a.h+"px;"),typeof a.e[1]==="number"&&a.e[1]>0&&a.e[1]<a.p?c.push("width:"+(a.p-a.e[1])+"px; padding-left:"+a.e[1]+"px;"):c.push("width:"+a.p+"px; text-align:center;")):c.push("height:"+a.h+"px; line-height:"+a.h+
"px; width:"+a.p+"px; text-align:center;");c.push("cursor:pointer; top:"+b.y+"px; left:"+b.x+"px; color:"+(a.M?a.M:"black")+"; position:absolute; font-size:"+(a.N?a.N:11)+"px; font-family:Arial,sans-serif; font-weight:bold");return c.join("")}window.MarkerClusterer=k;k.prototype.addMarker=k.prototype.q;k.prototype.addMarkers=k.prototype.C;k.prototype.clearMarkers=k.prototype.R;k.prototype.fitMapToMarkers=k.prototype.S;k.prototype.getCalculator=k.prototype.H;k.prototype.getGridSize=k.prototype.w;
k.prototype.getExtendedBounds=k.prototype.v;k.prototype.getMap=k.prototype.getMap;k.prototype.getMarkers=k.prototype.o;k.prototype.getMaxZoom=k.prototype.I;k.prototype.getStyles=k.prototype.z;k.prototype.getTotalClusters=k.prototype.U;k.prototype.getTotalMarkers=k.prototype.V;k.prototype.redraw=k.prototype.i;k.prototype.removeMarker=k.prototype.Y;k.prototype.removeMarkers=k.prototype.Z;k.prototype.resetViewport=k.prototype.m;k.prototype.repaint=k.prototype.L;k.prototype.setCalculator=k.prototype.$;
k.prototype.setGridSize=k.prototype.aa;k.prototype.setMaxZoom=k.prototype.ba;k.prototype.onAdd=k.prototype.onAdd;k.prototype.draw=k.prototype.draw;s.prototype.getCenter=s.prototype.getCenter;s.prototype.getSize=s.prototype.T;s.prototype.getMarkers=s.prototype.o;t.prototype.onAdd=t.prototype.onAdd;t.prototype.draw=t.prototype.draw;t.prototype.onRemove=t.prototype.onRemove;
})();

/**
 * jQuery gMap v3
 *
 * @url         http://www.smashinglabs.pl/gmap
 * @author      Sebastian Poreba <sebastian.poreba@gmail.com>
 * @fixes         greenline <greenline@yava.ro>
 * @version     3.3.3
 * @date        27.12.2012
 */
(function(e){var t=function(){this.markers=[];this.mainMarker=!1;this.icon="http://www.google.com/mapfiles/marker.png"};t.prototype.dist=function(e){return Math.sqrt(Math.pow(this.markers[0].latitude-e.latitude,2)+Math.pow(this.markers[0].longitude-e.longitude,2))};t.prototype.setIcon=function(e){this.icon=e};t.prototype.addMarker=function(e){this.markers[this.markers.length]=e};t.prototype.getMarker=function(){if(this.mainmarker)return this.mainmarker;var e,t;1<this.markers.length?(e=new n.MarkerImage("http://thydzik.com/thydzikGoogleMap/markerlink.php?text="+this.markers.length+"&color=EF9D3F"),t="cluster of "+this.markers.length+" markers"):(e=new n.MarkerImage(this.icon),t=this.markers[0].title);return this.mainmarker=new n.Marker({position:new n.LatLng(this.markers[0].latitude,this.markers[0].longitude),icon:e,title:t,map:null})};var n=google.maps,r=new n.Geocoder,i=0,s=0,o={},o={init:function(t){var r,i=e.extend({},e.fn.gMapResp.defaults,t);for(r in e.fn.gMapResp.defaults.icon)i.icon[r]||(i.icon[r]=e.fn.gMapResp.defaults.icon[r]);return this.each(function(){var t=e(this),r=o._getMapCenter.apply(t,[i]);"fit"==i.zoom&&(i.zoomFit=!0,i.zoom=o._autoZoom.apply(t,[i]));var s={zoom:i.zoom,center:r,mapTypeControl:i.mapTypeControl,mapTypeControlOptions:{},zoomControl:i.zoomControl,draggable:i.draggable,zoomControlOptions:{},panControl:i.panControl,panControlOptions:{},scaleControl:i.scaleControl,scaleControlOptions:{},streetViewControl:i.streetViewControl,streetViewControlOptions:{},mapTypeId:i.maptype,scrollwheel:i.scrollwheel,maxZoom:i.maxZoom,minZoom:i.minZoom};i.controlsPositions.mapType&&(s.mapTypeControlOptions.position=i.controlsPositions.mapType);i.controlsPositions.zoom&&(s.zoomControlOptions.position=i.controlsPositions.zoom);i.controlsPositions.pan&&(s.panControlOptions.position=i.controlsPositions.pan);i.controlsPositions.scale&&(s.scaleControlOptions.position=i.controlsPositions.scale);i.controlsPositions.streetView&&(s.streetViewControlOptions.position=i.controlsPositions.streetView);i.styles&&(s.styles=i.styles);s.mapTypeControlOptions.style=i.controlsStyle.mapType;s.zoomControlOptions.style=i.controlsStyle.zoom;s=new n.Map(this,s);i.log&&console.log("map center is:");i.log&&console.log(r);t.data("$gmap",s);t.data("gmap",{opts:i,gmap:s,markers:[],markerKeys:{},infoWindow:null,clusters:[]});if(0!==i.controls.length)for(r=0;r<i.controls.length;r+=1)s.controls[i.controls[r].pos].push(i.controls[r].div);i.clustering.enabled?(r=t.data("gmap"),r.markers=i.markers,o._renderCluster.apply(t,[]),n.event.addListener(s,"bounds_changed",function(){o._renderCluster.apply(t,[])})):0!==i.markers.length&&o.addMarkers.apply(t,[i.markers]);o._onComplete.apply(t,[])})},_delayedMode:!1,_onComplete:function(){var e=this.data("gmap"),t=this;if(0!==i)window.setTimeout(function(){o._onComplete.apply(t,[])},100);else{if(o._delayedMode){var n=o._getMapCenter.apply(this,[e.opts,!0]);o._setMapCenter.apply(this,[n]);e.opts.zoomFit&&(n=o._autoZoom.apply(this,[e.opts,!0]),e.gmap.setZoom(n))}e.opts.onComplete()}},_setMapCenter:function(e){var t=this.data("gmap");t&&t.opts.log&&console.log("delayed setMapCenter called");if(t&&void 0!==t.gmap&&0==i)t.gmap.setCenter(e);else{var n=this;window.setTimeout(function(){o._setMapCenter.apply(n,[e])},100)}},_boundaries:null,_getBoundaries:function(e){var t=e.markers,n,r=1e3,i=-1e3,s=1e3,u=-1e3;if(t){for(n=0;n<t.length;n+=1)t[n].latitude&&t[n].longitude&&(r>t[n].latitude&&(r=t[n].latitude),i<t[n].longitude&&(i=t[n].longitude),s>t[n].longitude&&(s=t[n].longitude),u<t[n].latitude&&(u=t[n].latitude),e.log&&console.log(t[n].latitude,t[n].longitude,r,i,s,u));o._boundaries={N:r,E:i,W:s,S:u}}-1e3==r&&(o._boundaries={N:0,E:0,W:0,S:0});return o._boundaries},_getBoundariesFromMarkers:function(){var e=this.data("gmap").markers,t,n=1e3,r=-1e3,i=1e3,s=-1e3;if(e){for(t=0;t<e.length;t+=1)n>e[t].getPosition().lat()&&(n=e[t].getPosition().lat()),r<e[t].getPosition().lng()&&(r=e[t].getPosition().lng()),i>e[t].getPosition().lng()&&(i=e[t].getPosition().lng()),s<e[t].getPosition().lat()&&(s=e[t].getPosition().lat());o._boundaries={N:n,E:r,W:i,S:s}}-1e3==n&&(o._boundaries={N:0,E:0,W:0,S:0});return o._boundaries},_getMapCenter:function(e,t){var i,s=this,u,a;if(e.markers.length&&("fit"==e.latitude||"fit"==e.longitude))return u=t?o._getBoundariesFromMarkers.apply(this):o._getBoundaries(e),i=new n.LatLng((u.N+u.S)/2,(u.E+u.W)/2),e.log&&console.log(t,u,i),i;if(e.latitude&&e.longitude)return i=new n.LatLng(e.latitude,e.longitude);i=new n.LatLng(37.10516411731325, -95.73597945520021);if(e.address)return r.geocode({address:e.address},function(t,n){n===google.maps.GeocoderStatus.OK?o._setMapCenter.apply(s,[t[0].geometry.location]):e.log&&console.log("Geocode was not successful for the following reason: "+n)}),i;if(0<e.markers.length){a=null;for(u=0;u<e.markers.length;u+=1)if(e.markers[u].setCenter){a=e.markers[u];break}if(null===a)for(u=0;u<e.markers.length;u+=1){if(e.markers[u].latitude&&e.markers[u].longitude){a=e.markers[u];break}e.markers[u].address&&(a=e.markers[u])}if(null===a)return i;if(a.latitude&&a.longitude)return new n.LatLng(a.latitude,a.longitude);a.address&&r.geocode({address:a.address},function(t,n){n===google.maps.GeocoderStatus.OK?o._setMapCenter.apply(s,[t[0].geometry.location]):e.log&&console.log("Geocode was not successful for the following reason: "+n)})}return i},_renderCluster:function(){var e=this.data("gmap"),n=e.markers,r=e.clusters,i=e.opts,s;for(s=0;s<r.length;s+=1)r[s].getMarker().setMap(null);r.length=0;if(s=e.gmap.getBounds()){var u=s.getNorthEast(),a=s.getSouthWest(),f=[],l=(u.lat()-a.lat())*i.clustering.clusterSize/100;for(s=0;s<n.length;s+=1)n[s].latitude<u.lat()&&n[s].latitude>a.lat()&&n[s].longitude<u.lng()&&n[s].longitude>a.lng()&&(f[f.length]=n[s]);i.log&&console.log("number of markers "+f.length+"/"+n.length);i.log&&console.log("cluster radius: "+l);for(s=0;s<f.length;s+=1){u=-1;for(n=0;n<r.length&&!(a=r[n].dist(f[s]),a<l&&(u=n,i.clustering.fastClustering));n+=1);-1===u?(n=new t,n.addMarker(f[s]),r[r.length]=n):r[u].addMarker(f[s])}i.log&&console.log("Total clusters in viewport: "+r.length);for(n=0;n<r.length;n+=1)r[n].getMarker().setMap(e.gmap)}else{var c=this;window.setTimeout(function(){o._renderCluster.apply(c)},1e3)}},_processMarker:function(e,t,r,i){var s=this.data("gmap"),o=s.gmap,u=s.opts,a;void 0===i&&(i=new n.LatLng(e.latitude,e.longitude));if(!t){var f={image:u.icon.image,iconSize:new n.Size(u.icon.iconsize[0],u.icon.iconsize[1]),iconAnchor:new n.Point(u.icon.iconanchor[0],u.icon.iconanchor[1]),infoWindowAnchor:new n.Size(u.icon.infowindowanchor[0],u.icon.infowindowanchor[1])};t=new n.MarkerImage(f.image)}r||(new n.Size(u.icon.shadowsize[0],u.icon.shadowsize[1]),f&&f.iconAnchor||new n.Point(u.icon.iconanchor[0],u.icon.iconanchor[1]));t={position:i,icon:t,title:e.title,map:null,draggable:!0===e.draggable?!0:!1};u.clustering.enabled||(t.map=o);a=new n.Marker(t);a.setShadow(r);s.markers.push(a);e.key&&(s.markerKeys[e.key]=a);var l;e.html&&(r={content:"string"===typeof e.html?u.html_prepend+e.html+u.html_append:e.html,pixelOffset:e.infoWindowAnchor},u.log&&console.log("setup popup with data"),u.log&&console.log(r),l=new n.InfoWindow(r),n.event.addListener(a,"click",function(){u.log&&console.log("opening popup "+e.html);u.singleInfoWindow&&s.infoWindow&&s.infoWindow.close();l.open(o,a);s.infoWindow=l}));e.html&&e.popup&&(u.log&&console.log("opening popup "+e.html),l.open(o,a),s.infoWindow=l);e.onDragEnd&&n.event.addListener(a,"dragend",function(t){u.log&&console.log("drag end");e.onDragEnd(t)})},_geocodeMarker:function(e,t,u){var a=this;r.geocode({address:e.address},function(r,f){f===n.GeocoderStatus.OK?(i-=1,a.data("gmap").opts.log&&console.log("Geocode was successful with point: ",r[0].geometry.location),o._processMarker.apply(a,[e,t,u,r[0].geometry.location])):(f===n.GeocoderStatus.OVER_QUERY_LIMIT&&(!a.data("gmap").opts.noAlerts&&0===s&&alert("Error: too many geocoded addresses! Switching to 1 marker/s mode."),s+=1e3,window.setTimeout(function(){o._geocodeMarker.apply(a,[e,t,u])},s)),a.data("gmap").opts.log&&console.log("Geocode was not successful for the following reason: "+f))})},_autoZoom:function(t,n){var r=e(this).data("gmap"),i=e.extend({},r?r.opts:{},t),s,u,r=39135.758482;i.log&&console.log("autozooming map");s=n?o._getBoundariesFromMarkers.apply(this):o._getBoundaries(i);i=111e3*(s.E-s.W)/this.width();u=111e3*(s.S-s.N)/this.height();for(s=2;20>s&&!(i>r||u>r);s+=1)r/=2;return s-2},addMarkers:function(e){var t=this.data("gmap").opts;if(0!==e.length){t.log&&console.log("adding "+e.length+" markers");for(t=0;t<e.length;t+=1)o.addMarker.apply(this,[e[t]])}},addMarker:function(e){var t=this.data("gmap").opts;t.log&&console.log("putting marker at "+e.latitude+", "+e.longitude+" with address "+e.address+" and html "+e.html);var r=t.icon.image,s=new n.Size(t.icon.iconsize[0],t.icon.iconsize[1]),u=new n.Point(t.icon.iconanchor[0],t.icon.iconanchor[1]),a=new n.Size(t.icon.infowindowanchor[0],t.icon.infowindowanchor[1]),f=t.icon.shadow,l=new n.Size(t.icon.shadowsize[0],t.icon.shadowsize[1]),c=new n.Point(t.icon.shadowanchor[0],t.icon.shadowanchor[1]);e.infoWindowAnchor=a;e.icon&&(e.icon.image&&(r=e.icon.image),e.icon.iconsize&&(s=new n.Size(e.icon.iconsize[0],e.icon.iconsize[1])),e.icon.iconanchor&&(u=new n.Point(e.icon.iconanchor[0],e.icon.iconanchor[1])),e.icon.infowindowanchor&&new n.Size(e.icon.infowindowanchor[0],e.icon.infowindowanchor[1]),e.icon.shadow&&(f=e.icon.shadow),e.icon.shadowsize&&(l=new n.Size(e.icon.shadowsize[0],e.icon.shadowsize[1])),e.icon.shadowanchor&&(c=new n.Point(e.icon.shadowanchor[0],e.icon.shadowanchor[1])));r=new n.MarkerImage(r);f=new n.MarkerImage(f);e.address?("_address"===e.html&&(e.html=e.address),"_address"==e.title&&(e.title=e.address),t.log&&console.log("geocoding marker: "+e.address),i+=1,o._delayedMode=!0,o._geocodeMarker.apply(this,[e,r,f])):("_latlng"===e.html&&(e.html=e.latitude+", "+e.longitude),"_latlng"==e.title&&(e.title=e.latitude+", "+e.longitude),t=new n.LatLng(e.latitude,e.longitude),o._processMarker.apply(this,[e,r,f,t]))},removeAllMarkers:function(){var e=this.data("gmap").markers,t;for(t=0;t<e.length;t+=1)e[t].setMap(null),delete e[t];e.length=0},getMarker:function(e){return this.data("gmap").markerKeys[e]},fixAfterResize:function(e){var t=this.data("gmap");n.event.trigger(t.gmap,"resize");e&&t.gmap.panTo(new google.maps.LatLng(0,0));t.gmap.panTo(this.gMapResp("_getMapCenter",t.opts))},setZoom:function(e,t,n){var r=this.data("gmap").gmap;"fit"===e&&(e=o._autoZoom.apply(this,[t,n]));r.setZoom(parseInt(e))},changeSettings:function(e){var t=this.data("gmap"),n=[],r;for(r=0;r<t.markers.length;r+=1)n[r]={latitude:t.markers[r].getPosition().lat(),longitude:t.markers[r].getPosition().lng()};e.markers=n;e.zoom&&o.setZoom.apply(this,[e.zoom,e]);(e.latitude||e.longitude)&&t.gmap.panTo(o._getMapCenter.apply(this,[e]))},mapclick:function(e){google.maps.event.addListener(this.data("gmap").gmap,"click",function(t){e(t.latLng)})},geocode:function(e,t,i){r.geocode({address:e},function(e,r){r===n.GeocoderStatus.OK?t(e[0].geometry.location):i&&i(e,r)})},getRoute:function(t){var r=this.data("gmap"),i=r.gmap,s=new n.DirectionsRenderer,o=new n.DirectionsService,u={BYCAR:n.DirectionsTravelMode.DRIVING,BYBICYCLE:n.DirectionsTravelMode.BICYCLING,BYFOOT:n.DirectionsTravelMode.WALKING},a={MILES:n.DirectionsUnitSystem.IMPERIAL,KM:n.DirectionsUnitSystem.METRIC},f=null,l=null,c=null;void 0!==t.routeDisplay?f=t.routeDisplay instanceof jQuery?t.routeDisplay[0]:"string"==typeof t.routeDisplay?e(t.routeDisplay)[0]:null:null!==r.opts.routeFinder.routeDisplay&&(f=r.opts.routeFinder.routeDisplay instanceof jQuery?r.opts.routeFinder.routeDisplay[0]:"string"==typeof r.opts.routeFinder.routeDisplay?e(r.opts.routeFinder.routeDisplay)[0]:null);s.setMap(i);null!==f&&s.setPanel(f);l=void 0!==u[r.opts.routeFinder.travelMode]?u[r.opts.routeFinder.travelMode]:u.BYCAR;c=void 0!==a[r.opts.routeFinder.travelUnit]?a[r.opts.routeFinder.travelUnit]:a.KM;o.route({origin:t.from,destination:t.to,travelMode:l,unitSystem:c},function(t,i){i==n.DirectionsStatus.OK?s.setDirections(t):null!==f&&e(f).html(r.opts.routeFinder.routeErrors[i])});return this}};e.fn.gMapResp=function(t){if(o[t])return o[t].apply(this,Array.prototype.slice.call(arguments,1));if("object"===typeof t||!t)return o.init.apply(this,arguments);e.error("Method "+t+" does not exist on jQuery.gmap")};e.fn.gMapResp.defaults={log:!1,noAlerts:!0,address:"",latitude:null,longitude:null,zoom:3,maxZoom:null,minZoom:null,markers:[],controls:{},scrollwheel:!0,maptype:google.maps.MapTypeId.ROADMAP,mapTypeControl:!0,zoomControl:!0,draggable:!0,panControl:!1,scaleControl:!1,streetViewControl:!0,controlsPositions:{mapType:null,zoom:null,pan:null,scale:null,streetView:null},controlsStyle:{mapType:google.maps.MapTypeControlStyle.DEFAULT,zoom:google.maps.ZoomControlStyle.DEFAULT},singleInfoWindow:!0,html_prepend:'<div class="gmap_marker">',html_append:"</div>",icon:{image:"http://www.google.com/mapfiles/marker.png",iconsize:[20,34],iconanchor:[9,34],infowindowanchor:[0,0],shadow:"http://www.google.com/mapfiles/shadow50.png",shadowsize:[37,34],shadowanchor:[9,34]},onComplete:function(){},routeFinder:{travelMode:"BYCAR",travelUnit:"KM",routeDisplay:null,routeErrors:{INVALID_REQUEST:"The provided request is invalid.",NOT_FOUND:"One or more of the given addresses could not be found.",OVER_QUERY_LIMIT:"A temporary error occured. Please try again in a few minutes.",REQUEST_DENIED:"An error occured. Please contact us.",UNKNOWN_ERROR:"An unknown error occured. Please try again.",ZERO_RESULTS:"No route could be found within the given addresses."}},clustering:{enabled:!1,fastClustering:!1,clusterCount:10,clusterSize:40}}})(jQuery)