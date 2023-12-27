@extends('layouts.master')

@section('title', 'WorkFlow')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('label.workflow_edit') }}</h4>
    </div>
    <div class="main-dashboard-header-right">
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div>
                <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                    <i class="bi bi-save"></i>
                </button>
            </div>
            <div>
                <a href="{{route('view.workflow.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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
                    <form action="{{route('view.workflow.update', ['id' => $workflow->flow_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                        @method('PUT')
                        @csrf
                        <div class="row gy-4">
                            <div class="col-sm-12">
                                <label for="name" class="form-label required">{{ trans('label.name') }}</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $workflow->name }}" placeholder="{{ trans('label.name') }}">
                            </div>

                            <div class="col-sm-12">
                                <label for="flowgroup_id" class="form-label ">{{ trans('label.sending_agency') }}</label>
                                <select class="form-control" data-trigger name="flowgroup_id" id="flowgroup_id">
                                    <option value="1" @if($workflow->flowgroup_id == 1 ) selected @endif>入国手続</option>
                                    <option value="2" @if($workflow->flowgroup_id == 2 ) selected @endif>技能実習</option>
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