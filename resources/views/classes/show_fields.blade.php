<!-- Class Name Field -->
<div class="form-group">
    {!! Form::label('class_name', 'Class Name:') !!}
    <p>{{ $classes->class_name }}</p>
</div>

<!-- Class Code Field -->
<div class="form-group">
    {!! Form::label('class_code', 'Class Code:') !!}
    <p>{{ $classes->class_code }}</p>
</div>

<!-- Classroom Description Field -->
<div class="form-group">
    {!! Form::label('class_description', 'Classroom Description:') !!}
    <p>{{ $classroom->classroom_description }}</p>
</div>

<!-- Classroom Status Field -->
<div class="form-group">
    {!! Form::label('classroom_status', 'Classroom Status:') !!}
    <p>{{ $classroom->classroom_status }}</p>
</div>