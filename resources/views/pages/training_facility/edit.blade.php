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
                                    <label for="name" class="form-label required">{{ trans('label.name') }}</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $trainee->name }}" placeholder="{{ trans('label.name') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="tel" class="form-label">{{ trans('label.tel') }}</label>
                                    <input type="text" class="form-control" name="tel" id="tel" value="{{ $trainee->tel }}" placeholder="{{ trans('label.tel') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="postcode" class="form-label">{{ trans('label.postcode') }}</label>
                                    <input type="text" class="form-control" name="postcode" id="postcode" value="{{ $trainee->postcode }}" placeholder="{{ trans('label.postcode') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="address1" class="form-label">{{ trans('label.address1') }}</label>
                                    <input type="text" class="form-control" name="address1" id="address1" value="{{ $trainee->address1 }}" placeholder="{{ trans('label.address1') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="address2" class="form-label">{{ trans('label.address2') }}</label>
                                    <input type="text" class="form-control" name="address2" id="address2" value="{{ $trainee->address2 }}" placeholder="{{ trans('label.address2') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="food_expense_payment" class="form-label">{{ trans('label.food_expense_payment') }}</label>
                                    <select class="form-select" name="food_expense_payment" id="food_expense_payment">
                                        <option value="0" {{ $trainee->food_expense_payment == 0 ? ' selected' : '' }}>No</option>
                                        <option value="1" {{ $trainee->food_expense_payment == 1 ? ' selected' : '' }}>Yes</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="food_expense_payment_detail" class="form-label">{{ trans('label.food_expense_payment_detail') }}</label>
                                    <input type="text" class="form-control" name="food_expense_payment_detail" id="food_expense_payment_detail" value="{{ $trainee->food_expense_payment_detail }}" placeholder="{{ trans('label.food_expense_payment_detail') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="food_expense_trainee_charge" class="form-label">{{ trans('label.food_expense_trainee_charge') }}</label>
                                    <select class="form-select" name="food_expense_trainee_charge" id="food_expense_trainee_charge">
                                        <option value="0" {{ $trainee->food_expense_trainee_charge == 0 ? ' selected' : '' }}>No</option>
                                        <option value="1" {{ $trainee->food_expense_trainee_charge == 1 ? ' selected' : '' }}>Yes</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="food_expense_trainee_charge_detail" class="form-label">{{ trans('label.food_expense_trainee_charge_detail') }}</label>
                                    <input type="text" class="form-control" name="food_expense_trainee_charge_detail" id="food_expense_trainee_charge_detail" value="{{ $trainee->food_expense_trainee_charge_detail }}" placeholder="{{ trans('label.food_expense_trainee_charge_detail') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="food_expense_comment" class="form-label">{{ trans('label.food_expense_comment') }}</label>
                                    <input type="text" class="form-control" name="food_expense_comment" id="food_expense_comment" value="{{ $trainee->food_expense_comment }}" placeholder="{{ trans('label.food_expense_comment') }}">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="house_cost_payment" class="form-label">{{ trans('label.house_cost_payment') }}</label>
                                    <select class="form-select" name="house_cost_payment" id="house_cost_payment">
                                        <option value="0" {{ $trainee->house_cost_payment == 0 ? ' selected' : '' }}>No</option>
                                        <option value="1" {{ $trainee->house_cost_payment == 1 ? ' selected' : '' }}>Yes</option>
                                    </select>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="house_cost_payment_detail" class="form-label">{{ trans('label.house_cost_payment_detail') }}</label>
                                    <input type="text" class="form-control" name="house_cost_payment_detail" id="house_cost_payment_detail" value="{{ $trainee->house_cost_payment_detail }}" placeholder="{{ trans('label.house_cost_payment_detail') }}">
                                </div <div class="btn-list">
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