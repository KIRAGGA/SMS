@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Batch
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($batch, ['route' => ['batches.update', $batch->batch_id], 'method' => 'patch']) !!}

                        <!-- Batch Field -->
                        <div class="form-group col-md-10">
                            {!! Form::text('year', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                        </div>
                                </div>
                        <!-- Submit Field -->
                        <div class="modal-footer">
                            {!! Form::submit('Create Batch', ['class' => 'btn btn-success']) !!}
                            {{-- <a href="{{ route('batches.index') }}" class="btn btn-default">Cancel</a> --}}
                        </div>

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection