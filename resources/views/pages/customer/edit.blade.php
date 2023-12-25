@extends('layouts.master')

@section('title', 'Trang chủ')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">Thêm Khách hàng</h4>
        <p class="mb-0 text-muted">Mô tả ngắn về chức năng thêm khách hàng</p>
    </div>
    <div class="main-dashboard-header-right">
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                    <i class="bi bi-save"></i>
                </button>
            </div>
            <div class="pe-1 mb-xl-0">
                <a href="{{route('view.customer.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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
                <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#customer" aria-current="page" href="#customer"> Thông tin khách hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#office" href="#office">Thông tin office</a>
                    </li>
                </ul>

                <div class="tab-content">


                    <div class="tab-pane active" id="customer" role="customer">

                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mx-2" role="alert">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif
                        <form action="{{route('view.customer.update', ['id' => $customer->customer_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                            @method('PUT')
                            @csrf
                            <div class="row gy-4">
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="name" class="form-label required">{{ trans('label.name') }}</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $customer->name }}" placeholder="{{ trans('label.name') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="name_kana" class="form-label  required">{{ trans('label.name_kana') }}</label>
                                    <input type="text" class="form-control" name="name_kana" id="name_kana" value="{{ $customer->name_kana }}" placeholder="{{ trans('label.name_kana') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="tel" class="form-label required">{{ trans('label.tel') }}</label>
                                    <input type="text" class="form-control" name="tel" id="tel" max="10" min="10" value="{{ $customer->tel }}" placeholder="{{ trans('label.tel') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="fax" class="form-label">{{ trans('label.fax') }}</label>
                                    <input type="text" class="form-control" name="fax" id="fax" value="{{ $customer->fax }}" placeholder="{{ trans('label.fax') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="postcode" class="form-label">{{ trans('label.postcode') }}</label>
                                    <input type="text" class="form-control" name="postcode" id="postcode" value="{{ $customer->postcode }}" placeholder="{{ trans('label.postcode') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="address1" class="form-label">{{ trans('label.address1') }}</label>
                                    <input type="text" class="form-control" name="address1" id="address1" value="{{ $customer->address1 }}" placeholder="{{ trans('label.address1') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="address2" class="form-label">{{ trans('label.address2') }}</label>
                                    <input type="text" class="form-control" name="address2" id="address2" value="{{ $customer->address2 }}" placeholder="{{ trans('label.address2') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="corporate_number" class="form-label">{{ trans('label.corporate_number') }}</label>
                                    <input type="text" class="form-control" name="corporate_number" id="corporate_number" value="{{ $customer->corporate_number }}" placeholder="{{ trans('label.corporate_number') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="office_area" class="form-label">{{ trans('label.office_area') }}</label>
                                    <input type="text" class="form-control" name="office_area" id="office_area" value="{{ $customer->office_area }}" placeholder="{{ trans('label.office_area') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="supervion_business_type" class="form-label">{{ trans('label.supervion_business_type') }}</label>
                                    <input type="text" class="form-control" name="supervion_business_type" id="supervion_business_type" value="{{ $customer->supervion_business_type }}" placeholder="{{ trans('label.supervion_business_type') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="supervion_license_number" class="form-label">{{ trans('label.supervion_license_number') }}</label>
                                    <input type="text" class="form-control" name="supervion_license_number" id="supervion_license_number" value="{{ $customer->supervion_license_number }}" placeholder="{{ trans('label.supervion_license_number') }}">
                                </div>



                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="external_audit" class="form-label">{{ trans('label.external_audit') }}</label>
                                    <input type="text" class="form-control" name="external_audit" id="external_audit" value="{{ $customer->external_audit }}" placeholder="{{ trans('label.external_audit') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="external_audit_person" class="form-label">{{ trans('label.external_audit_person') }}</label>
                                    <input type="text" class="form-control" name="external_audit_person" id="external_audit_person" value="{{ $customer->external_audit_person }}" placeholder="{{ trans('label.external_audit_person') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="external_officer" class="form-label">{{ trans('label.external_officer') }}</label>
                                    <input type="text" class="form-control" name="external_officer" id="external_officer" value="{{ $customer->external_officer }}" placeholder="{{ trans('label.external_officer') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="corporate_type" class="form-label">{{ trans('label.corporate_type') }}</label>
                                    <input type="text" class="form-control" name="corporate_type" id="corporate_type" value="{{ $customer->corporate_type }}" placeholder="{{ trans('label.corporate_type') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="identifying_code" class="form-label">{{ trans('label.identifying_code') }}</label>
                                    <input type="text" class="form-control" name="identifying_code" id="identifying_code" value="{{ $customer->identifying_code }}" placeholder="{{ trans('label.identifying_code') }}">
                                </div>

                                <div class="  col-sm-12">
                                    <label for="overview" class="form-label">{{ trans('label.overview') }}</label>
                                    <textarea class="form-control" name="overview" id="overview" placeholder="{{ trans('label.overview') }}">{{ $customer->overview }}</textarea>
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="permission_date" class="form-label">{{ trans('label.permission_date') }}</label>
                                    <input type="date" class="form-control" name="permission_date" id="permission_date" value="{{ $customer->permission_date }}" placeholder="{{ trans('label.permission_date') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="planning_period_from_date" class="form-label">{{ trans('label.planning_period_from_date') }}</label>
                                    <input type="date" class="form-control" name="planning_period_from_date" id="planning_period_from_date" value="{{ $customer->planning_period_from_date }}" placeholder="{{ trans('label.planning_period_from_date') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="planning_period_to_date" class="form-label">{{ trans('label.planning_period_to_date') }}</label>
                                    <input type="date" class="form-control" name="planning_period_to_date" id="planning_period_to_date" value="{{ $customer->planning_period_to_date }}" placeholder="{{ trans('label.planning_period_to_date') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="permission_valid_from_date" class="form-label">{{ trans('label.permission_valid_from_date') }}</label>
                                    <input type="date" class="form-control" name="permission_valid_from_date" id="permission_valid_from_date" value="{{ $customer->permission_valid_from_date }}" placeholder="{{ trans('label.permission_valid_from_date') }}">
                                </div>

                                <div class=" col-lg-6 col-md-6 col-sm-12">
                                    <label for="permission_valid_to_date" class="form-label">{{ trans('label.permission_valid_to_date') }}</label>
                                    <input type="date" class="form-control" name="permission_valid_to_date" id="permission_valid_to_date" value="{{ $customer->permission_valid_to_date }}" placeholder="{{ trans('label.permission_valid_to_date') }}">
                                </div>

                                <div class="  col-sm-12">
                                    <label for="jobs_comment" class="form-label">{{ trans('label.jobs_comment') }}</label>
                                    <textarea class="form-control" name="jobs_comment" id="jobs_comment" placeholder="{{ trans('label.jobs_comment') }}">{{ $customer->jobs_comment }}</textarea>
                                </div>


                                <div class="  col-sm-12">
                                    <label for="note" class="form-label">{{ trans('label.note') }}</label>
                                    <textarea class="form-control" name="note" id="note" placeholder="{{ trans('label.note') }}">{{ $customer->note }}</textarea>
                                </div>

                                <div class="btn-list">
                                    <button type="submit" class="btn btn-primary ">{{ trans('label.submit') }}</button>
                                </div>

                            </div>
                        </form>
                    </div>
              
                    <div class="tab-pane" id="office" role="office">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-xl-12 mb-2">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12" id="list-data">

                                <div class="table-responsive country-table">
                                    <table class="table table-striped table-bordered mb-0 text-nowrap gridjs-table">
                                        <thead class="gridjs-thead">
                                            <tr class="gridjs-tr">
                                                <th class="gridjs-th gridjs-th-sort ">
                                                    <div class="flex-between-center">
                                                        <div class="gridjs-th-content">OFFICE ID</div>
                                                        <button class="btn btn-outline-light btn-wave waves-effect waves-light">
                                                            <i class="fe fe-arrow-down"></i>
                                                        </button>
                                                    </div>
                                                </th>

                                                <th class="gridjs-th gridjs-th-sort ">
                                                    <div class="flex-between-center">
                                                        <div class="gridjs-th-content">Name</div>
                                                        <button class="btn btn-outline-success btn-wave waves-effect waves-light">
                                                            <i class="fe fe-arrow-up"></i>
                                                        </button>
                                                    </div>
                                                </th>
                                                <th class="gridjs-th gridjs-th-sort ">
                                                    <div class="flex-between-center">
                                                        <div class="gridjs-th-content">Customer</div>
                                                        <button class="btn btn-outline-light btn-wave waves-effect waves-light">
                                                            <i class="fe fe-maximize-2"></i>
                                                        </button>
                                                    </div>
                                                </th>
                                                <th class="gridjs-th gridjs-th-sort">
                                                    <div class="flex-between-center">
                                                        <div class="gridjs-th-content">Tel</div>
                                                        <button class="btn btn-outline-success btn-wave waves-effect waves-light">
                                                            <i class="fe fe-arrow-down"></i>
                                                        </button>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="pe-1 mb-xl-0">
                                                        <a href="{{route('view.customer_office.create',['customer_id'=>$customer->customer_id])}}" class="btn btn-info btn-icon me-2 btn-b" target="_blank">
                                                            <i class="fe fe-plus"></i></a>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="item in list" :key="item.customer_id" >
                                                <td>((item.customer_office_id))</td>
                                                <td class="fw-medium">((item.name))</td>
                                                <td>((item.customer_id))</td>
                                                <td class="fw-medium">((item.tel))</td>
                                                <td>
                                                    <div class="hstack gap-2 flex-wrap justify-end">
                                                        <a :href="`{{asset('customer-office')}}/`+item.customer_office_id+`/edit`" class="text-info fs-14 lh-1"><i class="ri-edit-line"></i></a>
                                                        <form :action="`{{asset('customer-office')}}/`+item.customer_office_id" :id="'formDeleteOffice_'+((item.customer_office_id))" class="pt-1" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="##" @click="deleteOffice(item.customer_office_id)" class="text-danger fs-14 lh-1"><i class="ri-delete-bin-5-line"></i></a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="card-footer p-8pt">
                                        <ul class="pagination justify-content-start pagination-xsm m-0">

                                            <li class="page-item disabled" v-if="page <= 1">
                                                <button class="page-link" type="button" aria-label="Previous">
                                                    <i class="fe fe-arrow-left"></i>
                                                </button>
                                            </li>
                                            <li class="page-item" v-if="page > 1" @click="onPrePage()">
                                                <button class="page-link" type="button" aria-label="Previous">
                                                    <i class="fe fe-arrow-left"></i>
                                                </button>
                                            </li>


                                            <li class="page-item disabled" v-if="page > 3 ">
                                                <button class="page-link" type="button">
                                                    <span>...</span>
                                                </button>
                                            </li>
                                            <li class="page-item" v-for="item in listPage" v-if="page > (item - 3) && page < (item + 3) " @click="onPageChange(item)" v-bind:class="page == item ? 'active' : ''">
                                                <button class="page-link" type="button" aria-label="Page 1">
                                                    <span>((item))</span>
                                                </button>
                                            </li>


                                            <li class="page-item disabled" v-if="page > count - 1 || count == 1">
                                                <button class="page-link" type="button">
                                                    <i class="fe fe-arrow-right"></i>
                                                </button>
                                            </li>

                                            <li class="page-item" @click="onNextPage()" v-if="page <= count - 1 && count > 1">
                                                <button class="page-link" type="button">
                                                    <i class="fe fe-arrow-right"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            sortDirection: 'desc',
            sortBy: 'customer_id',
            count: 0,
            page: 1,
            list: [],
            conditionSearch: '',
            listPage: [],
            showCount: 10,
        },
        delimiters: ["((", "))"],
        mounted() {
            const that = this;
            this.onLoadPagination();
        },
        computed: {},

        methods: {
            sort: function(s) {
                if (s === this.sortBy) {
                    this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
                }
                this.sortBy = s;
            },
            onPageChange(_p) {
                this.page = _p;
                this.onLoadPagination();
            },
            onPrePage() {
                if (this.page > 1) {
                    this.page = this.page - 1;
                }
                this.onLoadPagination();
            },
            onNextPage() {
                if (this.page < this.count) {
                    this.page = this.page + 1;
                }
                this.onLoadPagination();
            },
            onLoadPagination() {
                const that = this;
                let conditionSearch = '?page=' + this.page;
                conditionSearch += '&showcount=' + this.showCount;
                conditionSearch += '&customer_id=' + `{{$customer->customer_id}}`;
                this.conditionSearch = conditionSearch;
                jQuery.ajax({
                    type: 'GET',
                    url: "{{route('api.customer_offices.list')}}" + conditionSearch,
                    success: function(data) {
                        that.list = data.result.data;
                        console.log(that.list);
                        that.count = data.result.last_page;
                        let pageArr = [];
                        if (that.page - 2 > 0) {
                            pageArr.push(that.page - 2);
                        }
                        if (that.page - 1 > 0) {
                            pageArr.push(that.page - 1);
                        }
                        pageArr.push(that.page);
                        if (that.page + 1 <= that.count) {
                            pageArr.push(that.page + 1);
                        }
                        if (that.page + 2 <= that.count) {
                            pageArr.push(that.page + 2);
                        }
                        that.listPage = pageArr;
                    },
                    error: function(xhr, textStatus, error) {
                        notifier.warning('システムエラーが発生しました。 大変お手数ですが、サイト管理者までご連絡ください');
                    }
                });
            },
            deleteOffice(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        jQuery('#formDeleteOffice_' + id).submit();
                    }
                })

            },
        },
    });
    new Vue({
        el: '#list-data2',
        data: {
            sortDirection: 'desc',
            sortBy: 'customer_id',
            count: 0,
            page: 1,
            list: [],
            conditionSearch: '',
            listPage: [],
            showCount: 10,
        },
        delimiters: ["((", "))"],
        mounted() {
            const that = this;
            this.onLoadPagination();
        },
        computed: {},

        methods: {
            sort: function(s) {
                if (s === this.sortBy) {
                    this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
                }
                this.sortBy = s;
            },
            onPageChange(_p) {
                this.page = _p;
                this.onLoadPagination();
            },
            onPrePage() {
                if (this.page > 1) {
                    this.page = this.page - 1;
                }
                this.onLoadPagination();
            },
            onNextPage() {
                if (this.page < this.count) {
                    this.page = this.page + 1;
                }
                this.onLoadPagination();
            },
            onLoadPagination() {
                const that = this;
                let conditionSearch = '?page=' + this.page;
                conditionSearch += '&showcount=' + this.showCount;
                conditionSearch += '&customer_id=' + `{{$customer->customer_id}}`;
                this.conditionSearch = conditionSearch;
                jQuery.ajax({
                    type: 'GET',
                    url: "{{route('api.companies.list')}}" + conditionSearch,
                    success: function(data) {
                        that.list = data.result.data;
                        console.log(that.list);
                        that.count = data.result.last_page;
                        let pageArr = [];
                        if (that.page - 2 > 0) {
                            pageArr.push(that.page - 2);
                        }
                        if (that.page - 1 > 0) {
                            pageArr.push(that.page - 1);
                        }
                        pageArr.push(that.page);
                        if (that.page + 1 <= that.count) {
                            pageArr.push(that.page + 1);
                        }
                        if (that.page + 2 <= that.count) {
                            pageArr.push(that.page + 2);
                        }
                        that.listPage = pageArr;
                    },
                    error: function(xhr, textStatus, error) {
                        notifier.warning('システムエラーが発生しました。 大変お手数ですが、サイト管理者までご連絡ください');
                    }
                });
            },
            deleteCompany(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        jQuery('#formDeleteCompany_' + id).submit();
                    }
                })

            },
        },
    });
</script>

@endsection