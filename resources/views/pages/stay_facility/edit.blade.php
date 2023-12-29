@extends('layouts.master')

@section('title', 'Stay Facility')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('stay_facility.stay_facility_edit') }}</h4>
    </div>
    <div class="main-dashboard-header-right">
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div>
                <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                    <i class="bi bi-save"></i>
                </button>
            </div>
            <div>
                <a href="{{route('view.stay_facility.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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
                    <form action="{{route('view.stay_facility.update', ['id' => $model->stay_facility_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                        @method('PUT')
                        @csrf
                        <div class="row gy-4">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="name" class="form-label">{{ trans('label.name') }}</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $model->name }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="stay_facility_form_div" class="form-label">{{ trans('label.stay_facility_form_div') }}</label>
                                <select class="form-control" name="stay_facility_form_div" id="stay_facility_form_div">
                                    <option value="01" {{ $model->stay_facility_form_div === '01' ? 'selected' : '' }}>寮</option>
                                    <option value="02" {{ $model->stay_facility_form_div === '02' ? 'selected' : '' }}>賃貸住宅</option>
                                    <option value="99" {{ $model->stay_facility_form_div === '99' ? 'selected' : '' }}>その他</option>
                                </select>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="stay_facility_form_detail" class="form-label">{{ trans('label.stay_facility_form_detail') }}</label>
                                <input type="text" class="form-control" name="stay_facility_form_detail" id="stay_facility_form_detail" value="{{ $model->stay_facility_form_detail }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="contributor_div" class="form-label">{{ trans('label.contributor_div') }}</label>
                                <select class="form-control" name="contributor_div" id="contributor_div">
                                    <option value="01" {{ $model->contributor_div === '01' ? 'selected' : '' }}>実施者</option>
                                    <option value="02" {{ $model->contributor_div === '02' ? 'selected' : '' }}>監理団体</option>
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="contributor_name" class="form-label">{{ trans('label.contributor_name') }}</label>
                                <input type="text" class="form-control" name="contributor_name" id="contributor_name" value="{{ $model->contributor_name }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="tel" class="form-label">{{ trans('label.tel') }}</label>
                                <input type="text" class="form-control" name="tel" id="tel" value="{{ $model->tel }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="postcode" class="form-label">{{ trans('label.postcode') }}</label>
                                <input type="text" class="form-control" name="postcode" id="postcode" value="{{ $model->postcode }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="address1" class="form-label">{{ trans('label.address1') }}</label>
                                <input type="text" class="form-control" name="address1" id="address1" value="{{ $model->address1 }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="address2" class="form-label">{{ trans('label.address2') }}</label>
                                <input type="text" class="form-control" name="address2" id="address2" value="{{ $model->address2 }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="total_area" class="form-label">{{ trans('label.total_area') }}</label>
                                <input type="text" class="form-control" name="total_area" id="total_area" value="{{ $model->total_area }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="trainee_number" class="form-label">{{ trans('label.trainee_number') }}</label>
                                <input type="text" class="form-control" name="trainee_number" id="trainee_number" value="{{ $model->trainee_number }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="house_density" class="form-label">{{ trans('label.house_density') }}</label>
                                <input type="text" class="form-control" name="house_density" id="house_density" value="{{ $model->house_density }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="trainee_charge_detail" class="form-label">{{ trans('label.trainee_charge_detail') }}</label>
                                <input type="text" class="form-control" name="trainee_charge_detail" id="trainee_charge_detail" value="{{ $model->trainee_charge_detail }}">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="other_note" class="form-label">{{ trans('label.other_note') }}</label>
                                <input type="text" class="form-control" name="other_note" id="other_note" value="{{ $model->other_note }}">
                            </div>

                            <div class="btn-list">
                                <button type="submit" class="btn btn-primary ">{{ trans('common.submit') }}</button>
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