@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Academic
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($academic, ['route' => ['academics.update', $academic->academic_id], 'method' => 'patch']) !!}

                                 <!-- Academic Year Field -->
                        <div class="input-group col-md-12">
                            {!! Form::label('academic_year', 'Academic Year:') !!}
                            {!! Form::text('academic_year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Submit Field -->
                <div class="modal-footer">
                    <a href="{{ route('academics.index') }}" class="btn btn-default">Cancel</a>
                    {!! Form::submit('Update Academics', ['class' => 'btn btn-success']) !!}
        
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection