@extends('layout.master')
@section('parentPageTitle', 'My Dashboard')
@section('title2', 'User')
@section('title', 'Update')


@section('content')

<div class="row clearfix">




    <div class="col-lg-12 col-md-12">

        <form>
            <div class="row ">
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-lg-12 col-md-12 my-4">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-lg-6 col-md-12 my-4">
                    <input type="password" class="form-control" placeholder="password">
                </div>
                <div class="col-lg-6 col-md-12 my-4">
                    <input type="password" class="form-control" placeholder="confirm password">
                </div>


                <div class="col-md-3">
                    <div class="card">
                        <div class="body">
                            <input type="file" class="dropify">
                        </div>
                    </div>
                </div>
            </div>



            <button type="submit" class="btn btn-info mb-2" title="Update"> <i class="icon-plus"></i> <span>Update</span></button>

        </form>
    </div>

</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>

@stop