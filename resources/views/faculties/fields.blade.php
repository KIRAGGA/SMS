<!-- Modal -->
<div class="modal fade left" id="faculty-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel"><i class="fa fa-leanpub" aria-hidden="true">Add New faculty</i></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            
                <div class="modal-body">
                        <!-- Faculty Name Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('faculty_name', 'Faculty Name:') !!}
                            {!! Form::text('faculty_name', null, ['class' => 'form-control', 'placeholder' => 'Enter faculty Name', 'maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Faculty Code Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('faculty_code', 'Faculty Code:') !!}
                            {!! Form::text('faculty_code', null, ['class' => 'form-control', 'placeholder' => 'Enter faculty Code', 'maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Faculty Description Field -->
                        <div class="form-group col-sm-12 col-lg-12">
                            {!! Form::label('faculty_description', 'Faculty Description:') !!}
                            {!! Form::textarea('faculty_description', null, ['class' => 'form-control', 'placeholder' => 'Enter faculty Description']) !!}
                        </div>

                        <!-- Faculty Status Field -->
                        <div class="form-group col-sm-6">
                            {!! Form::label('faculty_status', 'Faculty Status:') !!}
                            <label class="checkbox-inline">
                                {!! Form::hidden('faculty_status', 0) !!}
                                {!! Form::checkbox('faculty_status', '1', null) !!}
                            </label>
                        </div>

                </div>
                        <!-- Submit Field -->
                        <div class="modal-footer">
                            <a href="{{ route('faculties.index') }}" class="btn btn-warning">Cancel</a>
                            {!! Form::submit('Create Faculty', ['class' => 'btn btn-success']) !!}
                        </div>
        </div>
    </div>
</div>
