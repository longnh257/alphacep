@extends('layouts.master')

@section('title', 'Trainee')

@section('content')

<!-- Page Header -->
<div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
    <div>
        <h4 class="mb-0">{{ trans('label.trainee_edit') }}</h4>
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

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card    pt-4">

            <div class="card-body">
              <!--   <ul class="nav nav-tabs tab-style-1 d-sm-flex d-block" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#trainee" aria-current="page" href="#trainee"> Thông tin khách hàng</a>
                    </li>
                  <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#company" href="#company">Thông tin company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#office" href="#office">Thông tin office</a>
                    </li> 
                </ul> -->

                <div class="tab-content">


                    <div class="tab-pane active" id="trainee" role="trainee">

                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger mx-2" role="alert">
                            {{ $error }}
                        </div>
                        @endforeach
                        @endif
                        <form action="{{route('view.trainee.update', ['id' => $trainee->trainee_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
                            @method('PUT')
                            @csrf
                            <div class="row gy-4">
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="name" class="form-label required">{{ trans('label.name') }}</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $trainee->name }}" placeholder="{{ trans('label.name') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="name_kana" class="form-label  required">{{ trans('label.name_kana') }}</label>
                                    <input type="text" class="form-control" name="name_kana" id="name_kana" value="{{ $trainee->name_kana }}" placeholder="{{ trans('label.name_kana') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="name_kanji" class="form-label  required">{{ trans('label.name_kanji') }}</label>
                                    <input type="text" class="form-control" name="name_kanji" id="name_kanji" value="{{ $trainee->name_kanji }}" placeholder="{{ trans('label.name_kanji') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="mobile_tel" class="form-label required">{{ trans('label.mobile_tel') }}</label>
                                    <input type="text" class="form-control" name="mobile_tel" id="mobile_tel" max="10" min="10" value="{{ $trainee->mobile_tel }}" placeholder="{{ trans('label.mobile_tel') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="sex" class="form-label ">{{ trans('label.sex') }}</label>
                                    <select class="form-control" data-trigger name="sex" id="sex">
                                        <option value="1">{{ trans('label.male') }}</option>
                                        <option value="2">{{ trans('label.female') }}</option>
                                    </select>
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="marital_div" class="form-label ">{{ trans('label.marital_div') }}</label>
                                    <select class="form-control" data-trigger name="marital_div" id="marital_div">
                                        <option value="0">{{ trans('label.marital_div_0') }}</option>
                                        <option value="1">{{ trans('label.marital_div_1') }}</option>
                                    </select>
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="nationality_id" class="form-label ">{{ trans('label.nationality_id') }}</label>
                                    <select class="form-control" data-trigger name="nationality_id" id="nationality_id">
                                        <option value="1">{{ trans('label.nationality') }}</option>
                                    </select>
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="native_language_id" class="form-label ">{{ trans('label.native_language_id') }}</label>
                                    <select class="form-control" data-trigger name="native_language_id" id="native_language_id">
                                        <option value="1">{{ trans('label.native_language_id') }}</option>
                                    </select>
                                </div>


                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="occupation" class="form-label">{{ trans('label.occupation') }}</label>
                                    <input type="text" class="form-control" name="occupation" id="occupation" value="{{ $trainee->occupation }}" placeholder="{{ trans('label.occupation') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="birth_place" class="form-label">{{ trans('label.birth_place') }}</label>
                                    <input type="text" class="form-control" name="birth_place" id="birth_place" value="{{ $trainee->birth_place }}" placeholder="{{ trans('label.birth_place') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="home_country_address" class="form-label">{{ trans('label.home_country_address') }}</label>
                                    <input type="text" class="form-control" name="home_country_address" id="home_country_address" value="{{ $trainee->home_country_address }}" placeholder="{{ trans('label.birth_place') }}">
                                </div>


                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="enrollment_status_div">{{ trans('label.enrollment_status_div') }}:</label>
                                    <select class="form-control" id="enrollment_status_div" name="enrollment_status_div">
                                        <option value="01">所属中</option>
                                        <option value="02">一時帰国（2⇒3号移行時など）</option>
                                        <option value="03">中途帰国</option>
                                        <option value="04">帰国（実習終了）</option>
                                        <option value="05">失踪</option>
                                        <option value="06">滞在（婚姻など）</option>
                                        <option value="07">入国前キャンセル</option>
                                        <option value="08">他組合へ移動</option>
                                        <option value="09">特定活動中</option>
                                        <option value="10">特定活動中（実習終了済）</option>
                                        <option value="99">その他</option>
                                    </select>
                                </div>

                                <!-- Difficulty Notification -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="difficulty_notification_div">{{ trans('label.difficulty_notification_div') }}:</label>
                                    <select class="form-control" id="difficulty_notification_div" name="difficulty_notification_div">
                                        <option value="1">有</option>
                                        <option value="0">無</option>
                                    </select>
                                </div>

                                <!-- Difficulty Notification Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="difficulty_notification_date">{{ trans('label.difficulty_notification_date') }}:</label>
                                    <input type="date" class="form-control" id="difficulty_notification_date" name="difficulty_notification_date" value="{{ $trainee->difficulty_notification_date }}">
                                </div>

                                <!-- Disappeared Status -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="disappeared_status_div">{{ trans('label.disappeared_status_div') }}:</label>
                                    <select class="form-control" id="disappeared_status_div" name="disappeared_status_div">
                                        <option value="1">有</option>
                                        <option value="0">無</option>
                                    </select>
                                </div>

                                <!-- Disappeared Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="disappeared_date">{{ trans('label.disappeared_date') }}:</label>
                                    <input type="date" class="form-control" id="disappeared_date" name="disappeared_date" value="{{ $trainee->disappeared_date }}">
                                </div>

                                <!-- Resumption Status -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="resumption_status_div">{{ trans('label.resumption_status_div') }}:</label>
                                    <select class="form-control" id="resumption_status_div" name="resumption_status_div">
                                        <option value="1">有</option>
                                        <option value="0">無</option>
                                    </select>
                                </div>

                                <!-- Resumption Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="resumption_date">{{ trans('label.resumption_date') }}:</label>
                                    <input type="date" class="form-control" id="resumption_date" name="resumption_date" value="{{ $trainee->resumption_date }}">
                                </div>

                                <!--trainee Type -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="trainee_type">{{ trans('label.trainee_type') }}:</label>
                                    <select class="form-control" id="trainee_type" name="trainee_type">
                                        <option value="01">第一号団体監理型技能実習</option>
                                    </select>
                                </div>

                                <!-- Status -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="status">{{ trans('label.status') }}:</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="01">1号実習中</option>
                                        <option value="02">2号実習中（1年目）</option>
                                        <option value="03">2号実習中（2年目）</option>
                                        <option value="04">3号実習中（1年目）</option>
                                        <option value="05">3号実習中（2年目）</option>
                                    </select>
                                </div>


                                <!-- Move Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="move_date">{{ trans('label.move_date') }}:</label>
                                    <input type="date" class="form-control" id="move_date" name="move_date" value="{{ $trainee->move_date }}">
                                </div>

                                <!-- Start Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="start_date">{{ trans('label.start_date') }}:</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $trainee->start_date }}">
                                </div>

                                <!-- Complete Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="complete_date">{{ trans('label.complete_date') }}:</label>
                                    <input type="date" class="form-control" id="complete_date" name="complete_date" value="{{ $trainee->complete_date }}">
                                </div>

                                <!-- Sending Agency ID -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="sending_agency_id">{{ trans('label.sending_agency_id') }}:</label>
                                    <input type="number" class="form-control" id="sending_agency_id" name="sending_agency_id" value="{{ $trainee->sending_agency_id }}">
                                </div>

                                <!-- Apply Immigration Name -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="apply_immigration_name">{{ trans('label.apply_immigration_name') }}:</label>
                                    <input type="text" class="form-control" id="apply_immigration_name" name="apply_immigration_name" value="{{ $trainee->apply_immigration_name }}">
                                </div>

                                <!-- Update Immigration Name -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="update_immigration_name">{{ trans('label.update_immigration_name') }}:</label>
                                    <input type="text" class="form-control" id="update_immigration_name" name="update_immigration_name" value="{{ $trainee->update_immigration_name }}">
                                </div>

                                <!-- Passport No -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="passport_no">{{ trans('label.passport_no') }}:</label>
                                    <input type="text" class="form-control" id="passport_no" name="passport_no" value="{{ $trainee->passport_no }}">
                                </div>

                                <!-- Expiration Date -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="expiration_date">{{ trans('label.expiration_date') }}:</label>
                                    <input type="date" class="form-control" id="expiration_date" name="expiration_date" value="{{ $trainee->expiration_date }}">
                                </div>

                                <!-- Schedule Landing Port -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="schedule_landing_port">{{ trans('label.schedule_landing_port') }}:</label>
                                    <input type="text" class="form-control" id="schedule_landing_port" name="schedule_landing_port" value="{{ $trainee->schedule_landing_port }}">
                                </div>

                                <!-- Stay Period -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="stay_period">{{ trans('label.stay_period') }}:</label>
                                    <input type="text" class="form-control" id="stay_period" name="stay_period" value="{{ $trainee->stay_period }}">
                                </div>

                                <!-- Visa Application Place -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="visa_application_place">{{ trans('label.visa_application_place') }}:</label>
                                    <input type="text" class="form-control" id="visa_application_place" name="visa_application_place" value="{{ $trainee->visa_application_place }}">
                                </div>

                                <!-- Entry Exit History Div -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="entry_exit_history_div">{{ trans('label.entry_exit_history_div') }}:</label>
                                    <select class="form-control" id="entry_exit_history_div" name="entry_exit_history_div">
                                        <option value="1">有</option>
                                        <option value="0">無</option>
                                    </select>
                                </div>

                                <!-- Entry Exit Times -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="entry_exit_times">{{ trans('label.entry_exit_times') }}:</label>
                                    <input type="number" class="form-control" id="entry_exit_times" name="entry_exit_times" value="{{ $trainee->entry_exit_times }}">
                                </div>

                                <!-- Entry Exit Div -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="entry_exit_div">{{ trans('label.entry_exit_div') }}:</label>
                                    <select class="form-control" id="entry_exit_div" name="entry_exit_div">
                                        <option value="1">ON</option>
                                        <option value="0">OFF</option>
                                    </select>
                                </div>

                                <!-- Entry Exit From Date -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="entry_exit_from_date">{{ trans('label.entry_exit_from_date') }}:</label>
                                    <input type="date" class="form-control" id="entry_exit_from_date" name="entry_exit_from_date" value="{{ $trainee->entry_exit_from_date }}">
                                </div>

                                <!-- Entry Exit To Date -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="entry_exit_to_date">{{ trans('label.entry_exit_to_date') }}:</label>
                                    <input type="date" class="form-control" id="entry_exit_to_date" name="entry_exit_to_date" value="{{ $trainee->entry_exit_to_date }}">
                                </div>

                                <!-- Residence Status -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="residence_status">{{ trans('label.residence_status') }}:</label>
                                    <input type="text" class="form-control" id="residence_status" name="residence_status" value="{{ $trainee->residence_status }}">
                                </div>

                                <!-- Residence Period -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="residence_period">{{ trans('label.residence_period') }}:</label>
                                    <input type="text" class="form-control" id="residence_period" name="residence_period" value="{{ $trainee->residence_period }}">
                                </div>

                                <!-- Residence Card Number -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="residence_card_number">{{ trans('label.residence_card_number') }}:</label>
                                    <input type="text" class="form-control" id="residence_card_number" name="residence_card_number" value="{{ $trainee->residence_card_number }}">
                                </div>

                                <!-- Stay Expiration Date -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="stay_expiration_date">{{ trans('label.stay_expiration_date') }}:</label>
                                    <input type="date" class="form-control" id="stay_expiration_date" name="stay_expiration_date" value="{{ $trainee->stay_expiration_date }}">
                                </div>

                                <!-- Applicant Agent -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="applicant_agent">{{ trans('label.applicant_agent') }}:</label>
                                    <input type="text" class="form-control" id="applicant_agent" name="applicant_agent" value="{{ $trainee->applicant_agent }}">
                                </div>

                                <!-- Relationship with trainee -->
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="relationship_with_trainee">{{ trans('label.relationship_with_trainee') }}:</label>
                                    <input type="text" class="form-control" id="relationship_with_trainee" name="relationship_with_trainee" value="{{ $trainee->relationship_with_trainee }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="applicant_tel" class="form-label required">{{ trans('label.applicant_tel') }}</label>
                                    <input type="text" class="form-control" name="applicant_tel" id="applicant_tel" max="10" min="10" value="{{ $trainee->applicant_tel }}" placeholder="{{ trans('label.applicant_tel') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="applicant_postcode" class="form-label">{{ trans('label.applicant_postcode') }}</label>
                                    <input type="text" class="form-control" name="applicant_postcode" id="applicant_postcode" value="{{ $trainee->applicant_postcode }}" placeholder="{{ trans('label.applicant_postcode') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="applicant_address1" class="form-label">{{ trans('label.applicant_address1') }}</label>
                                    <input type="text" class="form-control" name="applicant_address1" id="applicant_address1" value="{{ $trainee->applicant_address1 }}" placeholder="{{ trans('label.applicant_address1') }}">
                                </div>

                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="applicant_address2" class="form-label">{{ trans('label.applicant_address2') }}</label>
                                    <input type="text" class="form-control" name="applicant_address2" id="applicant_address2" value="{{ $trainee->applicant_address2 }}" placeholder="{{ trans('label.applicant_address2') }}">
                                </div>

                                <!-- Change Permission Apply Reason -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="change_permission_apply_reason">{{ trans('label.change_permission_apply_reason') }}</label>
                                    <input type="text" class="form-control" id="change_permission_apply_reason" name="change_permission_apply_reason"  value="{{ $trainee->change_permission_apply_reason }}" >
                                </div>

                                <!-- Update Permission Apply Reason -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="update_permission_apply_reason">{{ trans('label.update_permission_apply_reason') }}:</label>
                                    <input type="text" class="form-control" id="update_permission_apply_reason" name="update_permission_apply_reason"  value="{{ $trainee->update_permission_apply_reason }}">
                                </div>

                                <!-- Notice Mail -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="notice_mail">{{ trans('label.notice_mail') }}:</label>
                                    <input type="email" class="form-control" id="notice_mail" name="notice_mail"  value="{{ $trainee->notice_mail }}">
                                </div>

                                <!-- Relatives in Japan -->
                                <div class="  col-lg-6 col-md-6 col-sm-12">
                                    <label for="relatives_in_japan">{{ trans('label.relatives_in_japan') }}:</label>
                                    <select class="form-control" id="relatives_in_japan" name="relatives_in_japan">
                                        <option value="1">有</option>
                                        <option value="0">無</option>
                                    </select>
                                </div>

                                <!-- Train History -->
                                <div class=" col-sm-12">
                                    <label for="train_history">{{ trans('label.train_history') }}:</label>
                                    <textarea class="form-control" id="train_history" name="train_history">{{ $trainee->train_history }}</textarea>
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