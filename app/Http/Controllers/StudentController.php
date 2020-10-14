<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all(); //lấy ra hết
        return view('students.student-list', ['students' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->name = $request->name;
        $student->age = $request->age;
        $student->address = $request->address;
        $student->phone = $request->phone;
        $student->gender = $request->gender;
        $student->is_active = $request->is_active;
        $student->save();
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    //show sử dụng phương thức GET routenam student.show
    public function show(Student $student)
    {
        //nếu chỉ chuyền vào $student thì sẽ chỉ nhận đc id của student
        $studentEloquentModel = Student::find($student);

        // $studentObjQueryBuilder = DB::table('students')->find($student);

        // dd($studentEloquentModel, $studentObjQueryBuilder);


        //nế truyền vào Student $student thì sẽ truy vấn tìm Student có id = $student
        $studentObj = $student;


        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {

        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // dd(123);
        $student->name = $request->name;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->gender = $request->gender;
        $student->age = $request->age;
        $student->is_active = $request->is_active;

        $student->save();

        //Cách 2 $student->update(['name'=>$request->name])
        //$student->
        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //Kiểm tra tồn tại hay k rồi mới xóa
        if ($student) {
            $student->delete(); // trả về kết quả true or false
        }
        //Cách 2 Student::destroy($student->id) //trả về số lượng bản ghi đã xóa
        //Redirect về danh sách (có thực hiện truy vấn lấy danh sách mới)
        return redirect()->route('students.index');
    }
}
