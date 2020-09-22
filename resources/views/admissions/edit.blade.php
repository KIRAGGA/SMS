@extends('layouts.app')
{{-- 
@section('content')
    <section class="content-header">
        <h1>
            Admission
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($admission, ['route' => ['admissions.update', $admission->student_id], 'method' => 'patch']) !!}

                        @include('admissions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection --}}

<!-- Modal -->
<div class="modal fade" id="Editadmission-add-modal" tabindex="-1" role="dialog" 
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width:90%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" 
                aria-hidden="true">&times;
                </button>
                <h4 class="modal-title">Edit adimission</h4>
            </div>

            <div class="modal-body" style="border-bottom: 1px solid #ccc;">
                <div class="form-group">

                    <form action="{{route('admissions.update', 'student_id')}}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="row"></div>
                    {{-- this will hide input for the schedule id --}}
            {{-- <input type="hidden" name="student_id" id="student_id"> --}}
            <!-- batch No Field -->
            <div class="form-group col-sm-6">
                {{-- <select name="batch_id" id="batch_id" class="form-control">
                    <option value="0" selected="true" disabled="true">Select batch</option> 
                    @foreach ($batches as $ro)
                        <option value="{{$ro->batch_id}}">{{$ro->year}}</option>
                    @endforeach
                </select> --}}
            </div>

            <!-- First Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('first_name', 'First Name:') !!}
                {!! Form::text('first_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Last Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('last_name', 'Last Name:') !!}
                {!! Form::text('last_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Father Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('father_name', 'Father Name:') !!}
                {!! Form::text('father_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Father Phone Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('father_phone', 'Father Phone:') !!}
                {!! Form::text('father_phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Mother Name Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('mother_name', 'Mother Name:') !!}
                {!! Form::text('mother_name', null, ['class' => 'form-control', 'placeholder' => 'Enter mothers name', 'maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Mother Phone Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('mother_phone', 'Mother Phone:') !!}
                {!! Form::text('mother_phone', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Gender Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('gender', 'Male:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('gender', 0) !!}
                    {!! Form::radio('gender', '0', null) !!}
                </label>
                <!-- gender Field -->
                {!! Form::label('gender', 'Female:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('gender', 0) !!}
                    {!! Form::radio('gender', '1', null) !!}
                </label>
            </div>

            <!-- Email Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email', 'maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Dob Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('dob', 'Dob:') !!}
                {!! Form::text('dob', null, ['class' => 'form-control', 'placeholder' => 'Enter Date of birth', 'id'=>'dob']) !!}
            </div>

            @push('scripts')
                <script type="text/javascript">
                    $('#dob').datetimepicker({
                        format: 'YYYY-MM-DD HH:mm:ss',
                        useCurrent: true,
                        sideBySide: true
                    })
                </script>
            @endpush

            <!-- Phone Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter Phone number', 'maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Passport Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('passport', 'Passport:') !!}
                {!! Form::text('passport', null, ['class' => 'form-control', 'placeholder' => 'Enter Passport number', 'maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Nationality Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('nationality', 'Nationality:') !!}
                {!! Form::text('nationality', null, ['class' => 'form-control', 'placeholder' => 'Enter Nationality','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- Address Field -->
            <div class="form-group col-sm-12 col-lg-6">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Current Address Field -->
            <div class="form-group col-sm-12 col-lg-6">
                {!! Form::label('current_address', 'Current Address:') !!}
                {!! Form::textarea('current_address', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Status Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('status', 'Status:') !!}
                <label class="checkbox-inline">
                    {!! Form::hidden('status', 0) !!}
                    {!! Form::checkbox('status', '1', null) !!}
                </label>
            </div>

            <!-- Dateregistered Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('dateregistered', 'Dateregistered:') !!}
                {{-- {!! Form::text('dateregistered', null, ['class' => 'form-control','id'=>'dateregistered']) !!} --}}

                {{-- <input type="text" name="username" id="username" value="{{sprintf('%010b', $student_id)}}">
                <input type="text" name="password" id="password" value="{{sprintf('%010b', $student_id)}}">
                <input type="text" name="password" id="password" value="{{sprintf('%010b', $student_id)}}"> --}}
                <input type="hidden" value="{{Auth::id()}}" name="user_id" id="user_id" required>
            <input type="hidden" name="dateregistered" id="dateregistered" value="{{date('Y-m-d')}}">
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

            <!-- User Id Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('user_id', 'User Id:') !!}
                {!! Form::text('user_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

            <!-- department Id Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('department_id', 'Department Id:') !!}
                {!! Form::number('department_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                {{-- <select name="department_id" id="department_id" class="form-control">
                    <option value="0" selected="true" disabled="true">Select Department</option> 
                    @foreach ($departments as $department)
                        <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                    @endforeach
                </select> --}}
            </div>


            <!-- Faculty Field-->
            <div class="form-group col-sm-6">
                {!! Form::label('faculty_id', 'Faculty Id:') !!}
                {!! Form::number('faculty_id', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            {{-- <select name="faculty_id" id="faculty_id" class="form-control">
                <option value="0" selected="true" disabled="true">Select Faculty</option> 
            @foreach ($faculties as $faculty)
                    <option value="{{$faculty->faculty_id}}">{{$faculty->faculty_name}}</option>
                @endforeach
            </select> --}}

            <!-- Image Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('image', 'Image:') !!}
                {{-- {!! Form::text('image', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!} --}}
                <input type="file" name="image" id="image" accept="image/x-png,image/png,image/jpg,image/jpeg">
            </div>
            </div>
        </div>
        <div class="modal-footer">
            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Update class admission', ['class' => 'btn btn-success btn-sm']) !!}
                <a href="{{ route('admissions.index') }}" class="btn btn-warning">Cancel</a>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>