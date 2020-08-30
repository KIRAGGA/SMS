@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Shift
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($shift, ['route' => ['shifts.update', $shift->shift_id], 'method' => 'patch']) !!}

                        <!-- Shift Field -->
                    <div class="form-group col-sm-6">
                        {!! Form::label('shift_name', 'Shift:') !!}
                        {!! Form::text('shift_name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                    </div>
                </div>
                    <!-- Submit Field -->
                    <div class="modal-footer">
                        
                        <a href="{{ route('shifts.index') }}" class="btn btn-default">Cancel</a>
                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                    </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection