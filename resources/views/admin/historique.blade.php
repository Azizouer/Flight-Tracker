@extends('layouts.squlette')
@section('main')


   <!-- DATA TABLE-->
   <div class="section__content section__content--p30">

   <div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th>ID</th>
                <th>date</th>
                <th>description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->content}}</td>
                <td>

                   <a href="{{ url('supprimer_historique',$data->id) }}" class="btn btn-sm btn-danger">supprimer</a>
                   <a href=""></a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>





<!-- END DATA TABLE

@endsection
