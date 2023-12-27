@extends('layouts.master')

@section('title', 'Customer Office')

@section('content')
<form action="{{route('view.customer_office.store')}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('label.office_add') }}</h4>
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
                    {{ trans('label.office_info') }}
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
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="{{ trans('label.name') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="name_kana" class="form-label  required">{{ trans('label.name_kana') }}</label>
                            <input type="text" class="form-control" name="name_kana" id="name_kana" value="{{ old('name_kana') }}" placeholder="{{ trans('label.name_kana') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="tel" class="form-label required">{{ trans('label.tel') }}</label>
                            <input type="text" class="form-control" name="tel" id="tel" max="10" min="10" value="{{ old('tel') }}" placeholder="{{ trans('label.tel') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="fax" class="form-label">{{ trans('label.fax') }}</label>
                            <input type="text" class="form-control" name="fax" id="fax" value="{{ old('fax') }}" placeholder="{{ trans('label.fax') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="postcode" class="form-label">{{ trans('label.postcode') }}</label>
                            <input type="text" class="form-control" name="postcode" id="postcode" value="{{ old('postcode') }}" placeholder="{{ trans('label.postcode') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="address1" class="form-label">{{ trans('label.address1') }}</label>
                            <input type="text" class="form-control" name="address1" id="address1" value="{{ old('address1') }}" placeholder="{{ trans('label.address1') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="address2" class="form-label">{{ trans('label.address2') }}</label>
                            <input type="text" class="form-control" name="address2" id="address2" value="{{ old('address2') }}" placeholder="{{ trans('label.address2') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="corporate_number" class="form-label">{{ trans('label.corporate_number') }}</label>
                            <input type="text" class="form-control" name="corporate_number" id="corporate_number" value="{{ old('corporate_number') }}" placeholder="{{ trans('label.corporate_number') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="office_area" class="form-label">{{ trans('label.office_area') }}</label>
                            <input type="text" class="form-control" name="office_area" id="office_area" value="{{ old('office_area') }}" placeholder="{{ trans('label.office_area') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="office_number" class="form-label">{{ trans('label.office_number') }}</label>
                            <input type="text" class="form-control" name="office_number" id="office_number" value="{{ old('office_number') }}" placeholder="{{ trans('label.office_number') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="employment_insurance_office_number" class="form-label">{{ trans('label.employment_insurance_office_number') }}</label>
                            <input type="text" class="form-control" name="employment_insurance_office_number" id="employment_insurance_office_number" value="{{ old('employment_insurance_office_number') }}" placeholder="{{ trans('label.employment_insurance_office_number') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="supervion_license_number" class="form-label">{{ trans('label.supervion_license_number') }}</label>
                            <input type="text" class="form-control" name="supervion_license_number" id="supervion_license_number" value="{{ old('supervion_license_number') }}" placeholder="{{ trans('label.supervion_license_number') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="work_intern_area" class="form-label ">{{ trans('label.work_intern_area') }}</label>
                            <select class="form-control" data-trigger name="work_intern_area" id="work_intern_area">
                                <option value="1">1</option>
                                <option value="0" >0</option>
                            </select>
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="intern_prefecture" class="form-label">{{ trans('label.intern_prefecture') }}</label>
                            <input type="text" class="form-control" name="intern_prefecture" id="intern_prefecture" value="{{ old('intern_prefecture') }}" placeholder="{{ trans('label.intern_prefecture') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="audit_execution_frequency" class="form-label">{{ trans('label.audit_execution_frequency') }}</label>
                            <input type="number" class="form-control" name="audit_execution_frequency" id="audit_execution_frequency" value="{{ old('audit_execution_frequency') }}" placeholder="{{ trans('label.audit_execution_frequency') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="identifying_code" class="form-label">{{ trans('label.identifying_code') }}</label>
                            <input type="number" class="form-control" name="identifying_code" id="identifying_code" value="{{ old('identifying_code') }}" placeholder="{{ trans('label.identifying_code') }}">
                        </div>


                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="permission_date" class="form-label">{{ trans('label.permission_date') }}</label>
                            <input type="date" class="form-control" name="permission_date" id="permission_date" value="{{ old('permission_date') }}" placeholder="{{ trans('label.permission_date') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="planning_period_from_date" class="form-label">{{ trans('label.planning_period_from_date') }}</label>
                            <input type="date" class="form-control" name="planning_period_from_date" id="planning_period_from_date" value="{{ old('planning_period_from_date') }}" placeholder="{{ trans('label.planning_period_from_date') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="new_buid_date" class="form-label">{{ trans('label.new_buid_date') }}</label>
                            <input type="date" class="form-control" name="new_buid_date" id="new_buid_date" value="{{ old('new_buid_date') }}" placeholder="{{ trans('label.new_buid_date') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="abolition_date" class="form-label">{{ trans('label.abolition_date') }}</label>
                            <input type="date" class="form-control" name="abolition_date" id="abolition_date" value="{{ old('abolition_date') }}" placeholder="{{ trans('label.abolition_date') }}">
                        </div>

                        <div class=" col-lg-6 col-md-6 col-sm-12">
                            <label for="planning_period_from_to" class="form-label">{{ trans('label.planning_period_from_to') }}</label>
                            <input type="date" class="form-control" name="planning_period_from_to" id="planning_period_from_to" value="{{ old('planning_period_from_to') }}" placeholder="{{ trans('label.permission_valid_from_date') }}">
                        </div>

                        <div class="  col-sm-12">
                            <label for="jobs_comment" class="form-label">{{ trans('label.jobs_comment') }}</label>
                            <textarea class="form-control" name="jobs_comment" id="jobs_comment" placeholder="{{ trans('label.jobs_comment') }}">{{ old('jobs_comment') }}</textarea>
                        </div>


                        <div class="  col-sm-12">
                            <label for="note" class="form-label">{{ trans('label.note') }}</label>
                            <textarea class="form-control" name="note" id="note" placeholder="{{ trans('label.note') }}">{{ old('note') }}</textarea>
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

</form>
@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection