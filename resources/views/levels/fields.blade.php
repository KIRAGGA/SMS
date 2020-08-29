<!-- Modal -->
<div class="modal fade left" id="level-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add New Level</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
                <div class="modal-body">

                    <!-- Level Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('level', 'Level:') !!}
                        {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Course Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('course_id', 'Course Id:') !!}
                        {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
                    </div>

                    <!-- Level Description Field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('level_description', 'Level Description:') !!}
                        {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
        
                <div class="modal-footer">
                    <a href="{{ route('levels.index') }}" class="btn btn-default">Cancel</a>
                    {!! Form::submit('Create level', ['class' => 'btn btn-success']) !!}
                </div>
        </div>
    </div>
</div>