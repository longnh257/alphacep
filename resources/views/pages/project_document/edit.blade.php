@extends('layouts.master')

@section('title', 'Project Document')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('label.project_document_edit') }}</h4>
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
                    <div class="tab-pane active" id="project_document_info" role="project_document_info">

                        <form action="{{route('view.project_document.update', ['id' => $model->project_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                            @method('PUT')
                            @csrf
                            <div class="row gy-4">

                                <div class="col-sm-12">
                                    <label for="project_id" class="form-label required">{{ trans('label.project_id') }}</label>
                                    <input type="number" class="form-control" value="{{$model->project_id}}" disabled>
                                </div>

                                <div class="col-sm-12">
                                    <label for="work" class="form-label ">{{ trans('label.work') }}</label>
                                    <select class="form-control" data-trigger name="project_document_id" id="work">
                                        @foreach ($work as $item)
                                        <option value="{{$item->project_document_id}}" {{ $model->project_document_id == $item->project_document_id ? 'selected' : '' }}>ID: {{$item->project_document_id}} - Name: {{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <div class="col-sm-6">
                                        <label for="project_id" class="form-label required">{{ trans('label.project_id') }}</label>
                                        <input type="number" class="form-control" value="{{$model->project_id}}" disabled>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="project_id" class="form-label required">{{ trans('label.project_id') }}</label>
                                        <input type="number" class="form-control" value="{{$model->project_id}}" disabled>
                                    </div>
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
</div>
<!-- row -->


@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>


<script type="text/javascript">
    var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
    var S_HYPEN = "-";
    var options = {}
    var notifier = new AWN(options);

    new Vue({
        el: '#list-data',
        data: {
            attribute_no: 1,
        },
        delimiters: ["((", "))"],
        mounted() {

        },
        computed: {},

        methods: {

            addAttr() {
                this.attribute_no += 1;
            },

        },
    });
</script>

@endsection