<!-- Modal -->
<div class="modal fade left" id="teacher-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" style="width:90%" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-file-text-o"></i>New Teacher Form</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b><i class="fa fa-user"></i><legend>Teacher Details</legend><h3> Teacher No:</h3></b>
                    <b class="pull-right"></b>
                </div>
                <div class="panel-body" style="padding-bottom: 4px;">
                    <input type="hidden" name="dateregistered" id="dateregistered"
                value="{{date('Y-m-d')}}">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9">

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="first_name" id="first_name" class="form-control text-capitalize" 
                            placeholder="Enter First Name Here">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="last_name" id="last_name" class="form-control text-capitalize" 
                            placeholder="Enter last Name Here">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <fieldset>
                                <legend for="gender">Gender</legend>
                                <table style="width:100%; margin-top: 14px;">
                                    <tr style="border-bottom: 1px solid #ccc;">
                                        <td>
                                            <label type="radio" name="gender" id="gender" value="0">male</label>
                                        </td>
                                        <td>
                                            <label type="radio" name="gender" id="gender" value="1">Female</label>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar teacherdob"></i>
                                </div>
                                <input type="text" name="dob" id="dob" class="form-control text-capitalize"
                                placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="passport" id="passport" class="form-control text-capitalize" 
                            placeholder="Enter Number Here">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <fieldset>
                                <legend>Gender</legend>
                                <table style="width:100%; margin-top: -14px;">
                                    <tr style="border-bottom: 1px solid #ccc;">
                                        <td>
                                            <label type="radio" name="status" id="status" value="0" required checked>single</label>
                                        </td>
                                        <td>
                                            <label type="radio" name="status" id="status" value="1" required>Married</label>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="nationality" id="nationality" class="form-control text-capitalize"
                            placeholder="Enter Nationality Here">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control text-capitalize" 
                            placeholder="Enter PhoneNumber Here">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-group-login">
                            <table style="margin: 0 auto;">
                                <thead>
                                    <tbody>
                                        <tr class="info"></tr>
                                    </tbody>
                                    <tbody>
                                        <tr>
                                            <td class="image">
                                                {!!Html::image('student_images/profile.jpg', null, ['class'=>'student-image', 'id'=>'showImage'])!!}
                                                <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="tet-align:center; background:#ddd;">
                                                <input type="button" name="browse_file" id="browse_file"
                                                class="form-control text-capitalize btn-browse" class="btn btn-outline-danger" value="Choose">
                                            </td>
                                        </tr>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="panel-heading" style="margin-top: -20px">
                        <b><i class="fa fa-map-maker"></i>Address</b>
                    </div><br>
                    <div class="panel-body" style="padding-bottom: 10px; margin-top: 0;"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="address" id="address" cols="40" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
            </div>
            <!-- Submit Field -->
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                {!! Form::submit('Create classroom', ['class' => 'btn btn-success']) !!}
            </div>
            </div>
        </div>
    </div>
</div>
</div>
                      <!-- Classroom Name Field -->
            <div class="form-group col-sm-6">
              {!! Form::label('classroom_name', 'Classroom Name:') !!}
              {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Classcode Name Field -->
            <div class="form-group col-sm-6">
              {!! Form::label('classcode_name', 'Classcode Name:') !!}
              {!! Form::number('classcode_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Classroom Description Field -->
            <div class="form-group col-sm-12 col-lg-12">
              {!! Form::label('classroom_description', 'Classroom Description:') !!}
              {!! Form::textarea('classroom_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Classroom Status Field -->
            <div class="form-group col-sm-6">
              {!! Form::label('classroom_status', 'Classroom Status:') !!}
              <label class="checkbox-inline">
                  {!! Form::hidden('classroom_status', 0) !!}
                  {!! Form::checkbox('classroom_status', '1', null) !!}
              </label>
            </div>
        </div> 
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div> --}}


            <!-- Submit Field -->
          <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
              {!! Form::submit('Create classroom', ['class' => 'btn btn-success']) !!}
          </div>
      </div>
    </div>
</div>

<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
 
<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


<!-- Dateregistered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateregistered', 'Dateregistered:') !!}
    {!! Form::text('dateregistered', null, ['class' => 'form-control','id'=>'dateregistered']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateregistered').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
</div>
