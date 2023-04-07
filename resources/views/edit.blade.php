@extends('layout')
@section('content')
    <h1 align="center">Update Student Information</h1>
    <form method="POST" action="/edit">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <div class="form-group">
            {{--<label for="inputNamee">Name</label>--}}
            <input type="text" class="form-control" id="name" name="name" value="{{$data['name']}}">
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>

        {{--Date of Birth Input--}}
{{--        <div class="form-group">
            <label for="DoB">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="{{$data['dob']}}" readonly>

        </div>--}}

        {{--University Name Input--}}
{{--        <div class="form-group">
            <div class="input-group mb-3">
                <label for="uniName" name="uniName">University </label>
                <select class="custom-select" id="uniName" name="uniName" value="{{$data['uniName']}}">
                    <<option selected>Select from the list</option>
                    <option value="AIUB">American International University-Bangladesh</option>
                    <option value="NSU">North South University</option>
                    <option value="IUB">Independent University Bangladesh</option>
                    <option value="BRACU">BRAC University</option>
                    <option value="DIU">Daffodil International University</option>
                    <option value="SUB">Southeast University Bangladesh</option>
                </select>
            </div>
        </div>
        <span style="color: red">@error('uniName'){{$message}}@enderror</span>--}}

        {{--University ID Input--}}
        <div class="form-group">
            {{--<label for="inputUniID">University ID</label>--}}
            <input type="text" class="form-control" id="uniID" name="uniID" value="{{$data['uniID']}}">
            <span style="color: red">@error('uniID'){{$message}}@enderror</span>
        </div>

        {{--CGPA Input--}}
        <div class="form-group">
            {{--<label for="inputcgpa">CGPA</label>--}}
            <input type="number" class="form-control" step="0.01"  id="cgpa" name="cgpa"  value="{{$data['cgpa']}}">
            <span style="color: red">@error('cgpa'){{$message}}@enderror</span>
        </div>

        {{--Email Input--}}
        <div class="form-group">
            {{--<label for="inputEmail">Email Address</label>--}}
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"  value="{{$data['email']}}">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>
{{--
        {{--Password Input--}}
{{--
        <div class="form-group">
                --}}
{{--<label for="inputPassword">Password</label>--}}{{--

            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <span style="color: red">@error('password'){{$message}}@enderror</span>
        </div>
--}}

        {{--Re-Enter Password Input--}}{{--

            <div class="form-group">
                --}}
        {{--<label for="inputPassword">Password</label>--}}{{--

                <input type="password" class="form-control" id="rePassword" name="rePassword" placeholder="Confirm Password">
                <span style="color: red">@error('rePassword'){{$message}}@enderror</span>
            </div>

        --}}
        {{--Submit--}}
            <button type="submit" class="btn btn-outline-success btn-lg btn-block">Update</button>
    </form>

@endsection
