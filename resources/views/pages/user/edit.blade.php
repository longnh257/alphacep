@extends('layouts.master')

@section('title', 'User')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('user.user_edit') }}</h4>
        <p class="mb-0 text-muted">{{ trans('user.user_edit_desc') }}</p>
    </div>
</div>
<!-- End Page Header -->

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card    pt-4">

            <div class="card-body">

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger mx-2" role="alert">
                    {{ $error }}
                </div>
                @endforeach
                @endif
                <form action="{{route('view.user.update', ['id' => $model->id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                    @method('PUT')
                    @csrf
                    <div class="row gy-4">
                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="name" class="form-label  required">{{ trans('user.name') }}</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ $model->name }}" placeholder="{{ trans('user.name') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="email" class="form-label required">{{ trans('user.email') }}</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ $model->email }}" placeholder="{{ trans('user.email') }}">
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
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ $model->phone }}" placeholder="{{ trans('user.phone') }}">
                        </div>

                        <div class="  col-lg-6 col-sm-12">
                            <label for="customer" class="form-label ">{{ trans('user.customer') }}</label>
                            <select class="form-control" data-trigger name="customer_id" id="customer">
                                <option value="">{{ trans('user.choose_customer') }}</option>
                                @foreach ($customer as $item)
                                <option value="{{$item->customer_id}}" {{$item->customer_id == $model->customer_id ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
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
<!-- row -->


@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>


@endsection