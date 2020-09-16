<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassSchedulingRequest;
use App\Http\Requests\UpdateClassSchedulingRequest;
use App\Repositories\ClassSchedulingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\models\Batch;
use App\models\Classes;
use App\models\Classroom;
use App\Models\Course;
use App\models\Day;
use App\models\Level;
use App\models\Teachers;
use App\models\Shift;
use App\models\Time;
use Illuminate\Support\Facades\DB;
class ClassSchedulingController extends AppBaseController
{
    /** @var  ClassSchedulingRepository */
    private $classSchedulingRepository;

    public function __construct(ClassSchedulingRepository $classSchedulingRepo)
    {
        $this->classSchedulingRepository = $classSchedulingRepo;
    }

    /**
     * Display a listing of the ClassScheduling.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $batch = Batch::all();
        $class = Classes::all();
        $course = Course::all();
        $day = Day::all();
        $level = Level::all();
        $teacher = Teachers::all();
        $shift = Shift::all();
        $time = Time::all();
        $classroom = Classroom::all();

        $classSchedulings = $this->classSchedulingRepository->all();

        $classschedule = DB::table('class_schedulings')->select(
                                    'courses.*',
                                    'levels.*',
                                    'shifts.*',
                                    // 'classes.*',
                                    'batches.*',
                                    'days.*',
                                    // 'semesters.*',
                                    'times.*',
                                    'teachers.*',
                                    'classrooms.*',
                                    'class_schedulings.*'
        )
                ->join('courses', 'courses.course_id', '=', 'class_schedulings.course_id')
                ->join('levels', 'levels.level_id', '=', 'class_schedulings.level_id')
                ->join('shifts', 'shifts.shift_id', '=', 'class_schedulings.shift_id')
                // ->join('classes', 'classes.class_id', '=', 'class_schedulings.class_id')
                ->join('batches', 'batches.batch_id', '=', 'class_schedulings.batch_id')
                ->join('days', 'days.day_id', '=', 'class_schedulings.day_id')
                ->join('times', 'times.time_id', '=', 'class_schedulings.time_id')
                ->join('teachers', 'teachers.teacher_id', '=', 'class_schedulings.teacher_id')
                ->join('classrooms', 'classrooms.classroom_id', '=', 'class_schedulings.classroom_id')
                // ->join('semesters', 'semesters.semester_id', '=', 'class_schedule.semester_id')                
                ->get();
        // dd($classschedule); die;

        return view('class_schedulings.index', compact('course', 'level', 'shift', 'class', 'batch', 'day', 'time', 'teacher', 'classroom', 'classschedule'))
            ->with('classSchedulings', $classSchedulings);
    }

// this is the dynamic function level
    public function DynamicLevel(Request $request){
        $course_id = $request->get('course_id');

        $levels = Level::where('course_id', '=', $course_id)->get();

        return Response::json($levels);
    }
    /**
     * Show the form for creating a new ClassScheduling.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_schedulings.create');
    }

    /**
     * Store a newly created ClassScheduling in storage.
     *
     * @param CreateClassSchedulingRequest $request
     *
     * @return Response
     */
    public function store(CreateClassSchedulingRequest $request)
    {
        $input = $request->all();

        $classScheduling = $this->classSchedulingRepository->create($input);

        Flash::success('Class Scheduling saved successfully.');

        return redirect(route('classSchedulings.index'));
    }

    /**
     * Display the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        return view('class_schedulings.show')->with('classScheduling', $classScheduling);
    }

    /**
     * Show the form for editing the specified ClassScheduling.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit( Request $request)
    {
        // $classScheduling = $this->classSchedulingRepository->find($id);

        // if (empty($classScheduling)) {
        //     Flash::error('Class Scheduling not found');

        //     return redirect(route('classSchedulings.index'));
        // }

        // return view('class_schedulings.edit')->with('classScheduling', $classScheduling);

        if($request->ajax()){
            return response(ClassScheduling::find($request->schedule_id));
        }
    }

    /**
     * Update the specified ClassScheduling in storage.
     *
     * @param int $id
     * @param UpdateClassSchedulingRequest $request
     *
     * @return Response
     */
    // public function update($id, UpdateClassSchedulingRequest $request)
    // {
    //     $classScheduling = $this->classSchedulingRepository->find($id);

    //     if (empty($classScheduling)) {
    //         Flash::error('Class Scheduling not found');

    //         return redirect(route('classSchedulings.index'));
    //     }

    //     $classScheduling = $this->classSchedulingRepository->update($request->all(), $id);

    //     Flash::success('Class Scheduling updated successfully.');

    //     return redirect(route('classSchedulings.index'));
    // }


public function update(Request $request){

    $classschedule = array(
        'course_id'     => $request->course_id,
        'level_id'      => $request->level_id,
        'class_id'      => $request->class_id,
        'shift_id'      => $request->shift_id,
        'classroom_id'  => $request->classroom_id,
        'batch_id'      => $request->batch_id,
        'day_id'        => $request->day_id,
        'time_id'       => $request->time_id,
        'teacher_id'    => $request->teacher_id,
        'start_time'    => $request->start_time,
        'end_time'      => $request->end_time,
        'status'        => $request->status

    );
    classSchedulings::Find0rFail($request->schedule_id)->update(class_schedulings);

    if(empty($classschedule)){
        Flash::error('class Schedule Updation Failed');
    }
    return redirect()->route('classSchedulings.index')->with('success', 'Class Schedule Updated Successfully!');
}


    /**
     * Remove the specified ClassScheduling from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classScheduling = $this->classSchedulingRepository->find($id);

        if (empty($classScheduling)) {
            Flash::error('Class Scheduling not found');

            return redirect(route('classSchedulings.index'));
        }

        $this->classSchedulingRepository->delete($id);

        Flash::success('Class Scheduling deleted successfully.');

        return redirect(route('classSchedulings.index'));
    }
}
