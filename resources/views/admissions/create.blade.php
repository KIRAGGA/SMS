@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Admission
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {{-- {!! Form::open(['route' => 'admissions.store', 'enctype' => 'multipart/form-data']) !!} --}}

                <form action="{{route('admissions.store')}}" method="post" enctype="multipart/form-data">

                        @include('admissions.fields')
                </form>

                    {{-- {!! Form::close() !!} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
