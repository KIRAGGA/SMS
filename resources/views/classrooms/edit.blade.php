@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classroom
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classroom, ['route' => ['classrooms.update', $classroom->classroom_id], 'method' => 'patch']) !!}

                   <div class="form-group col-sm-6">
                    <span class="input-group-addon">Classroom Name</span>
                    {!! Form::text('classroom_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>
                
                <!-- Classcode Name Field -->
                <div class="form-group col-sm-6">
                    <span class="input-group-addon">Classcode Name</span>
                    {!! Form::number('classcode_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>
                
                <!-- Classroom Description Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    <span class="input-group-addon">Classroom Description</span>
                    {!! Form::textarea('classroom_description', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>
                
                <!-- Classroom Status Field -->
                <div class="form-group col-sm-6">
                    {!! Form::label('classroom_status', 'Classroom Status:') !!}
                    <label class="checkbox-inline">
                        {!! Form::hidden('classroom_status', 0) !!}
                        {!! Form::checkbox('classroom_status', '1', null) !!}
                    </label>
                </div>
                
                <div class="modal-footer">
                    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
                    {!! Form::submit('Update Classroom', ['class' => 'btn btn-info'])!!}
                </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection