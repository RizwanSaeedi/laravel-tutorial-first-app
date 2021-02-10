<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = Student::all();
        return view('welcome')->with(array('students'=>$data));
    }

    public function insert(Request $r)
    {
        $std =new  Student();
        $std->name = $r->post('name');
        $std->address = $r->post('address');
        $std->mob = $r->post('mob');
    
        $std->save();
    
        $data = Student::all();
    
        return view('welcome')->with(array('students'=>$data));
    }
}