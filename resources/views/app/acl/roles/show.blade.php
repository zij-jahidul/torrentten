@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mt-3">
                <div class="card-header">
                    <h4 class="m-0 float-left">roles</h4>

                    <a href="{{ URL::previous() }}" class="float-right btn btn-outline-warning btn-sm">
                        <i class="zmdi zmdi-arrow-left zmdi-hc-lg"></i> Go Back
                    </a>
                </div>
                <div class="card-body torrent-list" id="globalModal">
                    <span class="load-overlay"></span>

                    <form action="JavaScript:void(0)" method="post" id="globalForm" class="form-horizontal pageLoad" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group print-error-msg" style="display:none">
                            <a href="{{ route('roles.index') }}" id="redirectPath"></a>
                            <div class="row ml-0 mr-0">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="name"> Name : </label>
                                    <input type="text" name="name" id="name" class="form-control" required="true" autocomplete="nofill" value="{!! $role->name !!}" disabled="true">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="avatar"> Color : </label>
                                    <input type="color" name="color" id="color" class="form-control" required="true" value="{!! $role->color !!}" disabled="true">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating" for="description"> Description : </label>
                                    <div class="border p-3">
                                        {!! $role->getDescription() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 ml-auto">
                                <a href="{{ URL::previous() }}" id="closeBtn" class="form-control btn btn-danger float-left pt-2 pb-2 mr-1"><i class="zmdi zmdi-arrow-left zmdi-hc-lg"></i> Go Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
