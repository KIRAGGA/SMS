<!-- Shift Field -->
<div class="form-group">
    {!! Form::label('shift_name', 'Shift:') !!}
    <p>{{ $shift->shift_name }}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $shift->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $shift->updated_at }}</p>
</div>