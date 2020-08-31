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
                            {{-- adding a foreach loop to select the data from the database --}}
                            @foreach ($course as $cou)
                                <option value="{{$cou->course_id}}">{{$cou->course_name}}</option>
                            @endforeach
                        </select>
                        {{-- {!! Form::label('course_id', 'Course Id:') !!}
                        {!! Form::number('course_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Class Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="class_id" id="class_id" class="form-control">
                            <option value="">Select Class</option>
                            @foreach ($class as $clas)
                                <option value="{{$clas->class_id}}">{{$clas->class_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Level Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="level_id" id="level_id" class="form-control">
                            <option value="">Select Level</option>
                            {{-- @foreach ($level as $lev)
                                <option value="{{$lev->level_id}}">{{$lev->level}}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <!-- Shift Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="shift_id" id="shift_id" class="form-control">
                            <option value="">Select Shift</option>
                            @foreach ($shift as $shi)
                                <option value="{{$shi->shift_id}}">{{$shi->shift_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Classroom Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="classroom_id" id="classroom_id" class="form-control">
                            <option value="">Select Classroom</option>
                            @foreach ($classroom as $room)
                        <option value="{{$room->classroom_id}}">{{$room->classroom_name}}__{{$room->classroom_code}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Batch Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="batch_id" id="batch_id" class="form-control">
                            <option value="">Select Batch</option>
                            @foreach ($batch as $bat)
                                <option value="{{$bat->batch_id}}">{{$bat->year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Day Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="day_id" id="days_id" class="form-control">
                            <option value="">Select Day</option>
                            @foreach ($day as $d)
                                <option value="{{$d->day_id}}">{{$d->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Time Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="time_id" id="time_id" class="form-control">
                            <option value="">Select Time</option>
                            @foreach ($time as $ti)
                                <option value="{{$ti->time_id}}">{{$ti->time}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Teacher Id Field -->
                    {{-- <div class="form-group col-sm-4">
                        <select name="teacher_id" id="teacher_id" class="form-control">
                            <option value="">Select teacher</option>
                            @foreach ($teacher as $teach)
                                <option value="{{$teach->teacher_id}}">{{$teach->teacher_name}}__{{$teach->teacher_code}}</option>
                            @endforeach
                        </select>
                    </div> --}}

                    <!-- Start Time Field -->
                    <div class="form-group col-sm-6">
                        <label>Start Date</label>
                        <input type="text" class="form-control" name="start_date" id="start_date">
                    </div>
                        {{-- script for start date --}}
                        
                        @section('scripts')
                            <script>
                                $('#start_date').datetimepicker({
                                    format: 'YYYY-MM-DD',
                                    useCurrent: false
                                })
                            </script>
                        @endsection

                            <!-- End Time Field -->
                    <div class="form-group col-sm-6">
                        <label>End Date</label>
                        <input type="text" class="form-control" name="end_date" id="end_date">
                    </div>
                     {{-- Script for end date --}}
                        @section('scripts')
                            <script>
                                $('#start_date').datetimepicker({
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
                    <div class="modal-footer">
                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                            <a href="{{ route('classSchedulings.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>