@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left"><i class="fa fa-book"></i> Teachers</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('teachers.create') }}"><i class="fa fa-plus-circle"></i>Add New Teacher</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('teachers.table')
            <form action="{{route('teachers.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('teachers.fields')
            </form>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

