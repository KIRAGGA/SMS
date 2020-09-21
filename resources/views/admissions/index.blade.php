@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Admissions</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" 
            data-toggle="modal" data-target="#admission-add-modal"><i class="fa fa-plus-circle">Add New Admission</i></a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admissions.table')
            </div>
        </div>
        <div class="text-center">
            {!! Form::open(['route' => 'admissions.store']) !!}

            @include('admissions.fields')

        {!! Form::close() !!}
        </div>
    </div>
@endsection

