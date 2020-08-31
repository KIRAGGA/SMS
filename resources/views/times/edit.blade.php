@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Time
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($time, ['route' => ['times.update', $time->time_id], 'method' => 'patch']) !!}

                        <!-- Time Field -->
                        <div class="form-group col-md-8">
                            {{-- <span class="input-group-addon">Class Code</span> --}}
                            {!! Form::text('time', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>

                        <!-- Submit Field -->
                        <div class="modal-footer">
                            {!! Form::submit('Updated Time', ['class' => 'btn btn-success']) !!}
                            <a href="{{ route('times.index') }}" class="btn btn-default">Cancel</a>
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection