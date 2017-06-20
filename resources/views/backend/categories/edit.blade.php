@extends('layouts.backend.main')

@section('title',' MyBlog | Edit Category ')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categories
                <small>Edit Category </small>
            </h1>
            <ol class="breadcrumb">
                <li> <a href="{{ url('/home') }}"> <i class="fa fa-dashboard"></i> </a> Dashboard </li>
                <li> <a href="{{ route('categories.index') }}">Categories</a> </li>
                <li class="active"> Edit Categories </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                {!! Form::model($category,[
                               'method'=>'PUT',
                               'route'=>['categories.update',$category->id],
                               'files'=>TRUE,
                               'id'=>'post-form'
                           ]) !!}
                @include('backend.categories.form')
                {!! Form::close() !!}
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@include('backend.categories.script')


