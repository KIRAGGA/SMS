<!-- Modal -->
<div class="modal fade left" id="batch-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true">Add New Batch</i></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">     
                    <!-- Batch Field -->
                  
                    <div class="input-group col-md-12">
                        {{-- {!! Form::label('batch_id', 'Batch:') !!} --}}
                        <span class="input-group-addon">Batch Year</span>
                        {!! Form::text('year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                </div>
                    <!-- Submit Field -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                        {!! Form::submit('Create Batch', ['class' => 'btn btn-success']) !!}
                        {{-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a> --}}
                    </div>
        </div>
    </div>
</div>