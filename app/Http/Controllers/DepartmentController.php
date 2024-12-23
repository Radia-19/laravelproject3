<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    public function cse(){
        $cseStudents=DB::table('students')->where(['studentDepartment'=>1])->get();
        return view('admin.cse',compact('cseStudents'));
    }
    public function eee(){
        $eeeStudents=DB::table('students')->where(['studentDepartment'=>2])->get();
        return view('admin.eee',compact('eeeStudents'));
    }
    public function bba(){
        $bbaStudents=DB::table('students')->where(['studentDepartment'=>3])->get();
        return view('admin.bba',compact('bbaStudents'));
    }
    public function sivil(){
        $sivilStudents=DB::table('students')->where(['studentDepartment'=>4])->get();
        return view('admin.sivil',compact('sivilStudents'));
    }
    public function english(){
        $englishStudents=DB::table('students')->where(['studentDepartment'=>5])->get();
        return view('admin.english',compact('englishStudents'));
    }
    public function digitalMarketing(){
        $digitalMarketingStudents=DB::table('students')->where(['studentDepartment'=>6])->get();
        return view('admin.digitalMarketing',compact('digitalMarketingStudents'));
    }
}
