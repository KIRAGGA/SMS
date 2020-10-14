<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAdmissionRequest;
use App\Http\Requests\UpdateAdmissionRequest;
use App\Repositories\AdmissionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Roll;
use App\models\Department;
use App\models\Faculty;
use Illuminate\Support\Facades\DB;
use App\models\Admission;
use App\models\Batch;
use Auth;
use App\models\Student;

class AdmissionController extends AppBaseController
{
    /** @var  AdmissionRepository */
    private $admissionRepository;

    public function __construct(AdmissionRepository $admissionRepo)
    {
        $this->admissionRepository = $admissionRepo;
    }

    /**
     * Display a listing of the Admission.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $student =new Admission;
        $admissions = Admission::all();
        $batches = Batch::all();
        $student_id = Admission::max('student_id');
        $roll_id = Roll::max('roll_id');
        $departments = Department::all();
        $faculties = Faculty::all();
        $rand_username_password = mt_rand(130165001 .$student_id, 130165001 .$student_id);
        $admissions = $this->admissionRepository->all();

        $admin = DB::table('admissions')->select(
            'departments.*',
            'faculties.*',
            'batches.*'
            )
        ->join('departments', 'departments.department_id', '=', 'admissions.department_id')
        ->join('batches', 'batches.batch_id', '=', 'admissions.batch_id')
        ->join('faculties', 'faculties.faculty_id', '=', 'admissions.faculty_id')->get();
        return view('admissions.index', compact('departments', 'faculties','teacher_id','admission',
        'student_id','batches','roll_id','rand_username_password'))->with('admissions', $admissions);
    }

    /**
     * Show the form for creating a new Admission.
     *
     * @return Response
     */
    public function create()
    {
        return view('admissions.create');
    }

    /**
     * Store a newly created Admission in storage.
     *
     * @param CreateAdmissionRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        // dd($request->file);
        // $roll = new Roll;
        // $roll->username = $request->username;
        // $roll->password = $request->password;
        // $roll->student_id = $request->student_id;
        // $roll->save();
        // $file = $request->hasFile('image');
        // $extension = $file->getClientOriginalExtension();
        // $new_image_name = time().'.' .$extension;
        // $file->move(public_path('student_images'), $new_image_name);
        
        $image = $request->file('file');

        // dd($image);
            if (!$image) {
                    Flash::error('Image is required please checked your input!');
                    return back();
            }else {
                $new_image_name = $image->getClientOriginalName();
                $image->move(public_path('student_images'),$new_image_name);

        $student =new Admission;
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->mother_phone = $request->mother_phone;
        $student->father_phone = $request->father_phone;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->user_id = $request->user_id;
        $student->dob = $request->dob;
        $student->email = $request->email;
        $student->status = $request->status;
        $student->nationality = $request->nationality;
        $student->passport = $request->passport;
        $student->address = $request->address;
        $student->current_address = $request->current_address;
        $student->department_id = $request->department_id;
        $student->faculty_id = $request->faculty_id;
        $student->username = $request->username;
        $student->password = $request->password;
        $student->login_time = $request->login_time;
        $student->logout_time = $request->logout_time;
        $student->dateregistered = date('Y-m-d');
        $student->batch_id = $request->batch_id;
        $student->user_id = Auth::id();
        $student->image = $new_image_name;
        if( $student->save()){
            $student_id = $student->student_id;
            $username = $student->username;
            $password =$student->password;

            Roll::insert(['student_id' => $student_id, 'username' => $request->username,
             'password' => $request->password]);
            // dump($request->all()); die;
        }
        // $admission = $this->admissionRepository->create($input);

        Flash::success('Admission ' .$request->first_name. ''.$request->last_name. ' saved successfully.');

        return redirect(route('admissions.index'));
    }
}

    /**
     * Display the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.show')->with('admission', $admission);
    }

    /**
     * Show the form for editing the specified Admission.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $admission = $this->admissionRepository->find($id);
        $admissions = Admission::all();
        $batches = Batch::all();
        $student_id = Admission::max('student_id');
        $roll_id = Roll::max('roll_id');
        $departments = Department::all();
        $faculties = Faculty::all();
        $rand_username_password = mt_rand(130165001 .$student_id, 130165001 .$student_id);
        $admissions = $this->admissionRepository->all();
        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        return view('admissions.edit', compact('departments', 'faculties','teacher_id','admission',
        'student_id','batches','roll_id','rand_username_password'))->with('admission', $admission);
    }

    /**
     * Update the specified Admission in storage.
     *
     * @param int $id
     * @param UpdateAdmissionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdmissionRequest $request)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error('Admission not found');

            return redirect(route('admissions.index'));
        }

        $admission = $this->admissionRepository->update($request->all(), $id);

        Flash::success('Admission for ' .$request->first_name. ''.$request->last_name. ' has been updated successfully.');

        return redirect(route('admissions.index'));
    }

    /**
     * Remove the specified Admission from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $admission = $this->admissionRepository->find($id);

        if (empty($admission)) {
            Flash::error($request->first_name. ' '.$request->last_name.'Admission not found');

            return redirect(route('admissions.index'));
        }

        $this->admissionRepository->delete($id);

        Flash::success('Admission for ' .$request->first_name. ''.$request->last_name. ' has been Deleted successfully.');

        return redirect(route('admissions.index'));
    }
}
