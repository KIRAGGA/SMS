

<!-- Modal -->
<div class="modal fade left" id="department-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Department</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body"><!-- Faculty Id Field -->
                    <div class="form-group col-sm-6">
                        {{-- {!! Form::label('faculty_id', 'Faculty Id:') !!}
                        {!! Form::number('faculty_id', null, ['class' => 'form-control']) !!} --}}
                    </div>

                    <!-- Faculty Id Field -->
                    <div class="form-group col-sm-6">
                        <select name="faculty_id" id="faculty_id" class="form-control">
                            <option value="0" selected="true" disabled="true">Select Faculty</option> 
                        @foreach ($faculties as $faculty)
                                <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Department Name Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('department_name', 'Department Name:') !!}
                        {!! Form::text('department_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Dept Name Here', 'maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Department Code Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('department_code', 'Department Code:') !!}
                        {!! Form::text('department_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Department Description Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('department_description', 'Department Description:') !!}
                        {!! Form::textarea('department_description', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Department Status Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('department_status', 'Department Status:') !!}
                        <label class="checkbox-inline">
                            {!! Form::hidden('department_status', 0) !!}
                            {!! Form::checkbox('department_status', '1', null) !!}
                        </label>
                    </div>
                </div>

                <!-- Submit Field -->        
                <div class="modal-footer">
                    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('departments.index') }}" class="btn btn-default">Cancel</a>
                </div>
        </div>
    </div>
</div>