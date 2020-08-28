<!-- Classroom Name Field -->
<div class="form-group">
    {!! Form::label('classroom_name', 'Classroom Name:') !!}
    <p>{{ $classroom->classroom_name }}</p>
</div>

<!-- Classcode Name Field -->
<div class="form-group">
    {!! Form::label('classcode_name', 'Classcode Name:') !!}
    <p>{{ $classroom->classcode_name }}</p>
</div>

<!-- Classroom Description Field -->
<div class="form-group">
    {!! Form::label('classroom_description', 'Classroom Description:') !!}
    <p>{{ $classroom->classroom_description }}</p>
</div>

<!-- Classroom Status Field -->
<div class="form-group">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <p>{{ $classroom->classroom_status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $day->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $day->updated_at }}</p>
</div>

