@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Department
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($department, ['route' => ['departments.update', $department->department_id], 'method' => 'patch']) !!}

                        {{-- @include('departments.fields') --}}
                        <!-- Level Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('level', 'Level:') !!}
                        {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>

                    <!-- Course Id Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('Course', 'Course:') !!}
                        <select name="course_id" id="course_id" class="form-control">
                            <option value="">Select Course</option>
                            {{-- adding a foreach loop to select the data from the database --}}
                            @foreach ($course as $key => $cou)
                                <option value="{{$cou->course_id}}">{{$cou->course_name}}</option>
                            @endforeach
                        </select>
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

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection