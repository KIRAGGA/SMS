@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Classes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classes, ['route' => ['classes.update', $classes->id], 'method' => 'patch']) !!}

                       
                        <!-- Class Name Field -->
                        <div class="form-group col-md-6">
                            <span class="input-group-addon">Class Name</span>
                            {!! Form::text('class_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Class Code Field -->
                        <div class="form-group col-md-6">
                            <span class="input-group-addon">Class Code</span>
                            {!! Form::text('class_code', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="modal-footer">
                            <a href="{{ route('classes.index') }}" class="btn btn-default">Cancel</a>
                            {!! Form::submit('Create Class', ['class' => 'btn btn-info']) !!}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection