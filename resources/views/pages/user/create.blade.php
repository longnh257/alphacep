@extends('layouts.master')

@section('title', 'User')

@section('content')
<form action="{{route('view.user.store')}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('user.user_add') }}</h4>
            <p class="mb-0 text-muted">{{ trans('user.user_add_desc') }}</p>
        </div>
        <div class="main-dashboard-header-right">
            <div class="d-flex my-xl-auto right-content align-items-center">
                <div>
                    <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                        <i class="bi bi-save"></i>
                    </button>
                </div>
                <div>
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

    @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger mx-4" role="alert">
        {{ $error }}
    </div>
    @endforeach
    @endif
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        <h4 class="mb-0">{{ trans('user.account_info') }}</h4>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row gy-4">
                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="name" class="form-label  required">{{ trans('user.name') }}</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="{{ trans('user.name') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="email" class="form-label required">{{ trans('user.email') }}</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="{{ trans('user.email') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="password" class="form-label required">{{ trans('user.password') }}</label>
                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="{{ trans('user.password') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="password_confirmation required" class="form-label">{{ trans('user.password_confirmation') }}</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="" placeholder="{{ trans('user.password_confirmation') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="phone" class="form-label required">{{ trans('user.phone') }}</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" placeholder="{{ trans('user.phone') }}">
                        </div>

                        <div class="  col-lg-6 col-sm-12">
                            <label for="customer" class="form-label ">{{ trans('user.customer') }}</label>
                            <select class="form-control" data-trigger name="customer_id" id="customer">
                                <option value="">{{ trans('user.choose_customer') }}</option>
                                @foreach ($customer as $item)
                                <option value="{{$item->customer_id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-list">
                            <button type="submit" class="btn btn-primary ">{{ trans('common.submit') }}</button>
                        </div>
                    </div>
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