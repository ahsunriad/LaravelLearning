@extends('layout')
@section('content')

    <h1>Student List</h1>

    <p>********************************************</p>
    <h3>Fetching Data from DataBase</h3>
    @if(session('deletedUser'))
        <h5 style="color: crimson">Student <b><i>{{session('deletedUser')}}</b></i> has been deleted successfully.</h5>
    @endif
    @if(session('UpdatedUser'))
        <h5 style="color: darkgreen">The information of student <b><i>{{session('UpdatedUser')}}</b></i> has been updated successfully.</h5>
    @endif
    <table class="table table-bordered data-table table-striped text-start w-100">
        <tr style="text-align:center;">
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>University</th>
            <th>CGPA</th>
            <th>Action</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->uniName}}</td>
                <td>{{$student->cgpa}}</td>
                <td> <button  class="btn btn-outline-danger" onclick=document.location="{{"delete/".$student->id}}">Delete</button> <button  class="btn btn-outline-warning" onclick=document.location="{{"edit/".$student->id}}">Edit</button>  </td>
            </tr>
        @endforeach
    </table>
    {{$students->links()}}

    <br><br><br>
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

    <style>
        .w-5{
            display: none;
        }
    </style>
@endsection

