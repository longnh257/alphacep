@extends('layouts.master')

@section('title', 'Trainee')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('label.training_facility_edit') }}</h4>
    </div>
    <div class="main-dashboard-header-right">
        <div class="d-flex my-xl-auto right-content align-items-center">
            <div class="pe-1 mb-xl-0">
                <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                    <i class="bi bi-save"></i>
                </button>
            </div>
            <div class="pe-1 mb-xl-0">
                <a href="{{route('view.training_facility.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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
                <!--   <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#training_facility" aria-current="page" href="#training_facility"> Thông tin khách hàng</a>
                    </li>
                  <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#company" href="#company">Thông tin company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#office" href="#office">Thông tin office</a>
                    </li> 
                </ul> -->

                <div class="tab-content">


                    <div class="tab-pane active" id="training_facility" role="training_facility">

                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mx-2" role="alert">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif
                        <form action="{{route('view.training_facility.update', ['id' => $training_facility->training_facility_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                            @method('PUT')
                            @csrf
                            <div class="row gy-4">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="relationship" class="form-label required">{{ trans('label.relationship') }}</label>
                                    <input type="text" class="form-control" name="relationship" id="relationship" value="{{ old('relationship') }}" placeholder="{{ trans('label.relationship') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="name" class="form-label required">{{ trans('label.name') }}</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="{{ trans('label.name') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="birthday" class="form-label">{{ trans('label.birthday') }}</label>
                                    <input type="date" class="form-control" name="birthday" id="birthday" value="{{ old('birthday') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="nationality" class="form-label">{{ trans('label.nationality') }}</label>
                                    <input type="text" class="form-control" name="nationality" id="nationality" value="{{ old('nationality') }}" placeholder="{{ trans('label.nationality') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="live_together" class="form-label">{{ trans('label.live_together') }}</label>
                                    <select class="form-select" name="live_together" id="live_together">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="work_school_place" class="form-label">{{ trans('label.work_school_place') }}</label>
                                    <input type="text" class="form-control" name="work_school_place" id="work_school_place" value="{{ old('work_school_place') }}" placeholder="{{ trans('label.work_school_place') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="mobile_tel" class="form-label">{{ trans('label.mobile_tel') }}</label>
                                    <input type="text" class="form-control" name="mobile_tel" id="mobile_tel" value="{{ old('mobile_tel') }}" placeholder="{{ trans('label.mobile_tel') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="residence_card_number" class="form-label">{{ trans('label.residence_card_number') }}</label>
                                    <input type="text" class="form-control" name="residence_card_number" id="residence_card_number" value="{{ old('residence_card_number') }}" placeholder="{{ trans('label.residence_card_number') }}">
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


@endsection