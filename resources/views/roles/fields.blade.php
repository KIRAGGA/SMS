<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
</div>

{{-- New Field --}}
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

{{-- Subect Field --}}
<div class="form-group col-sm-12">
    {!! Form::submit('save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('roles.index')!!}" class="btn btn-default">Cancel</a>
</div>

<div>
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        {!! Form::submit('Create Role', ['class' => 'btn btn-success'])!!}
    </div>
</div>