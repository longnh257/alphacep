@extends('layouts.master')

@section('title', 'Project Trainee')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('label.project_trainee_edit') }}</h4>
    </div>
    <div class="main-dashboard-header-right">
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                    <i class="bi bi-save"></i>
                </button>
            </div>
            <div class="pe-1 mb-xl-0">
                <a href="{{route('view.project.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
                    <i class="bi bi-box-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card    pt-4">

            <div class="card-body">


                <div class="tab-content">

                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger mx-2" role="alert">
                        {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <form action="{{route('view.project_trainee.update', ['id' => $project_trainee->project_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                        @method('PUT')
                        @csrf
                        <div class="row gy-4">

                            <div class="col-sm-12">
                                <label for="project_id" class="form-label required">{{ trans('label.project_id') }}</label>
                                <input type="number" class="form-control" value="{{$project_trainee->project_id}}" disabled>
                            </div>
                            <div class="col-sm-12">
                                <label for="trainee" class="form-label required">{{ trans('label.trainee') }}</label>
                                <input type="number" class="form-control" value="{{$project_trainee->trainee_id}}" disabled>
                            </div>

                            <div class="col-sm-12">
                                <label for="sending_agency" class="form-label ">{{ trans('label.sending_agency') }}</label>
                                <select class="form-control" data-trigger name="sending_agency" id="sending_agency">
                                    @foreach ($sending_agency as $item)
                                    <option value="{{$item->sending_agency_id}}" @if($project_trainee->sending_agency_id == $item->sending_agency_id ) selected @endif>ID: {{$item->sending_agency_id}} - Name: {{$item->representative_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <label for="training_facility" class="form-label ">{{ trans('label.training_facility') }}</label>
                                <select class="form-control" data-trigger name="training_facility" id="training_facility">
                                    @foreach ($training_facility as $item)
                                    <option value="{{$item->training_facility_id}}" @if($project_trainee->training_facility_id == $item->training_facility_id ) selected @endif>ID: {{$item->training_facility_id}} - Name: {{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="btn-list">
                                <button type="submit" class="btn btn-primary ">{{ trans('label.submit') }}</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- row -->


@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection