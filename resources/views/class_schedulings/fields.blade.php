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
                            @foreach ($levl as $lev)
                                <option value="{{$lev->level_id}}">{{$lev->level}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Shift Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="shift_id" id="shift_id" class="form-control">
                            <option value="">Select Shift</option>
                            @foreach ($shift as $shi)
                                <option value="{{$shi->shift_id}}">{{$shi->shift}}</option>
                            @endforeach<option value=""></option>
                        </select>
                    </div>

                    <!-- Classroom Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="classroom_id" id="classroom_id" class="form-control">
                            <option value="">Select Classroom</option>
                            @foreach ($classroom as $room)
                                <option value="{{$room->classroom_id}}">{{$room->classroom_name}}</option>
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

                    <!-- Day Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="day_id" id="days_id" class="form-control">
                            <option value="">Select Day</option>
                            @foreach ($day as $days)
                                <option value="{{$days->day_id}}">{{$day->name}}</option>
                            @endforeach
                        </select>

                    </div>

                    <!-- Time Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="time_id" id="time_id" class="form-control">
                            <option value="">Select Time</option>
                            <option value=""></option>
                        </select>

                    </div>

                    <!-- Teacher Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="semester_id" id="semester_id" class="form-control">
                            <option value="">Select Semester</option>
                            <option value=""></option>
                        </select>

                    </div>

                    <!-- Start Time Field -->
                    <div class="form-group col-sm-6">
                        <select name="start_id" id="start_id" class="form-control">
                            <option value="">Select Start Date</option>
                            <option value=""></option>
                        </select>
                    </div>

                            <!-- End Time Field -->
                    <div class="form-group col-sm-6">
                        <select name="end_id" id="end_id" class="form-control">
                            <option value="">Select End Date</option>
                            <option value=""></option>
                        </select>
                    </div>

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

            {{-- script for start date --}}
            @section('scripts')
                <script type="text/javasctipt">
                $('#start_date').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss',
                    useCurrent: false
                })
                </script>
            @endsection

            {{-- Script for end date --}}
            @section('scripts')
                <script type="text/javasctipt">
                $('#end_date').datetimepicker({
                    format: 'YYYY-MM-DD',
                    useCurrent: false
                })
                </script>
            @endsection

            
        </div>
    </div>
</div>