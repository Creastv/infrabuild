<?php
function imb_enqueue_script() {

wp_enqueue_script( 'map-js', get_template_directory_uri().'/src/js/map.js' , array( ),'3', true );
wp_add_inline_script( 'map-js', '
function initMap() {
var uluru = {
lat: ' . json_encode(get_theme_mod('latitude'), JSON_NUMERIC_CHECK) .',
lng: ' . json_encode(get_theme_mod('longitude'), JSON_NUMERIC_CHECK) .'
};
var map = new google.maps.Map(document.getElementById("map"), {
zoom: 12,
center: uluru,

styles: [{featureType: "all", elementType: "geometry.fill", stylers: [{visibility: "on"} ] }, {featureType:
"administrative", elementType: "all", stylers: [{color: "#f2f2f2"} ] }, {featureType: "administrative", elementType:
"labels.text.fill", stylers: [{color: "#686868"}, {visibility: "on"} ] }, {featureType: "landscape", elementType: "all",
stylers: [{color: "#f2f2f2"} ] }, {featureType: "poi", elementType: "all", stylers: [{visibility: "off"} ] },
{featureType: "poi.park", elementType: "all", stylers: [{visibility: "on"} ] }, {featureType: "poi.park", elementType:
"labels.icon", stylers: [{visibility: "off"} ] }, {featureType: "road", elementType: "all", stylers: [{saturation: -100
}, {lightness: 45 } ] }, {featureType: "road.highway", elementType: "all", stylers: [{visibility: "simplified"} ] },
{featureType: "road.highway", elementType: "geometry.fill", stylers: [{lightness: "-22"}, {visibility: "on"}, {color:
"#b4b4b4"} ] }, {featureType: "road.highway", elementType: "geometry.stroke", stylers: [{saturation: "-51"}, {lightness:
"11"} ] }, {featureType: "road.highway", elementType: "labels.text", stylers: [{saturation: "3"}, {lightness: "-56"},
{visibility: "simplified"} ] }, {featureType: "road.highway", elementType: "labels.text.fill", stylers: [{lightness:
"-52"}, {color: "#9094a0"}, {visibility: "simplified"} ] }, {featureType: "road.highway", elementType:
"labels.text.stroke", stylers: [{weight: "6.13"} ] }, {featureType: "road.highway", elementType: "labels.icon", stylers:
[{weight: "1.24"}, {saturation: "-100"}, {lightness: "-10"}, {gamma: "0.94"}, {visibility: "off"} ] }, {featureType:
"road.highway.controlled_access", elementType: "geometry.fill", stylers: [{visibility: "on"}, {color: "#b4b4b4"},
{weight: "5.40"}, {lightness: "7"} ] }, {featureType: "road.highway.controlled_access", elementType: "labels.text",
stylers: [{visibility: "simplified"}, {color: "#231f1f"} ] }, {featureType: "road.highway.controlled_access",
elementType: "labels.text.fill", stylers: [{visibility: "simplified"}, {color: "#595151"} ] }, {featureType:
"road.arterial", elementType: "geometry", stylers: [{lightness: "-16"} ] }, {featureType: "road.arterial", elementType:
"geometry.fill", stylers: [{visibility: "on"}, {color: "#d7d7d7"} ] }, {featureType: "road.arterial", elementType:
"labels.text", stylers: [{color: "#282626"}, {visibility: "simplified"} ] }, {featureType: "road.arterial", elementType:
"labels.text.fill", stylers: [{saturation: "-41"}, {lightness: "-41"}, {color: "#2a4592"}, {visibility: "simplified"} ]
}, {featureType: "road.arterial", elementType: "labels.text.stroke", stylers: [{weight: "1.10"}, {color: "#ffffff"} ] },
{featureType: "road.arterial", elementType: "labels.icon", stylers: [{visibility: "on"} ] }, {featureType: "road.local",
elementType: "geometry.fill", stylers: [{lightness: "-16"}, {weight: "0.72"} ] }, {featureType: "road.local",
elementType: "labels.text.fill", stylers: [{lightness: "-37"}, {color: "#2a4592"} ] }, {featureType: "transit",
elementType: "all", stylers: [{visibility: "off"} ] }, {featureType: "transit.line", elementType: "geometry.fill",
stylers: [{visibility: "off"}, {color: "#eeed6a"} ] }, {featureType: "transit.line", elementType: "geometry.stroke",
stylers: [{visibility: "off"}, {color: "#0a0808"} ] }, {featureType: "water", elementType: "all", stylers: [{color:
"#a2cbec"}, {visibility: "on"} ] } ]
});

var marker = new google.maps.Marker({
position: uluru,
map: map,
title: "IT Holding Warszawa",
});
}
' );
wp_enqueue_script( 'google-api',
'https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw&callback=initMap' , array( ),'6',
true );
}
add_action( 'wp_enqueue_scripts', 'imb_enqueue_script' );