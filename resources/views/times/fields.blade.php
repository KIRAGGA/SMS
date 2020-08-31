
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
                    <!-- Time Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('time', 'Time:') !!}
                        {!! Form::text('time', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Submit Field -->
                    <div class="modal-footer">
                        {!! Form::submit('create Time', ['class' => 'btn btn-success']) !!}
                        <a href="{{ route('times.index') }}" class="btn btn-default" data-dismiss="modal">Cancel</a>
                    </div>
                </div>