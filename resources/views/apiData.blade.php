@extends('layout')
@section('content')

    <h1>List</h1>

    <p>********************************************</p>
    <h3>Fetching Data from API</h3>
    <table class="table table-bordered data-table table-striped text-start w-100">
        <tr style="text-align:center;">
            <th>ID</th>
            <th>Email</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
        @foreach($collections as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['first_name']}} {{$item['last_name']}}</td>
                <td>{{$item['avatar']}}</td>
            </tr>
        @endforeach
    </table>


@endsection

