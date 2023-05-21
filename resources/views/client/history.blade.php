@extends('layouts.nav')
@section('main')


   <!-- DATA TABLE-->


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

                    <a href="{{ route('supprimer_history',$data->id) }}" class="btn btn-sm btn-danger">supprimer</a>
                    <a href=""></a>
                 </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



<!-- END DATA TABLE

@endsection
