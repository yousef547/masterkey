@extends('layout.master')
@section('parentPageTitle', 'My Dashboard')
@section('title2', 'Role')
@section('title', 'Update')


@section('content')

<div class="row clearfix">



    <div class="col-lg-12 col-md-12">

        <form>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-lg-12 col-md-12 my-4">
                    <textarea type="text" class="form-control" placeholder="Description"></textarea>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="header">
                    <h2>permission</h2>
                </div>
                <div class="body">
                    <div class="header">
                        <h2>ٌrole</h2>
                    </div>
                    <div class="row clearfix">

                        <div class="col-lg-12 col-md-12 d-flex">
                            <div class="fancy-checkbox col-lg-4 col-md-6">
                                <label><input type="checkbox"><span>Fancy Checkbox 1</span></label>
                            </div>
                            <div class="fancy-checkbox col-lg-4 col-md-6">
                                <label><input type="checkbox" checked=""><span>Fancy Checkbox 2</span></label>
                            </div>
                            <div class="fancy-checkbox col-lg-4 col-md-6">
                                <label><input type="checkbox"><span>Fancy Checkbox 3</span></label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="body">
                    <div class="header">
                        <h2>ٌrole</h2>
                    </div>
                    <div class="row clearfix">

                        <div class="col-lg-12 col-md-12 d-flex">
                            <div class="fancy-checkbox col-lg-4 col-md-6">
                                <label><input type="checkbox"><span>Fancy Checkbox 1</span></label>
                            </div>
                            <div class="fancy-checkbox col-lg-4 col-md-6">
                                <label><input type="checkbox" checked=""><span>Fancy Checkbox 2</span></label>
                            </div>
                            <div class="fancy-checkbox col-lg-4 col-md-6">
                                <label><input type="checkbox"><span>Fancy Checkbox 3</span></label>
                            </div>
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
@stop

@section('page-script')

@stop