<!-- Modal -->
<div class="modal fade left" id="shift-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Shift</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">
                    <!-- Shift Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('shift_name', 'Shift:') !!}
                        {!! Form::text('shift_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                </div>
                    <!-- Submit Field -->
                    <div class="modal-footer">
                        
                        <a href="{{ route('shifts.index') }}" class="btn btn-default">Cancel</a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>
            </div>
        </div>
    </div>