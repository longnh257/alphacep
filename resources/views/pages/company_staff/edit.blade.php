@extends('layouts.master')

@section('title', 'Trang chủ')

@section('content')
<form action="{{route('view.company_staff.update', ['id' => $company_staff->company_staff_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @method('PUT')
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">Sửa staff</h4>
        </div>
        <div class="main-dashboard-header-right">
            <div class="d-flex my-xl-auto right-content align-items-center">
                <div class="pe-1 mb-xl-0">
                    <button type="submit" class="btn btn-success btn-icon me-2 btn-b">
                        <i class="bi bi-save"></i>
                    </button>
                </div>
                <div class="pe-1 mb-xl-0">
                    <a href="{{route('view.company.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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
                        Thông tin staff
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
                            <input type="text" class="form-control" name="name" id="name" value="{{ $company_staff->name }}" placeholder="{{ trans('label.name') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="name_kana" class="form-label  required">{{ trans('label.name_kana') }}</label>
                            <input type="text" class="form-control" name="name_kana" id="name_kana" value="{{ $company_staff->name_kana }}" placeholder="{{ trans('label.name_kana') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="birthday" class="form-label ">{{ trans('label.birthday') }}</label>
                            <input type="date" class="form-control" name="birthday" id="birthday" value="{{ $company_staff->birthday }}" placeholder="{{ trans('label.birthday') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="sex" class="form-label ">{{ trans('label.sex') }}</label>
                            <select class="form-control" data-trigger name="sex" id="sex">
                            <option value="M">Male</option>
                                <option value="F"  @if($company_staff->sex == "F" ) selected @endif>Female</option>
                                <option value="O"  @if($company_staff->sex == "O" ) selected @endif>Others</option>
                            </select>
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="position" class="form-label ">{{ trans('label.position') }}</label>
                            <input type="text" class="form-control" name="position" id="position" value="{{ $company_staff->position }}" placeholder="{{ trans('label.position') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="nationality" class="form-label ">{{ trans('label.nationality') }}</label>
                            <input type="text" class="form-control" name="nationality" id="nationality" value="{{ $company_staff->nationality }}" placeholder="{{ trans('label.nationality') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="tel" class="form-label ">{{ trans('label.tel') }}</label>
                            <input type="text" class="form-control" name="tel" id="tel" max="10" min="10" value="{{ $company_staff->tel }}" placeholder="{{ trans('label.tel') }}">
                        </div>


                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="postcode" class="form-label">{{ trans('label.postcode') }}</label>
                            <input type="text" class="form-control" name="postcode" id="postcode" value="{{ $company_staff->postcode }}" placeholder="{{ trans('label.postcode') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="address1" class="form-label ">{{ trans('label.address1') }}</label>
                            <input type="text" class="form-control" name="address1" id="address1" value="{{ $company_staff->address1 }}" placeholder="{{ trans('label.address1') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="address2" class="form-label ">{{ trans('label.address2') }}</label>
                            <input type="text" class="form-control" name="address2" id="address2" value="{{ $company_staff->address2 }}" placeholder="{{ trans('label.address2') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="mail" class="form-label">{{ trans('label.mail') }}</label>
                            <input type="email" class="form-control" name="mail" id="mail" value="{{ $company_staff->mail }}" placeholder="{{ trans('label.mail') }}">
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="assignment_date" class="form-label">{{ trans('label.assignment_date') }}</label>
                            <input type="date" class="form-control" name="assignment_date" id="assignment_date" value="{{ $company_staff->assignment_date }}" placeholder="{{ trans('label.assignment_date') }}">
                        </div>


                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="certificate_submit" class="form-label ">{{ trans('label.certificate_submit') }}</label>
                            <select class="form-control" data-trigger name="certificate_submit" id="certificate_submit">
                                <option value="1">Yes</option>
                                <option value="0" @if($company_staff->certificate_submit == 0 ) selected @endif>No</option>
                            </select>
                        </div>

                        <div class="  col-lg-6 col-md-6 col-sm-12">
                            <label for="work_condition" class="form-label ">{{ trans('label.work_condition') }}</label>
                            <select class="form-control" data-trigger name="work_condition" id="work_condition">
                                <option value="1">Yes</option>
                                <option value="0" @if($company_staff->work_condition == 0 ) selected @endif>No</option>
                            </select>
                        </div>

                        <div class="  col-sm-12">
                            <label for="certificate" class="form-label">{{ trans('label.certificate') }}</label>
                            <textarea class="form-control" name="certificate" id="certificate" placeholder="{{ trans('label.certificate') }}">{{ $company_staff->certificate }}</textarea>
                        </div>

                        <div class="  col-sm-12">
                            <label for="note" class="form-label">{{ trans('label.note') }}</label>
                            <textarea class="form-control" name="note" id="note" placeholder="{{ trans('label.note') }}">{{ $company_staff->note }}</textarea>
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
                    <a href="{{route('view.company.index')}}" class="btn btn-danger btn-icon me-2 btn-b">
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