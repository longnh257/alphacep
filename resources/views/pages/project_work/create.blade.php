@extends('layouts.master')

@section('title', 'Project')

@section('content')
<form action="{{route('view.project_work.store',['project_id' => $project->project_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('label.project_add') }}</h4>
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

    <!-- row -->
    <!-- Start:: row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        {{ trans('label.project_info') }}
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
                            <label for="project_id" class="form-label required">{{ trans('label.project_id') }}</label>
                            <input type="number" class="form-control" value="{{$project->project_id}}" disabled>
                        </div>

                        <div class="col-sm-12">
                            <label for="work" class="form-label ">{{ trans('label.work') }}</label>
                            <select class="form-control" data-trigger name="work_id" id="work">
                                @foreach ($work as $item)
                                <option value="{{$item->work_id}}">ID: {{$item->work_id}} - Name: {{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-list">
                            <button type="submit" class="btn btn-primary ">{{ trans('label.submit') }}</button>
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

</form>
@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection