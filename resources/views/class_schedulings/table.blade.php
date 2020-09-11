<div class="table-responsive">
    <table class="table" id="classSchedulings-table">
        <thead>
            <tr>
                <th>Course</th>
        <th>Level</th>
        <th>Shift</th>
        <th>Class</th>
        <th>Batch </th>
        <th>Day </th>
        <th>Time </th>
        <th>Teacher </th>
        <th>Classroom</th>
        {{-- <th>Semester</th> --}}
        <th>Start Time</th>
        <th>End Time</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classSchedulings as $classScheduling)
            <tr>
                <td>{{ $classScheduling->course_id }}</td>
            <td>{!! $classScheduling->level_id !!}</td>
            <td>{!! $classScheduling->shift_id !!}</td>
            <td>{!! $classScheduling->class_id !!}</td>
            <td>{!! $classScheduling->classroom_id !!}</td>
            <td>{!! $classScheduling->batch_id !!}</td>
            <td>{{ $classScheduling->name }}</td>
            <td>{!! $classScheduling->time_id !!}</td>
            <td>{{ $classScheduling->last_name }}</td>
            {{-- <td>{{ $classScheduling->semester_code }}</td> --}}
            <td>{!! $classScheduling->start_time !!}</td>
            <td>{{ $classScheduling->end_time }}</td>
            <td>{{ $classScheduling->status }}
                {{-- <div class="color: green">Active</div>
                @else
                <div class="color: red">In Active</div>
                @endif --}}
            </td>
                <td>
                    {!! Form::open(['route' => ['classSchedulings.destroy', $classScheduling->schedule_id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classSchedulings.show', [$classScheduling->schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classSchedulings.edit', [$classScheduling->schedule_id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
