@extends('layouts.squlette')
@section('main')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>map data</h3>
                        <div class="filters">
                            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Products</option>
                                    <option value="">Services</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                <select class="js-select2 au-select-dark" name="time">
                                    <option selected="selected">All Time</option>
                                    <option value="">By Month</option>
                                    <option value="">By Day</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                        <div class="map-wrap m-t-45 m-b-20">
                            <div id="vmap" style="height: 284px;"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>Europe</h3>
                        <div class="map-wrap">
                            <div class="vmap" id="vmap1"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
                <div class="col-md-6">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>USA</h3>
                        <div class="map-wrap">
                            <div class="vmap" id="vmap2"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
                <div class="col-md-6">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>Germany</h3>
                        <div class="map-wrap">
                            <div class="vmap" id="vmap3"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
                <div class="col-md-6">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>France</h3>
                        <div class="map-wrap">
                            <div class="vmap" id="vmap4"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
                <div class="col-md-6">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>Russia</h3>
                        <div class="map-wrap">
                            <div class="vmap" id="vmap5"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                </div>
                <div class="col-md-6">
                    <!-- MAP DATA-->
                    <div class="map-data m-b-40">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-map"></i>Brazil</h3>
                        <div class="map-wrap">
                            <div class="vmap" id="vmap6"></div>
                        </div>
                    </div>
                    <!-- END MAP DATA-->
                    <!-- END PAGE CONTAINER-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Jquery JS-->
  <script src="../../../assets/vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="../../../assets/vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="../../../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="../../../assets/vendor/slick/slick.min.js">
  </script>
  <script src="../../../assets/vendor/wow/wow.min.js"></script>
  <script src="../../../assets/vendor/animsition/animsition.min.js"></script>
  <script src="../../../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="../../../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="../../../assets/vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="../../../assets/vendor/circle-progress/circle-progress.min.js"></script>
  <script src="../../../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="../../../assets/vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="../../../assets/vendor/select2/select2.min.js">
  </script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.min.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.sampledata.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.world.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.brazil.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.europe.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.france.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.germany.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.russia.js"></script>
  <script src="../../../assets/vendor/vector-map/jquery.vmap.usa.js"></script>

  <!-- Main JS-->
  <script src="../../../assets/js/main.js"></script>

@endsection
