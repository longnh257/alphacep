@extends('layouts.master')

@section('title', 'Project')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('label.project_edit') }}</h4>
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
                    <form action="{{route('view.project.update', ['id' => $project->project_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                        @method('PUT')
                        @csrf
                        <div class="row gy-4">
                            <div class="col-sm-12">
                                <label for="trainee_number" class="form-label required">{{ trans('label.trainee_number') }}</label>
                                <input type="number" class="form-control" name="trainee_number" id="trainee_number" value="{{ $project->trainee_number }}" placeholder="{{ trans('label.trainee_number') }}">
                            </div>

                            <div class="col-sm-12">
                                <label for="entry_date" class="form-label required">{{ trans('label.entry_date') }}</label>
                                <input type="date" class="form-control" name="entry_date" id="entry_date" value="{{ $project->entry_date }}" placeholder="{{ trans('label.entry_date') }}">
                            </div>

                            <div class="col-sm-12">
                                <label for="sending_agency_id" class="form-label ">{{ trans('label.sending_agency') }}</label>
                                <select class="form-control" data-trigger name="sending_agency_id" id="sending_agency_id">
                                    <option value="">{{ trans('label.choose_sending_agency') }}</option>
                                    @foreach ($sending_agency as $item)
                                    <option value="{{$item->sending_agency_id}}" @if($project->sending_agency_id == $item->sending_agency_id ) selected @endif>{{$item->sending_agency_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <label for="company_id" class="form-label ">{{ trans('label.company') }}</label>
                                <select class="form-control" data-trigger name="company_id" id="company_id">
                                    <option value="">{{ trans('label.choose_company') }}</option>
                                    @foreach ($company as $item)
                                    <option value="{{$item->company_id}}"  @if($project->company_id == $item->company_id ) selected @endif>{{$item->company_name}}</option>
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