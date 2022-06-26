<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
// use Request;
use DB;
use Log;

class ApiController extends Controller
{

    public function getAllStudents()
    {
        # code...
    }

    public function createStudent(Request $request)
    {
        Log::info("request:$request");
        // logger('test', ['foo' => 'bar']);
        // データベースに保存
        DB::transaction(function () {
            $student = new Student;
            $student->name   = $request->name;
            $student->course = $request->course;
            $student->save();
        });
        //jsonで返す
        return response()->json([
            "message" => "student record created"
        ],201);
        // 201 は作成成功のステータスコード
        // try {
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         "message" => "error"
        //     ],500);
        // }

    }

    public function getStudent($id)
    {
        # code...
    }

    public function updateStudent(Request $request,$id)
    {
        # code...
    }

    public function deleteStudent($id)
    {
        # code...
    }
}
