@extends('layouts.squlette')
@section('main')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">aperçu</h2>

                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="text">
                                <h2>{{$users->count()}}</h2>
                                <span>members</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa fa-plane "></i>
                            </div>
                            <div class="text">
                                <h2>{{$vols->count()}}</h2>
                                <span>vols</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c3">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="fa fa-bookmark"></i>
                            </div>
                            <div class="text">
                                <h2>{{$vols_saved->count()}}</h2>
                                <span>V enregistrées</span>
                            </div>
                        </div>
                        <div class="overview-chart">
                            <canvas id="widgetChart3"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">


             <img src="assets/images/icon/vol3.jpg" alt="CoolAdmin" style="width: 50%">


        </div>




        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2023 Mohamed Aziz Ouerfelli. All rights reserved.</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
