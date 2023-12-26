@extends('layouts.master')

@section('title', 'Project Document')

@section('content')
<form action="{{route('view.project_document.store',$project_trainee->project_trainee_id)}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('label.project_document_add') }}</h4>
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


                <div class="card-body" id='list-data'>
                    <div class="row gy-4">


                        <div class="col-sm-12">
                            <label for="project_id" class="form-label required">{{ trans('label.project_id') }}</label>
                            <input type="number" class="form-control" value="" disabled>
                        </div>


                        <span class="mb-0">{{trans('label.document_attributes') }}</span>
                        <table class="table table-striped table-bordered mt-0 mb-0 mx-2 text-nowrap gridjs-table">
                            <thead class="gridjs-thead">
                                <tr class="gridjs-tr">
                                    <th class="gridjs-th gridjs-th-sort " style="width: 70px;">
                                        <div class="flex-between-center">
                                            <div class="gridjs-th-content">{{ trans('label.no') }}</div>
                                        </div>
                                    </th>
                                    <th class="gridjs-th gridjs-th-sort ">
                                        <div class="flex-between-center">
                                            <div class="gridjs-th-content">{{ trans('label.name') }}</div>
                                            <button class="btn btn-outline-light btn-wave waves-effect waves-light">
                                                <i class="fe fe-maximize-2"></i>
                                            </button>
                                        </div>
                                    </th>

                                    <th class="gridjs-th gridjs-th-sort">
                                        <div class="flex-between-center">
                                            <div class="gridjs-th-content">{{ trans('label.value') }}</div>
                                            <button class="btn btn-outline-success btn-wave waves-effect waves-light">
                                                <i class="fe fe-arrow-down"></i>
                                            </button>
                                        </div>
                                    </th>

                                    <th class="text-end" style="width: 50px;">
                                        <a @click="addAttr()" class="btn btn-info btn-icon me-2 btn-b">
                                            <i class="fe fe-plus"></i></a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in attribute_no" :class="'attr-' + item" :key="item">
                                    <td class="text-center">((item))</td>
                                    <td class="fw-medium">
                                        <input type="text" :name="'attr[' + item + '][name]'" class="form-control" value="">
                                    </td>
                                    <td class="fw-medium">
                                        <input type="text" :name="'attr[' + item + '][value]'" class="form-control" value="">
                                    </td>
                                    <td>
                                        <div class="hstack gap-2 flex-wrap justify-content-center" v-if="item != '1'">
                                            <a href="##" @click="deleteAttr(item)" class="text-danger fs-14 lh-1"><i class="ri-delete-bin-5-line"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

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



<script type="text/javascript">
    var CSRF_TOKEN = jQuery('meta[name="csrf-token"]').attr('content');
    var S_HYPEN = "-";
    var options = {}
    var notifier = new AWN(options);

    new Vue({
        el: '#list-data',
        data: {
            attribute_no: [1],
        },
        delimiters: ["((", "))"],
        mounted() {

        },
        computed: {},
        methods: {
            addAttr() {
                const newItem = Math.max(...this.attribute_no) + 1;
                this.attribute_no.push(newItem);
            },
            deleteAttr(item) {
                /*  cl = '.attr-' + item
                 jQuery(cl).remove() */
                const index = this.attribute_no.indexOf(item);
                if (index !== -1) {
                    this.attribute_no.splice(index, 1);
                }
            },
        }

    });
</script>

@endsection