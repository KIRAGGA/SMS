


<!-- Modal -->
<div class="modal fade left" id="academics-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New Academics</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

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

                    <!-- Academic Year Field -->
            <div class="input-group col-md-12">
                {!! Form::label('academic_year', 'Academic Year:') !!}
                {!! Form::text('academic_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

                    {{-- <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('academics.index') }}" class="btn btn-default">Cancel</a>
            </div> --}}

        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success">Save changes</button>
        </div> --}}


        <!-- Submit Field -->
      <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
          {!! Form::submit('Create Academics', ['class' => 'btn btn-success']) !!}
          
      </div>
    </div>
  </div>
</div>