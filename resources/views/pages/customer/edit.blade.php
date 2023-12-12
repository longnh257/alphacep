@extends('layouts.master')

@section('title', 'Trang chủ')

@section('content')
<form action="{{route('view.customer.update', ['id' => $customer->customer_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @method('PUT')
    @csrf
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

    <!-- row -->
    <!-- Start:: row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Thông tin khách hàng
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
                    <a href="{{route('view.customer.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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