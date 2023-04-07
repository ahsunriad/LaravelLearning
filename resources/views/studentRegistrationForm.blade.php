@extends('layout')
@section('content')
    @if(session('success'))
        <h5 style="color: darkgreen">The student {{session('success')}} has been added successfully.</h5>
    @endif

    <h1 align="center">Student Registration Form</h1>
    <p align="center">It's quick and easy.</p>

    <form method="post" action="studentRegistrationForm">
        @csrf
        {{--Name Input--}}
        <div class="form-group">
            {{--<label for="inputNamee">Name</label>--}}
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            <span style="color: red">@error('name'){{$message}}@enderror</span>
        </div>

        {{--Date of Birth Input--}}
        <div class="form-group">
            <label for="DoB">Date of Birth</label> <small>Don't be shy. Provide actual year. :)</small>
            <input type="date" class="form-control" id="dob" name="dob">
            <span style="color: red">@error('dob'){{$message}}@enderror</span>
        </div>

        {{--Gender Input--}}
        <label for="inputGender">Gender</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
            <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
            <label class="form-check-label" for="female">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="other" id="other" value="other">
            <label class="form-check-label" for="other">Other</label>
        </div>
        <span style="color: red">@error('gender'){{$message}}@enderror</span>

        {{--University Name Input--}}
        <div class="form-group">
            <div class="input-group mb-3">
                <label for="uniName" name="uniName">Your University</label>
                <select class="custom-select" id="uniName" name="uniName">
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
        <span style="color: red">@error('uniName'){{$message}}@enderror</span>

        {{--University ID Input--}}
        <div class="form-group">
            {{--<label for="inputUniID">University ID</label>--}}
            <input type="text" class="form-control" id="uniID" name="uniID" placeholder="University ID">
            <span style="color: red">@error('uniID'){{$message}}@enderror</span>
        </div>

        {{--CGPA Input--}}
        <div class="form-group">
            {{--<label for="inputcgpa">CGPA</label>--}}
            <input type="number" class="form-control" step="0.01"  id="cgpa" name="cgpa" placeholder="CGPA Don't worry, I won't disclose it to others ;)">
            <span style="color: red">@error('cgpa'){{$message}}@enderror</span>
        </div>

        {{--Email Input--}}
        <div class="form-group">
            {{--<label for="inputEmail">Email Address</label>--}}
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email Address">
            <span style="color: red">@error('email'){{$message}}@enderror</span>
        </div>

        {{--Password Input--}}
        <div class="form-group">
            {{--<label for="inputPassword">Password</label>--}}
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <span style="color: red">@error('password'){{$message}}@enderror</span>
        </div>

        {{--Re-Enter Password Input--}}
        <div class="form-group">
            {{--<label for="inputPassword">Password</label>--}}
            <input type="password" class="form-control" id="rePassword" name="rePassword" placeholder="Confirm Password">
            <span style="color: red">@error('rePassword'){{$message}}@enderror</span>
        </div>

        {{--Submit--}}
        <button type="submit" class="btn btn-outline-success btn-lg btn-block">Sign Up</button>

    </form>



@endsection
