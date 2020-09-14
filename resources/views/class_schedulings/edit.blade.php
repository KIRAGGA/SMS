<!-- Modal -->
<div class="modal fade" id="Editclassschedule-show" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                aria-hidden="true">&times;
                </button>
                <h4 class="modal-title">Edit Class Schedule</h4>
            </div>

            <div class="modal-body" style="border-bottom: 1px solid #ccc;">
                <div class="form-group">
                    <div class="row"></div>

                    <!-- Course Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="course_id" id="course_id1" class="form-control">
                            <option value="">Select Course</option>
                            {{-- adding a foreach loop to select the data from the database --}}
                            @foreach ($course as $cou)
                                <option value="{{$cou->course_id}}">{{$cou->course_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Class Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="class_id" id="class_id1" class="form-control">
                            <option value="">Select Class</option>
                            @foreach ($class as $clas)
                                <option value="{{$clas->class_id}}">{{$clas->class_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Level Id Field -->
                    <div class="form-group col-sm-4">
                        <select name="level_id" id="level_id1" class="form-control">
                            {{-- <option value="">Select Level</option> --}}
                            @foreach ($course as $lev)
                                <option value="{{$lev->level_id}}">Select Level</option>
                            @endforeach
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
                    <div class="form-group col-sm-4">
                        <select name="teacher_id" id="teacher_id" class="form-control">
                            <option value="">Select Teacher</option>
                            @foreach ($teacher as $teach)
                                <option value="{{$teach->teacher_id}}">{{$teach->last_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <!-- Start Time Field -->
                    <div class="form-group col-sm-6">
                        <label>Start Date</label>
                        <input type="text" class="form-control" name="start_time" id="start_time">
                    </div>

                    
                            <!-- End Time Field -->
                    <div class="form-group col-sm-6">
                        <label>End Date</label>
                        <input type="text" class="form-control" name="end_time" id="end_time">
                    </div>

                     {{-- Script for end date --}}
                     @push('scripts')
                        <script type="text/javascript">

                            $('#start_time').datetimepicker({
                                format: 'YYYY-MM-DD',
                                useCurrent: true,
                                sideBySide: true
                            })

                            $('#end_time').datetimepicker({
                                format: 'YYYY-MM-DD',
                                useCurrent: true,
                                sideBySide: true
                            })

                        // creating dynamic function for course
                            $('#course_id1').on('change', function(e){
                            // console.log(e);
                            // var course_id = e.target.value;
                            var course_id = $(this).val();
                            var level = $('#level_id1')
                                $(level).empty();
                                $.get("{{ route('dynamicLevel') }}", {course_id:course_id}, function(data){

                                    $.each(data, function(i,1){
                                        $(level).append($('<option/>' ,{
                                            value : 1.level_id,
                                            text : 1.level
                                        }))
                                    })
                                })
                            })

                            // code to fetch data from the database.form-control
                            $(document).on('click', '#Edit', function(data){
                                var id = $(this).data('id');
                                alert(id)
                            })
                        </script>
                    @endpush
                        
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
                            {!! Form::submit('Edit', ['class' => 'btn btn-success btn-sm']) !!}
                            <a href="{{ route('classSchedulings.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>