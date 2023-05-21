@extends('layouts.squlette')
@section('main')
<div class="container">
     <!-- USER DATA-->
     <div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>VOLS</h3>
            @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    @if (session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="filters m-b-45">
            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addmodal">Ajouter</button>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
        <div class="table-responsive table-data">
            <table class="table">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>d_hour</td>
                        <td>a_hour</td>
                        <td>trnbravelers</td>
                        <td>d_airport</td>
                        <td>a_airport</td>
                        <td>action</td>
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
                            <button class="btn btn-sm btn-info"     data-bs-toggle="modal" data-bs-target="#editmodal{{ $data->id }}">Modifier</button>
                           <a href="{{ route('supprimer',$data->id) }}" class="btn btn-sm btn-danger">supprimer</a>
                           <a href=""></a>
                        </td>
                    </tr>

                   <!-- Modal edit account -->
                <div class="modal  fade" id="editmodal{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  ">
                    <div class="modal-content">
                        <form action="{{ route('update_vol',$data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="modal-header bg-secondary ">
                        <h5 class="modal-title " id="staticBackdropLabel">Modifier le vol</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-secondary">

                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-secondary ">

                                    <div class="form-floating mb-6">
                                        <input type="datetime-local" class="form-control"  name="d_hour" id="floatingInput"
                                            placeholder="d_hour" value="{{ $data->d_hour }}">
                                        <label for="floatingInput">d_hour</label>
                                    </div> <br>
                                     <div class="form-floating mb-6">
                                        <input type="datetime-local" class="form-control"  name="a_hour" id="floatingInput"
                                            placeholder="a_hour" value="{{ $data->a_hour }}">
                                        <label for="floatingInput">a_hour</label>
                                    </div> <br>



                                    <div class="form-floating mb-6">
                                        <input type="number" class="form-control" name="nbrtravelers" id="floatingEmail"
                                            placeholder="nbrtravelers" value="{{ $data->nbrtravelers }}">
                                        <label for="floatingEmail">nbrtravelers</label>
                                    </div> <br>

                                    <div class="form-floating mb-6">
                                        <input type="text" class="form-control"  name="d_airport" id="floatingInput"
                                            placeholder="d_airport" value="{{ $data->d_airport }}">
                                        <label for="floatingInput">d_airport</label>
                                    </div> <br>

                                    <div class="form-floating mb-6">
                                        <input type="text" class="form-control"  name="a_airport" id="floatingInput"
                                            placeholder="a_airport" value="{{ $data->a_airport }}">
                                        <label for="floatingInput">a_airport</label>
                                    </div> <br>


                                </div>
                            </div>


                        </div>
                        <div class="modal-footer bg-secondary ">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">modifier</button>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>

                    @endforeach
                </tbody>
            </table>
        </div>



    <!-- END USER DATA-->
</div>



<div class="modal  fade" id="addmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  ">
    <div class="modal-content">
        <form action="{{ route('add_vol') }}" method="POST">
            @csrf

        <div class="modal-header bg-secondary ">
        <h5 class="modal-title " id="staticBackdropLabel">Ajouter vols</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body bg-secondary">

            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary ">

                    <div class="form-floating mb-6">
                        <input type="datetime-local" class="form-control"  name="d_hour" id="floatingInput"
                            placeholder="d_hour">
                        <label for="floatingInput">d_hour</label>
                    </div> <br>
                     <div class="form-floating mb-6">
                        <input type="datetime-local" class="form-control"  name="a_hour" id="floatingInput"
                            placeholder="a_hour">
                        <label for="floatingInput">a_hour</label>
                    </div> <br>



                    <div class="form-floating mb-6">
                        <input type="number" class="form-control" name="nbrtravelers" id="floatingEmail"
                            placeholder="nbrtravelers">
                        <label for="floatingEmail">nbrtravelers</label>
                    </div> <br>

                    <div class="form-floating mb-6">
                        <input type="text" class="form-control"  name="d_airport" id="floatingInput"
                            placeholder="d_airport">
                        <label for="floatingInput">d_airport</label>
                    </div> <br>

                    <div class="form-floating mb-6">
                        <input type="text" class="form-control"  name="a_airport" id="floatingInput"
                            placeholder="a_airport">
                        <label for="floatingInput">a_airport</label>
                    </div> <br>


                </div>
            </div>


        </div>
        <div class="modal-footer bg-secondary ">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">ajouter</button>
        </div>
    </form>
    </div>
    </div>
</div>




@endsection
