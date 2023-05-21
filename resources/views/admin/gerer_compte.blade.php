@extends('layouts.squlette')
@section('main')
<div class="container">
     <!-- USER DATA-->
     <div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>user data</h3>
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
            


        </div>
        <div class="table-responsive table-data">
            <table class="table">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>action</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)


                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <button class="btn btn-sm btn-info"     data-bs-toggle="modal" data-bs-target="#editmodal{{ $data->id }}" >Modifier</button>
                           <a href="{{ route('supprimer',$data->id) }}" class="btn btn-sm btn-danger">supprimer</a>
                           <a href=""></a>
                        </td>
                    </tr>

                   <!-- Modal edit account -->
                <div class="modal  fade" id="editmodal{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered  ">
                    <div class="modal-content">
                        <form action="{{ route('update_account',$data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="modal-header bg-secondary ">
                        <h5 class="modal-title " id="staticBackdropLabel">Modifier le Client</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-secondary">

                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-secondary ">

                                    <div class="form-floating mb-6">
                                        <input type="text" class="form-control"  name="name" id="floatingInput"
                                            placeholder="Nom" value="{{ $data->name }}">
                                        <label for="floatingInput">Nom</label>
                                    </div> <br>
                                     <div class="form-floating mb-6">
                                        <input type="text" class="form-control"  name="lastname" id="floatingInput"
                                            placeholder="prenom" value="{{ $data->lastname }}">
                                        <label for="floatingInput">prenom</label>
                                    </div> <br>



                                    <div class="form-floating mb-6">
                                        <input type="text" class="form-control" name="email" id="floatingEmail"
                                            placeholder="Email" value="{{ $data->email }}">
                                        <label for="floatingEmail">Email</label>
                                    </div> <br>

                                    <div class="form-floating mb-6">
                                        <input type="text" class="form-control"  name="telephone" id="floatingInput"
                                            placeholder="Nom" value="{{ $data->telephone }}">
                                        <label for="floatingInput">Telephone</label>
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

@endsection
