@extends('layouts.nav')
@section('main')


<div class="row">


@foreach ($datas as $data)


<div class="col-md-4">
    <aside class="profile-nav alt">
        <section class="card">
            <div class="card-header user-header alt bg-dark">
                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="assets/images/icon/avatar-01.jpg">
                    </a>
                    <div class="media-body">
                        <h2 class="text-light display-6"> <i class="fa fa-users"></i> {{$data->nbrtravelers}}</h2>
                        <p> <i class="fa fa-key"></i> {{$data->id}}</p>
                    </div>
                </div>
            </div>


            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa-regular fa-calendar"></i> {{$data->d_hour}}

                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa-regular fa-calendar"></i> {{$data->a_hour}}

                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa-solid fa-plane-departure"></i> {{$data->d_airport}}

                    </a>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <i class="fa-solid fa-plane-arrival"></i> {{$data->a_airport}}

                    </a>
                </li>
            </ul>

        </section>
    </aside>
</div>

@endforeach
</div>

@endsection
