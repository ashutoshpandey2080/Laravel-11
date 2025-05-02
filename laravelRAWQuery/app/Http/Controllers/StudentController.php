<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function showStudents(){
        // $students = DB::select('select name, age from students where age > ? and name like ?', [20, 'd%%']);
        
        // $students = DB::insert("insert into students (name, age, roll_no, phone_no, created_at, updated_at) values (?, ?, ?, ?, ?, ?)", [
            //     'John Dale',
            //     22,
            //     123456,
            //     '1234567890',
            //     now(),
            //     now()
            // ]);
            
            
            //$students = DB::update("update students set name = ?, age = ? where id = ?", ['James Arthur', 25, 6]);
            
            $students = DB::delete("delete from students where id = ? ", [31]);
            
            
            echo "<pre>";
            print_r($students);
            echo "</pre>";
            
            // return view('students', ['students' => $students]);
        }
}
