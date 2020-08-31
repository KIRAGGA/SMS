<!-- Modal -->
<div class="modal fade left" id="shift-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shift-add-modal">Add New Shift</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <!-- Shift Field -->
                    <div class="input-group col-md-12">
                        {!! Form::label('shift_name', 'Shift:') !!}
                        {!! Form::text('shift_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                </div>
                    <!-- Submit Field -->
                    <div class="modal-footer">
                        
                        <a href="{{ route('shifts.index') }}" class="btn btn-default" data-dismiss="modal">Cancel</a>
                        {!! Form::submit('Create Shift', ['class' => 'btn btn-success']) !!}
                    </div>
            </div>
        </div>
    </div>