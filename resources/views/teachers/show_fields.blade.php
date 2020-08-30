<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $teachers->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $teachers->last_name }}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $teachers->gender }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $teachers->email }}</p>
</div>

<!-- Dob Field -->
<div class="form-group">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{{ $teachers->dob }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $teachers->phone }}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{{ $teachers->address }}</p>
</div>

<!-- Nationality Field -->
<div class="form-group">
    {!! Form::label('nationality', 'Nationality:') !!}
    <p>{{ $teachers->nationality }}</p>
</div>

<!-- Passport Field -->
<div class="form-group">
    {!! Form::label('passport', 'Passport:') !!}
    <p>{{ $teachers->passport }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $teachers->status }}</p>
</div>

<!-- Dateregistered Field -->
<div class="form-group">
    {!! Form::label('dateregistered', 'Dateregistered:') !!}
    <p>{{ $teachers->dateregistered }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $teachers->user_id }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $teachers->image }}</p>
</div>


<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $teacher->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $teachers->updated_at }}</p>
</div>
