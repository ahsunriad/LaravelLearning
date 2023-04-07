@extends('layout')
@section('content')

    <form action="loginCheck" method="post">
        @csrf
        <input type="text" name="username"><br>
        <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </form>
@endsection
