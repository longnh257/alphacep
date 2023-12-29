@extends('layouts.master')

@section('title', 'Project')

@section('content')
<form action="{{route('view.project_trainee.store',['project_id' => $project->project_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('project_trainee.project_add') }}</h4>
        </div>
        <div class="main-dashboard-header-right">
            <div class="d-flex my-xl-auto right-content align-items-center">
                <div>
                    <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                        <i class="bi bi-save"></i>
                    </button>
                </div>
                <div>
                    <a href="{{route('view.project.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
                        <i class="bi bi-box-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- row -->
    <!-- Start:: row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        {{ trans('project_trainee.project_info') }}
                    </div>
                </div>

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger mx-4" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif


                <div class="card-body">
                    <div class="row gy-4">


                        <div class="col-sm-12">
                            <label for="project_id" class="form-label required">{{ trans('project_trainee.project_id') }}</label>
                            <input type="number" class="form-control" value="{{$project->project_id}}" disabled>
                        </div>

                        <div class="col-sm-12">
                            <label for="trainee" class="form-label ">{{ trans('project_trainee.trainee') }}</label>
                            <select class="form-control" data-trigger name="trainee_id" id="trainee">
                                <option value="">{{ trans('project_trainee.choose_trainee') }}</option>
                                @foreach ($trainee as $item)
                                <option value="{{$item->trainee_id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="sending_agency" class="form-label ">{{ trans('project_trainee.sending_agency') }}</label>
                            <select class="form-control" data-trigger name="sending_agency_id" id="sending_agency">
                                @foreach ($sending_agency as $item)
                                <option value="{{$item->sending_agency_id}}">{{$item->representative_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="training_facility" class="form-label ">{{ trans('project_trainee.training_facility') }}</label>
                            <select class="form-control" data-trigger name="training_facility_id" id="training_facility">
                                @foreach ($training_facility as $item)
                                <option value="{{$item->training_facility_id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="stay_facility" class="form-label ">{{ trans('project_trainee.stay_facility') }}</label>
                            <select class="form-control" data-trigger name="stay_facility_id" id="stay_facility">
                                @foreach ($stay_facility as $item)
                                <option value="{{$item->stay_facility_id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-list">
                            <button type="submit" class="btn btn-primary ">{{ trans('common.submit') }}</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-1 -->
    <!-- row closed -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div></div>
        <div class="main-dashboard-header-right">
            <div class="d-flex my-xl-auto right-content align-items-center">
                <div>
                    <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                        <i class="bi bi-save"></i>
                    </button>
                </div>
                <div>
                    <a href="{{route('view.project.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
                        <i class="bi bi-box-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection