@extends('layouts.nav')
@section('main')
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <!-- BREADCRUMB-->
        <section class="au-breadcrumb2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->

        <!-- WELCOME-->

        <!-- END WELCOME-->

        <!-- STATISTIC-->
        <section class="statistic statistic2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--green">
                            <h2 class="number">10</h2>
                            <span class="desc">vols</span>
                            <div class="icon">
                                <i class="zmdi zmdi-plane"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--orange">
                            <h2 class="number">2</h2>
                            <span class="desc">vols enregistrées</span>
                            <div class="icon">
                                <i class="zmdi zmdi-plane"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="statistic__item statistic__item--blue">
                            <h2 class="number">0</h2>
                            <span class="desc">réponses</span>
                            <div class="icon">
                                <i class="zmdi zmdi-calendar-note"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <section class="statistic statistic2" style="height: 50%">
            <div class="container">
                <div class="row">
                    <style>
                        .my-div {
                          background-image: url("assets/images/icon/vol3.jpg");
                          background-repeat: no-repeat;
                          background-position: center;
                          background-size: 100%;
                          height: ;

                        }
                    </style>

                      <div class="my-div">
                        <!-- Content of the div -->
                        <center>
                            <h1 class="title-4">Bienvenue sur FLIGHT TRACKER
                                <span>{{Auth::user()->name}}!</span>
                            </h1>
                        </center>
                      </div>
                </div>
            </div>
        </section>

        <!-- Liste des vols-->
        <section class="statistic-chart">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-8">
                                <h3 class="title-5 m-b-35">liste des vols</h3>
                            </div>
                            <div class="col-4">
                                <button id="reload-data" class="float-right pr-2"><i class="fa-solid fa-rotate-right"></i></button>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="table-responsive table-data">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>id</td>
                                <td>d_hour</td>
                                <td>a_hour</td>
                                <td>nbrtravelers</td>
                                <td>d_airport</td>
                                <td>a_airport</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $data->id }}</td>
                                    <td>{{ $data->d_hour }}</td>
                                    <td>{{ $data->a_hour }}</td>
                                    <td>{{ $data->nbrtravelers }}</td>
                                    <td>{{ $data->d_airport }}</td>
                                    <td>{{ $data->a_airport }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#savedmodal{{ $data->id }}">Enregister</button>
                                        <a href=""></a>
                                    </td>
                                </tr>


                                <!-- Modal edit account -->
                                <div class="modal  fade" id="savedmodal{{ $data->id }}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered  ">
                                        <div class="modal-content">
                                            <form action="{{ route('saved_vol', $data->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="staticBackdropLabel">saved le vol</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="col-sm-12 col-xl-12">
                                                        <input type="hidden" value="{{ $data->id }}">
                                                        are you sure enregistred this flight <h1> {{ $data->id }} </h1>
                                                    </div>

                                                </div>
                                                <div class="modal-footer ">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">confirm</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- END STATISTIC CHART-->



        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2023 Mohamed Aziz Ouerfelli. All rights reserved.</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>
@endsection
@section('script')
    <script>
        /*  $(document).ready(function () {

                let map = L.map('map', {
                    center: [51.505, -0.09],
                    zoom: 1
                });
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                let markers = {};
                var planeIcon = L.icon({
                    iconUrl: '{{ asset('assets/images/plane.png') }}',
                    iconSize: [32, 32],
                    iconAnchor: [16, 16]
                });
                setInterval(function() {
                    $.ajax({
                    url: "https://opensky-network.org/api/states/all",
                    method: "GET",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader("Authorization", "Basic " + btoa("AzizOuerfelli:aziz.123@@"));
                    },
                    data: {

                    },
                    success: function(response) {
                        console.log(markers);
                         // loop through each flight in the response
                         for(let i=0 ; i < 10 ; i++){
                            var icao24 = response.states[i][0]; // unique ICAO 24-bit address of the flight
                            var lat = response.states[i][6]; // latitude of the flight
                            var lon = response.states[i][5]; // longitude of the flight
                            var callsign = response.states[i][1]; // callsign of the flight
                            var velocity = response.states[i][9]; // velocity of the flight in m/s
                            var track = response.states[i][10]; // true track angle of the flight in degrees

                            if (lat && lon) {
                                if (!markers[icao24]) {
                                    markers[icao24]= L.marker([lat, lon],{ icon: planeIcon, rotationAngle: track }).addTo(map);
                                    markers[icao24].planeMarker = true;
                                    markers[icao24].bindPopup('Callsign: ' + callsign + '<br>Velocity: ' + velocity + ' m/s<br>Track: ' + track + ' deg').openPopup();
                                } else {
                                    // move the existing marker to the new position
                                    markers[icao24].setLatLng([lat, lon]);
                                    markers[icao24].bindPopup('Callsign: ' + callsign + '<br>Velocity: ' + velocity + ' m/s<br>Track: ' + track + ' deg').openPopup();
                                }
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("Error:", error);
                    }
                });
                }, 5000);
            }) */
                let markers = {};
                let lines = {};

                let planeIcon = L.icon({
                    iconUrl: '{{ asset('assets/images/plane.png') }}',
                    iconSize: [32, 32],
                    iconAnchor: [16, 16]
                });
                let map = L.map('map', {
                center: [51.505, -0.09],
                zoom: 1
                });
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
            function getAirportData(icao24, callback) {
                $.ajax({
                    url: "https://api.aviationstack.com/v1/flights",
                    method: "GET",
                    data: {
                        access_key: "b522bae32118cd31d1c1320f8d2e8b69",
                        flight_iata: "",
                        flight_icao: icao24,
                        limit: 1,
                    },
                    success: function(response) {
                        if (response.data.length > 0) {
                            let flightData = response.data[0];
                            let departureAirport = flightData.departure.airport;
                            let arrivalAirport = flightData.arrival.airport;
                            callback(departureAirport, arrivalAirport);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log("Error:", error);
                    }
                });
            }
            function loadData(){
                $.ajax({
                    url: "https://opensky-network.org/api/states/all",
                        method: "GET",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader("Authorization", "Basic " + btoa(
                                "AzizOuerfelli:aziz.123@@"));
                        },
                        data: {

                        },
                        success: function(response) {
                            console.log(markers);
                            // loop through each flight in the response
                            for (let i = 0; i < 10; i++) {
                                let icao24 = response.states[i][0]; // unique ICAO 24-bit address of the flight
                                let lat = response.states[i][6]; // latitude of the flight
                                let lon = response.states[i][5]; // longitude of the flight
                                let callsign = response.states[i][1]; // callsign of the flight
                                let velocity = response.states[i][9]; // velocity of the flight in m/s
                                let track = response.states[i][10]; // true track angle of the flight in degrees

                                if (lat && lon) {
                                    if (!markers[icao24]) {
                                        markers[icao24] = L.marker([lat, lon], {
                                            icon: planeIcon,
                                            rotationAngle: track
                                        }).addTo(map);
                                        markers[icao24].planeMarker = true;
                                        markers[icao24].bindPopup('Callsign: ' + callsign +
                                            '<br>Velocity: ' + velocity + ' m/s<br>Track: ' +
                                            track + ' deg').openPopup();

                                        getAirportData(icao24, function(departureAirport,
                                            arrivalAirport) {
                                            if (departureAirport && arrivalAirport) {
                                                let departureLat = departureAirport
                                                .latitude;
                                                let departureLon = departureAirport.longitude;
                                                let arrivalLat = arrivalAirport.latitude;
                                                let arrivalLon = arrivalAirport.longitude;
                                                if (departureLat && departureLon &&
                                                    arrivalLat && arrivalLon) {
                                                    let lineCoords = [
                                                        [lat, lon],
                                                        [departureLat, departureLon],
                                                        [arrivalLat, arrivalLon]
                                                    ];
                                                    lines[icao24] = L.polyline(lineCoords, {
                                                        color: 'red'
                                                    }).addTo(map);
                                                }
                                            }
                                        });
                                    } else {
                                        markers[icao24].setLatLng([lat, lon]);
                                        //markers[icao24].setRotationAngle(track);
                                        markers[icao24].bindPopup('Callsign: ' + callsign +
                                            '<br>Velocity: ' + velocity + ' m/s<br>Track: ' +
                                            track + ' deg');
                                        if (lines[icao24]) {
                                            let departureLat = lines[icao24].getLatLngs()[1][0];
                                            let departureLon = lines[icao24].getLatLngs()[1][1];
                                            let arrivalLat = lines[icao24].getLatLngs()[2][0];
                                            let arrivalLon = lines[icao24].getLatLngs()[2][1];
                                            if (departureLat && departureLon && arrivalLat &&
                                                arrivalLon) {
                                                let lineCoords = [
                                                    [lat, lon],
                                                    [departureLat, departureLon],
                                                    [arrivalLat, arrivalLon]
                                                ];
                                                lines[icao24].setLatLngs(lineCoords);
                                            }
                                        }
                                    }
                                } else {
                                    if (markers[icao24]) {
                                        map.removeLayer(markers[icao24]);
                                        delete markers[icao24];
                                    }
                                    if (lines[icao24]) {
                                        map.removeLayer(lines[icao24]);
                                        delete lines[icao24];
                                    }
                                }
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log("Error:", error);
                        }
                    });
            }

        $(document).ready(function() {
            loadData();
            $('#reload-data').on('click', function(){
                loadData()

            });
        });
    </script>


@endsection
<!-- end document-->
