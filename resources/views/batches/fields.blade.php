<!-- Modal -->
<div class="modal fade" id="batch-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-id-badge" aria-hidden="true"> Add New Batch</i></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


<!-- Batch Field -->
<div class="input-group col-md-12">
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
</div>