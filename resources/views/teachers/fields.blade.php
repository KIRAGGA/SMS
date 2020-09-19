<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter First Name Here', 'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name:') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Last Name Here', 'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Gender Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} --}}
    {{-- <input id="female" type="radio"class="form-control" name="gender" value="Female" {{ (old('sex') == 'female') ? 'checked' : '' }} >Female
    <br>
 <input id="male" type="radio"class="form-control" name="gender" value="Male" {{ (old('sex') == 'male') ? 'checked' : '' }} >Male --}}
</div>

<!-- marital status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Male:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('gender', 0) !!}
        {!! Form::radio('gender', '0', null) !!}
    </label>
    <!-- Status Field -->
    {!! Form::label('gender', 'Female:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('gender', 0) !!}
        {!! Form::radio('gender', '1', null) !!}
    </label>

    {{-- {!! Form::label('status', 'Divorced:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::radio('status', '2', null) !!}
    </label> --}}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Here', 'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD', 'id'=>'dob']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone Number Here', 'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12 col-lg-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control', 'placeholder' => 'Enter Nationality Here', 'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Passport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passport', 'Passport/ID:') !!}
    {!! Form::text('passport', null, ['class' => 'form-control', 'placeholder' => 'Enter Passport/ID Here', 'maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'Enter UserID Here','maxlength' => 255,'maxlength' => 255]) !!}
</div>


<!-- Dateregistered Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateregistered', 'Dateregistered:') !!}
    {!! Form::text('dateregistered', null, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD: HH-MM-SS','id'=>'dateregistered']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateregistered').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Image Field -->
<div class="form-group col-sm-6">   
    {!! Form::label('image', 'Teacher Image:') !!}
    {!!Html::image('/storage/images/', null, ['class'=>'teacher-image', 'id'=>'showImage'])!!}
    <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
</div>

<!-- Status Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div> --}}

<!-- marital status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Single:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::radio('status', '0', null) !!}
    </label>
    <!-- Status Field -->
    {!! Form::label('status', 'Married:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::radio('status', '1', null) !!}
    </label>

    {{-- {!! Form::label('status', 'Divorced:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::radio('status', '2', null) !!}
    </label> --}}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('teachers.index') }}" class="btn btn-default">Cancel</a>
</div>

@section('script')
<script type="text/javascript">
    $('#browse_file').on('click', function(){
        $('#image').click();
    })
    $('image').on('change', function(e){
        showFile(this, 'showImage');
    })

    function showFile(fileInput,img,showName){
        if(fileInput.file[0]){
            var reader = new FileReader();
            reader.onload = function(e){
                $(img).attr('src', e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);
        }
        $(showName).text(fileInput.files[0].name)
    };
</script>
    
@endsection