@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class="pull-left"><i class="fa fa-user">Add New Teacher</i></h1>
    <h1 class="pull-right">
       <a data-target="#teacher-add-modal" data-toggle="modal" class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px"><i class="fa fa-plus-circle"></i>Add New Teacher</a>
    </h1>
</section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('teachers.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

