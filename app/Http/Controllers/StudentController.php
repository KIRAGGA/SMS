<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
// use Laracasts\Flash\Flash;
use App\Roll;
use Flash;
use App\Models\Admission;
use Session;
use Illuminate\Database\Eloquent\Model;
use App\Student;
use Illuminate\Contracts\Session\Session as SessionSession;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function studentBiodata(Request $request){

        $students = Roll::join('admissions','admissions.student_id', '=' , 'rolls.student_id')
        ->where(['username' => Session::get('studentSession')]); 
    return view('students.lectures.biodata', compact('students'));
    }

    public function studentChooseCourse(Request $request){

    return view('students.lectures.choose-course');
    }

    public function studentLectureCalendar(Request $request){

    return view('students.lectures.calendar');
    }

    public function studentLectureActivity(Request $request){

    return view('student-lecture-activity');
    }

    public function studentExamsMarks(Request $request){

    return view('student-exam-marks');
    }

    public function studentLogin(Request $request){
        return view('students.login');
    }

    public function changePassword(Request $request){
        $students = $request->all();
            $validStudent = Roll::where(['username'=> Session::get('studentSession'), 'password' => $students['old_password']])->count();

            if($validStudent == 1){
                Flash::success('Your Username is correct');
                // echo "true"; die;
            }else{
                Flash::error('Your Username is incorrect');
                // echo "false"; die;
            }

        return view('students.lectures.biodata', compact('students'));
    }

    public function LoginStudent(Request $request){

        if($request->isMethod('post')){
            $student = $request->all();
            $studentCount = Roll::where(['username'=> $student['username'],
            'password' => $student['password']])->count(); //checking weather students details match

            if($studentCount > 0){
                Session::put('studentSession', $student['username']);

                Flash::success('welcome' .$student['username']);

                return redirect('/account');
            }else{
                Flash::error('Your Username or Password are incorrect');

                return redirect('/student');
            }
        }

        return view('students.account');
    }

    public function account(){
        if(Session::has('studentSession')){
            $student = Admission::all();

        }else{
            return redirect('/student')->with('error', 'please login to access');
        }
        return view('students.account', compact('student'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
