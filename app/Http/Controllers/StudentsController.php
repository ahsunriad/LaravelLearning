<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class StudentsController extends Controller
{
    public function view()
    {
        return view("studentRegistrationForm");
    }
    public function store(Request $request)
    {
        //dd(\request('name'));
//*************Backend empty validation**********************
        $request->validate([
            'name'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'uniName'=>'required',
            'uniID'=>'required',
            'cgpa'=>'required',
            'email'=>'required',
            'password'=>'required | min:5',
            'rePassword'=>'required | min:5'
        ]);

        $student = new Student;
        $student->name = $request->input('name');
        $student->dob = $request->input('dob');
        $student->gender = $request->input('gender');
        $student->uniName = $request->input('uniName');
        $student->uniID = $request->input('uniID');
        $student->cgpa = $request->input('cgpa');
        $student->email = $request->input('email');
        $student->password = $request->input('password');
        $student->save();

//************************Flash Session Practice*********************************
        $data = $request -> input('name');
        $request = session() -> flash('success', $data);
        return redirect('studentRegistrationForm');
    }
    public function list()
    {
        //$students = Student::all();
        $students = Student::paginate(5); //To show 5 rows in a single page
        $collection = Http::get("https://reqres.in/api/users?page=1");
        $collections = $collection['data'];
        //dd($students);
        //return view("students", ['students' => $students]);
        return view("students", compact('students', 'collections'));
    }
    public function deleteData($id){

        $data = Student::find($id);
        //dd($data);
        $request = session() -> flash('deletedUser', $data['name']);
        $data -> delete();
        return redirect('students');

    }
    public function editData($id){
        $data = Student::find($id);
        return view ('edit',['data'=>$data]);
    }
    public function updateData(Request $request){
        $data = Student::find($request->id);
        $data->name=$request->name;
        $data->uniID=$request->input('uniID');
        $data->cgpa=$request->input('cgpa');
        $data->email=$request->input('email');
        $data->save();

        session() -> flash('UpdatedUser', $data['name']);
        return redirect('students');
    }
    public function findStudent(Student $key){
        return $key;
    }
}
