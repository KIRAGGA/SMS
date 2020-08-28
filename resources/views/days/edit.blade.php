@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Day
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($day, ['route' => ['days.update', $day->day_id], 'method' => 'patch']) !!}

                    <div class="form-group col-md-12">
                        <span class="input-group-addon">Days</span>
                        {!! Form::text('name', null, ['form-control', 'placeholder' => 'Enter Day Here', 'maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('day.index') }}" class="btn btn-default">Cancel</a>
                        {!! Form::submit('Update Days', ['class' => 'btn btn-info'])!!}
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection