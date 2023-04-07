@extends('layout')

@section('content')

    <form action="blaLogin" method="post">
    @csrf
        <input type="text" name="name">
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>
@endsection
