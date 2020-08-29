<!-- Modal -->
<div class="modal fade" id="classschedule-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                aria-hidden="true">&times;
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="panel-body" style="border-bottom: 1px solid #ccc; ">
                <div class="form-group">
                    <div class="row"></div>
                    <!-- Course Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="course_id" id="course_id" class="form-control">
                            <option value="">Select Course</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('course_id', 'Course Id:') !!}
                        {!! Form::number('course_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Class Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="class_id" id="class_id" class="form-control">
                            <option value="">Select Class</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('shift_id', 'Shift Id:') !!}
                        {!! Form::number('shift_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Level Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="level_id" id="level_id" class="form-control">
                            <option value="">Select Level</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('level_id', 'Level Id:') !!}
                        {!! Form::number('level_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Shift Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="shift_id" id="shift_id" class="form-control">
                            <option value="">Select Shift</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('shift_id', 'Shift Id:') !!}
                        {!! Form::number('shift_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Classroom Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="classroom_id" id="classroom_id" class="form-control">
                            <option value="">Select Classroom</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('classroom_id', 'Classroom Id:') !!}
                        {!! Form::number('classroom_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Batch Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="batch_id" id="batch_id" class="form-control">
                            <option value="">Select Batch</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('batch_id', 'Batch Id:') !!}
                        {!! Form::number('batch_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Day Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="day_id" id="days_id" class="form-control">
                            <option value="">Select Day</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('day_id', 'Day Id:') !!}
                        {!! Form::number('day_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Time Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="time_id" id="time_id" class="form-control">
                            <option value="">Select Time</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('time_id', 'Time Id:') !!}
                        {!! Form::number('time_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Teacher Id Field -->
                    <div class="form-group col-sm-3">
                        <select name="semester_id" id="semester_id" class="form-control">
                            <option value="">Select Semester</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('teacher_id', 'Teacher Id:') !!}
                        {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Semester Id Field -->
                    {{-- <div class="form-group col-sm-6">
                        <select name="semester_id" id="semester_id" class="form-control">
                            <option value="">Select Teacher</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('teacher_id', 'Teacher Id:') !!}
                        {!! Form::number('teacher_id', null, ['class' => 'form-control']) !!} --}}


                    <!-- Start Time Field -->
                    <div class="form-group col-sm-6">
                        <select name="start_id" id="start_id" class="form-control">
                            <option value="">Select Start Date</option>
                            <option value=""></option>
                        </select>
                        {{-- {!! Form::label('start_time', 'Start Time:') !!}
                        {!! Form::text('start_time', null, ['class' => 'form-control']) !!} --}}
                    </div>
                </div>
            </div>

@section('scripts')
    <script type="text/javasctipt">
    $('#start_date').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        useCurrent: false
    })
    </script>
@endsection

<!-- End Time Field -->
<div class="form-group col-sm-6">
    <select name="end_id" id="end_id" class="form-control">
        <option value="">Select End Date</option>
        <option value=""></option>
    </select>
    {{-- {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::text('end_time', null, ['class' => 'form-control']) !!} --}}
</div>

@section('scripts')
    <script type="text/javasctipt">
    $('#end_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: false
    })
    </script>
@endsection

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>
</div>
        </div>

        <div class="modal-footer">
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
    <a href="{{ route('classSchedulings.index') }}" class="btn btn-warning">Cancel</a>
</div>
</div>