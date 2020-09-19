<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeachersRequest;
use App\Http\Requests\UpdateTeachersRequest;
use App\Repositories\TeachersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Teachers;

class TeachersController extends AppBaseController
{
    /** @var  TeachersRepository */
    private $teachersRepository;

    public function __construct(TeachersRepository $teachersRepo)
    {
        $this->teachersRepository = $teachersRepo;
    }

    /**
     * Display a listing of the Teachers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $teachers = $this->teachersRepository->all();

        return view('teachers.index')
            ->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new Teachers.
     *
     * @return Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created Teachers in storage.
     *
     * @param CreateTeachersRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();

        // $teachers = $this->teachersRepository->create($input);
        $teacher = new Teacher();
                
        $teacher->first_name = $request->input('first_name');
        $teacher->last_name = $request->input('last_name');
        $teacher->gender = $request->input('gender');
        $teacher->email = $request->input('email');
        $teacher->dob = $request->input('dob');
        $teacher->phone = $request->input('phone');
        $teacher->address = $request->input('address');
        $teacher->nationality = $request->input('nationality');
        $teacher->passport = $request->input('passport');
        $teacher->status = $request->input('status');
        $teacher->dateregistered = $request->input('dateregistered');
        $teacher->user_id = $request->input('user_id');
        // $teacher->image = $image_name;

        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting client image by extension
            // $filename = time() .'.' . $extension;
            $file->move('uploads/Teachers/');
            $teacher->image = $filename;
        }else{
            return request;
            $teacher->image = '';
        }

        // dd($teacher);
        $teacher->save();
        Flash::success('Teachers saved successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified Teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teachers', $teachers);
    }

    /**
     * Show the form for editing the specified Teachers.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        return view('teachers.edit')->with('teachers', $teachers);
    }

    /**
     * Update the specified Teachers in storage.
     *
     * @param int $id
     * @param UpdateTeachersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeachersRequest $request)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        $teachers = $this->teachersRepository->update($request->all(), $id);

        Flash::success('Teachers updated successfully.');

        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified Teachers from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teachers = $this->teachersRepository->find($id);

        if (empty($teachers)) {
            Flash::error('Teachers not found');

            return redirect(route('teachers.index'));
        }

        $this->teachersRepository->delete($id);

        Flash::success('Teachers deleted successfully.');

        return redirect(route('teachers.index'));
    }
}
