<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\Student;
//use Dotenv\Validator;
//use Illuminate\Support\Facades\Validator;

class dummyApi extends Controller
{
    public function getData(){
        //return ['name'=>'riad', 'email'=>'riad@test.com'];
        return Student::all();
    }
    public function setData(Request $request){
        //return 'hola';
        //return $request;
        $student = new Student;
       //dd($request->name);
        $student->name = $request->name;
        $student->dob = $request->dob;
        $student->gender = $request->gender;
        $student->uniName = $request->uniName;
        $student->uniID = $request->uniID;
        $student->cgpa = $request->cgpa;
        $student->email = $request->email;
        $student->password = $request->password;
        $status = $student->save();

        if($status){
            return 'Data saved successfully.';
        }
        else{
            return 'Ooops!!! Operation failed.';
        }
    }
    public function updateData(Request $request){
        //return $request;
        $student = Student::find($request->id);
        $student->name = $request->name;
        $status = $student->save();

        if($status){
            return 'Data updated successfully.';
        }
        else{
            return 'Ooops!!! Operation failed.';
        }
    }
    public function deleteStudent($id){
        $student = Student::find($id);
        $status = $student->delete();

        if($status){
            return 'Data deleted successfully.';
        }
        else{
            return 'Ooops!!! Operation failed.';
        }
    }
    public function searchStudent($name){
        //$row = Student::where("uniName", $name)->get();
        $row = Student::where("name","like", "%". $name."%")->get();
        if(count($row)){
            return $row;
        }
        else{
            return 'Ooops!!! No Data Found.';
        }
    }
//    Not Working
    public function checkValidation(Request $request){
        //return 'hola';
        $rules = array(
            'name'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'uniName'=>'required',
            'uniID'=>'required',
            'cgpa'=>'required',
            'email'=>'required',
            'password'=>'required | min:5'
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return $validator->errors();
        }
        else {
            return 'hola';
        }
    }
}
