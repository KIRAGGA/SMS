<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\Roll;
// use Flash;
use App\Models\Admission;
use Session;
use App\Student;

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

    public function studentLogin(Request $request){
        return view('students.login');
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
