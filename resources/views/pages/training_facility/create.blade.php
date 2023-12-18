@extends('layouts.master')

@section('title', 'Trainee')

@section('content')
<form action="{{route('view.trainee.store')}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('label.trainee_add') }}</h4>
        </div>
        <div class="main-dashboard-header-right">
            <div class="d-flex my-xl-auto right-content align-items-center">
                <div class="pe-1 mb-xl-0">
                    <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                        <i class="bi bi-save"></i>
                    </button>
                </div>
                <div class="pe-1 mb-xl-0">
                    <a href="{{route('view.trainee.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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
                        {{ trans('label.trainee_info') }}
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
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="relationship" class="form-label required">{{ trans('label.relationship') }}</label>
                            <input type="text" class="form-control" name="relationship" id="relationship" value="{{ $training_facility->relationship }}" placeholder="{{ trans('label.relationship') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="name" class="form-label required">{{ trans('label.name') }}</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $training_facility->name }}" placeholder="{{ trans('label.name') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="birthday" class="form-label">{{ trans('label.birthday') }}</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $training_facility->birthday }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="nationality" class="form-label">{{ trans('label.nationality') }}</label>
                            <input type="text" class="form-control" name="nationality" id="nationality" value="{{ $training_facility->nationality }}" placeholder="{{ trans('label.nationality') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="live_together" class="form-label">{{ trans('label.live_together') }}</label>
                            <select class="form-select" name="live_together" id="live_together">
                                <option value="1" {{ $training_facility->live_together == 1 ? ' selected' : '' }}>Yes</option>
                                <option value="0" {{ $training_facility->live_together == 0 ? ' selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_school_place" class="form-label">{{ trans('label.work_school_place') }}</label>
                            <input type="text" class="form-control" name="work_school_place" id="work_school_place" value="{{ $training_facility->work_school_place }}" placeholder="{{ trans('label.work_school_place') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="mobile_tel" class="form-label">{{ trans('label.mobile_tel') }}</label>
                            <input type="text" class="form-control" name="mobile_tel" id="mobile_tel" value="{{ $training_facility->mobile_tel }}" placeholder="{{ trans('label.mobile_tel') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="residence_card_number" class="form-label">{{ trans('label.residence_card_number') }}</label>
                            <input type="text" class="form-control" name="residence_card_number" id="residence_card_number" value="{{ $training_facility->residence_card_number }}" placeholder="{{ trans('label.residence_card_number') }}">
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
                    <a href="{{route('view.trainee.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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