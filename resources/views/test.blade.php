@extends('app')
@section('title')
    Test
@endsection
@section('pages')
    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>

    <div id="map"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let map = L.map('map').setView([-3.0224717, 104.7503114], 13);
            let latLng1 = L.latLng(-3.0224717, 104.7503114);
            let latLng2 = L.latLng(-2.9545403, 104.7456868)
            let wp1 = new L.Routing.waypoint(latLng1)
            let wp2 = new L.Routing.waypoint(latLng2)

            // let latLng1 = L.latLng(-2.1787438, 113.8720397);
            // let latLng2 = L.latLng(-2.2032617, 113.9022973)

            // let latLng1 = L.latLng(-7.433812211200388, 109.27690710346408);
            // let latLng2 = L.latLng(-7.4352631, 109.244329)

            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
            L.marker(latLng1).addTo(map).bindPopup('You')
                .openPopup();

            L.Routing.control({
                waypoints: [latLng1, latLng2],
                lineOptions: {
                    styles: [{
                        color: 'blue',
                        weight: 5
                    }]
                }
            }).addTo(map);

            //     // Inisialisasi peta
            //     var map = L.map('map').setView([-6.175110, 106.827153], 13);

            //     // Tambahkan tile layer dari OpenStreetMap
            //     L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            //         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            //     }).addTo(map);

            //     // Data GeoJSON
            //     var lineData = {
            //         "type": "Feature",
            //         "geometry": {
            //             "type": "LineString",
            //             "coordinates": [
            //                 [106.827153, -6.175110],
            //                 [106.828199, -6.176000],
            //                 [106.829245, -6.176890]
            //             ]
            //         },
            //         "properties": {
            //             "name": "Sample Line"
            //         }
            //     };

            //     // Tambahkan GeoJSON ke peta
            //     L.geoJSON(lineData).addTo(map);
        });
    </script>
@endsection
