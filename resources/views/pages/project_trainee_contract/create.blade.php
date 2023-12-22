@extends('layouts.master')

@section('title', 'Contract')

@section('content')
<form action="{{route('view.project_trainee_contract.store',['project_trainee_id' => $project_trainee->project_trainee_id])}}" method="post" enctype="multipart/form-data" class="container-fluid">
    @csrf
    <!-- Page Header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <h4 class="mb-0">{{ trans('label.project_trainee_contract_add') }}</h4>
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
                        {{ trans('label.project_info') }}
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


                        <div class="col-sm-12">
                            <label for="training_facility" class="form-label ">{{ trans('label.training_facility') }}</label>
                            <select class="form-control" data-trigger name="training_facility_id" id="training_facility">
                                <option value="">{{ trans('label.choose_training_facility') }}</option>
                                @foreach ($training_facility as $item)
                                <option value="{{$item->training_facility_id}}">ID: {{$item->training_facility_id}} - Name: {{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="practitioner_group_id" class="form-label">{{ trans('label.practitioner_group_id') }}</label>
                            <input type="text" class="form-control" name="practitioner_group_id" id="practitioner_group_id" value="{{ old('practitioner_group_id') }}" placeholder="{{ trans('label.practitioner_group_id') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_place_name" class="form-label">{{ trans('label.work_place_name') }}</label>
                            <input type="text" class="form-control" name="work_place_name" id="work_place_name" value="{{ old('work_place_name') }}" placeholder="{{ trans('label.work_place_name') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="postcode" class="form-label">{{ trans('label.postcode') }}</label>
                            <input type="text" class="form-control" name="postcode" id="postcode" value="{{ old('postcode') }}" placeholder="{{ trans('label.postcode') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="address1" class="form-label">{{ trans('label.address1') }}</label>
                            <input type="text" class="form-control" name="address1" id="address1" value="{{ old('address1') }}" placeholder="{{ trans('label.address1') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="address2" class="form-label">{{ trans('label.address2') }}</label>
                            <input type="text" class="form-control" name="address2" id="address2" value="{{ old('address2') }}" placeholder="{{ trans('label.address2') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="transition_occupation_id1" class="form-label">{{ trans('label.transition_occupation_id1') }}</label>
                            <input type="text" class="form-control" name="transition_occupation_id1" id="transition_occupation_id1" value="{{ old('transition_occupation_id1') }}" placeholder="{{ trans('label.transition_occupation_id1') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="transition_occupation_id2" class="form-label">{{ trans('label.transition_occupation_id2') }}</label>
                            <input type="text" class="form-control" name="transition_occupation_id2" id="transition_occupation_id2" value="{{ old('transition_occupation_id2') }}" placeholder="{{ trans('label.transition_occupation_id2') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="transition_occupation_id3" class="form-label">{{ trans('label.transition_occupation_id3') }}</label>
                            <input type="text" class="form-control" name="transition_occupation_id3" id="transition_occupation_id3" value="{{ old('transition_occupation_id3') }}" placeholder="{{ trans('label.transition_occupation_id3') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="other_transition_occupation" class="form-label">{{ trans('label.other_transition_occupation') }}</label>
                            <input type="text" class="form-control" name="other_transition_occupation" id="other_transition_occupation" value="{{ old('other_transition_occupation') }}" placeholder="{{ trans('label.other_transition_occupation') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="schedule_entry_date_div" class="form-label">{{ trans('label.schedule_entry_date_div') }}</label>
                            <select class="form-select" name="schedule_entry_date_div" id="schedule_entry_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="schedule_entry_date" class="form-label">{{ trans('label.schedule_entry_date') }}</label>
                            <input type="date" class="form-control" name="schedule_entry_date" id="schedule_entry_date" value="{{ old('schedule_entry_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="entry_date_div" class="form-label">{{ trans('label.entry_date_div') }}</label>
                            <select class="form-select" name="entry_date_div" id="entry_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="entry_date" class="form-label">{{ trans('label.entry_date') }}</label>
                            <input type="date" class="form-control" name="entry_date" id="entry_date" value="{{ old('entry_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="no3_entry_date_div" class="form-label">{{ trans('label.no3_entry_date_div') }}</label>
                            <select class="form-select" name="no3_entry_date_div" id="no3_entry_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="no3_entry_date" class="form-label">{{ trans('label.no3_entry_date') }}</label>
                            <input type="date" class="form-control" name="no3_entry_date" id="no3_entry_date" value="{{ old('no3_entry_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="schedule_return_date_div" class="form-label">{{ trans('label.schedule_return_date_div') }}</label>
                            <select class="form-select" name="schedule_return_date_div" id="schedule_return_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="schedule_return_from_date" class="form-label">{{ trans('label.schedule_return_from_date') }}</label>
                            <input type="date" class="form-control" name="schedule_return_from_date" id="schedule_return_from_date" value="{{ old('schedule_return_from_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="schedule_return_to_date" class="form-label">{{ trans('label.schedule_return_to_date') }}</label>
                            <input type="date" class="form-control" name="schedule_return_to_date" id="schedule_return_to_date" value="{{ old('schedule_return_to_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="pre_entry_training" class="form-label">{{ trans('label.pre_entry_training') }}</label>
                            <select class="form-select" name="pre_entry_training" id="pre_entry_training">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="post_entry_training_div" class="form-label">{{ trans('label.post_entry_training_div') }}</label>
                            <select class="form-select" name="post_entry_training_div" id="post_entry_training_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="post_entry_training_from_date" class="form-label">{{ trans('label.post_entry_training_from_date') }}</label>
                            <input type="date" class="form-control" name="post_entry_training_from_date" id="post_entry_training_from_date" value="{{ old('post_entry_training_from_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="post_entry_training_to_date" class="form-label">{{ trans('label.post_entry_training_to_date') }}</label>
                            <input type="date" class="form-control" name="post_entry_training_to_date" id="post_entry_training_to_date" value="{{ old('post_entry_training_to_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_certification_date_div" class="form-label">{{ trans('label.training_no1_certification_date_div') }}</label>
                            <select class="form-select" name="training_no1_certification_date_div" id="training_no1_certification_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_certification_date" class="form-label">{{ trans('label.training_no1_certification_date') }}</label>
                            <input type="date" class="form-control" name="training_no1_certification_date" id="training_no1_certification_date" value="{{ old('training_no1_certification_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_certification_number" class="form-label">{{ trans('label.training_no1_certification_number') }}</label>
                            <input type="text" class="form-control" name="training_no1_certification_number" id="training_no1_certification_number" value="{{ old('training_no1_certification_number') }}" placeholder="{{ trans('label.training_no1_certification_number') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_practition_date_div" class="form-label">{{ trans('label.training_no1_practition_date_div') }}</label>
                            <select class="form-select" name="training_no1_practition_date_div" id="training_no1_practition_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_practition_from_date" class="form-label">{{ trans('label.training_no1_practition_from_date') }}</label>
                            <input type="date" class="form-control" name="training_no1_practition_from_date" id="training_no1_practition_from_date" value="{{ old('training_no1_practition_from_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_practition_to_date" class="form-label">{{ trans('label.training_no1_practition_to_date') }}</label>
                            <input type="date" class="form-control" name="training_no1_practition_to_date" id="training_no1_practition_to_date" value="{{ old('training_no1_practition_to_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_note" class="form-label">{{ trans('label.training_no1_note') }}</label>
                            <textarea class="form-control" name="training_no1_note" id="training_no1_note" rows="3">{{ old('training_no1_note') }}</textarea>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_certification_date_div" class="form-label">{{ trans('label.training_no2_certification_date_div') }}</label>
                            <select class="form-select" name="training_no2_certification_date_div" id="training_no2_certification_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_certification_date" class="form-label">{{ trans('label.training_no2_certification_date') }}</label>
                            <input type="date" class="form-control" name="training_no2_certification_date" id="training_no2_certification_date" value="{{ old('training_no2_certification_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_certification_number" class="form-label">{{ trans('label.training_no2_certification_number') }}</label>
                            <input type="text" class="form-control" name="training_no2_certification_number" id="training_no2_certification_number" value="{{ old('training_no2_certification_number') }}" placeholder="{{ trans('label.training_no2_certification_number') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_practition_date_div" class="form-label">{{ trans('label.training_no2_practition_date_div') }}</label>
                            <select class="form-select" name="training_no2_practition_date_div" id="training_no2_practition_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_practition_from_date" class="form-label">{{ trans('label.training_no2_practition_from_date') }}</label>
                            <input type="date" class="form-control" name="training_no2_practition_from_date" id="training_no2_practition_from_date" value="{{ old('training_no2_practition_from_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_practition_to_date" class="form-label">{{ trans('label.training_no2_practition_to_date') }}</label>
                            <input type="date" class="form-control" name="training_no2_practition_to_date" id="training_no2_practition_to_date" value="{{ old('training_no2_practition_to_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_note" class="form-label">{{ trans('label.training_no2_note') }}</label>
                            <textarea class="form-control" name="training_no2_note" id="training_no2_note" rows="3">{{ old('training_no2_note') }}</textarea>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_certification_date_div" class="form-label">{{ trans('label.training_no3_certification_date_div') }}</label>
                            <select class="form-select" name="training_no3_certification_date_div" id="training_no3_certification_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_certification_date" class="form-label">{{ trans('label.training_no3_certification_date') }}</label>
                            <input type="date" class="form-control" name="training_no3_certification_date" id="training_no3_certification_date" value="{{ old('training_no3_certification_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_certification_number" class="form-label">{{ trans('label.training_no3_certification_number') }}</label>
                            <input type="text" class="form-control" name="training_no3_certification_number" id="training_no3_certification_number" value="{{ old('training_no3_certification_number') }}" placeholder="{{ trans('label.training_no3_certification_number') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_practition_date_div" class="form-label">{{ trans('label.training_no3_practition_date_div') }}</label>
                            <select class="form-select" name="training_no3_practition_date_div" id="training_no3_practition_date_div">
                                <option value="1">ON</option>
                                <option value="0">OFF</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_practition_from_date" class="form-label">{{ trans('label.training_no3_practition_from_date') }}</label>
                            <input type="date" class="form-control" name="training_no3_practition_from_date" id="training_no3_practition_from_date" value="{{ old('training_no3_practition_from_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_practition_to_date" class="form-label">{{ trans('label.training_no3_practition_to_date') }}</label>
                            <input type="date" class="form-control" name="training_no3_practition_to_date" id="training_no3_practition_to_date" value="{{ old('training_no3_practition_to_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_note" class="form-label">{{ trans('label.training_no3_note') }}</label>
                            <textarea class="form-control" name="training_no3_note" id="training_no3_note" rows="3">{{ old('training_no3_note') }}</textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="fixed_term_employment_contract" class="form-label">{{ trans('label.fixed_term_employment_contract') }}</label>
                            <select class="form-select" name="fixed_term_employment_contract" id="fixed_term_employment_contract">
                                <option value="1">有</option>
                                <option value="0">無</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="employment_contract_from_date" class="form-label">{{ trans('label.employment_contract_from_date') }}</label>
                            <input type="date" class="form-control" name="employment_contract_from_date" id="employment_contract_from_date" value="{{ old('employment_contract_from_date') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="employment_contract_from_to" class="form-label">{{ trans('label.employment_contract_from_to') }}</label>
                            <input type="date" class="form-control" name="employment_contract_from_to" id="employment_contract_from_to" value="{{ old('employment_contract_from_to') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_div" class="form-label">{{ trans('label.work_hours_div') }}</label>
                            <input type="date" class="form-control" name="work_hours_div" id="work_hours_div" value="{{ old('work_hours_div') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_days_1_year" class="form-label">{{ trans('label.work_days_1_year') }}</label>
                            <input type="number" class="form-control" name="work_days_1_year" id="work_days_1_year" value="{{ old('work_days_1_year') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_days_2_year" class="form-label">{{ trans('label.work_days_2_year') }}</label>
                            <input type="number" class="form-control" name="work_days_2_year" id="work_days_2_year" value="{{ old('work_days_2_year') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_days_3_year" class="form-label">{{ trans('label.work_days_3_year') }}</label>
                            <input type="number" class="form-control" name="work_days_3_year" id="work_days_3_year" value="{{ old('work_days_3_year') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_days_4_year" class="form-label">{{ trans('label.work_days_4_year') }}</label>
                            <input type="number" class="form-control" name="work_days_4_year" id="work_days_4_year" value="{{ old('work_days_4_year') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_days_5_year" class="form-label">{{ trans('label.work_days_5_year') }}</label>
                            <input type="number" class="form-control" name="work_days_5_year" id="work_days_5_year" value="{{ old('work_days_5_year') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="holiday_days" class="form-label">{{ trans('label.holiday_days') }}</label>
                            <input type="number" class="form-control" name="holiday_days" id="holiday_days" value="{{ old('holiday_days') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_day" class="form-label">{{ trans('label.work_hours_per_day') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_day" id="work_hours_per_day" value="{{ old('work_hours_per_day') }}" placeholder="{{ trans('label.work_hours_per_day') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_week" class="form-label">{{ trans('label.work_hours_per_week') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_week" id="work_hours_per_week" value="{{ old('work_hours_per_week') }}" placeholder="{{ trans('label.work_hours_per_week') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_week_decimal_notation" class="form-label">{{ trans('label.work_hours_per_week_decimal_notation') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_week_decimal_notation" id="work_hours_per_week_decimal_notation" value="{{ old('work_hours_per_week_decimal_notation') }}" placeholder="{{ trans('label.work_hours_per_week_decimal_notation') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_month" class="form-label">{{ trans('label.work_hours_per_month') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_month" id="work_hours_per_month" value="{{ old('work_hours_per_month') }}" placeholder="{{ trans('label.work_hours_per_month') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_month_decimal_notation" class="form-label">{{ trans('label.work_hours_per_month_decimal_notation') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_month_decimal_notation" id="work_hours_per_month_decimal_notation" value="{{ old('work_hours_per_month_decimal_notation') }}" placeholder="{{ trans('label.work_hours_per_month_decimal_notation') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_year" class="form-label">{{ trans('label.work_hours_per_year') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_year" id="work_hours_per_year" value="{{ old('work_hours_per_year') }}" placeholder="{{ trans('label.work_hours_per_year') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="work_hours_per_year_decimal_notation" class="form-label">{{ trans('label.work_hours_per_year_decimal_notation') }}</label>
                            <input type="text" class="form-control" name="work_hours_per_year_decimal_notation" id="work_hours_per_year_decimal_notation" value="{{ old('work_hours_per_year_decimal_notation') }}" placeholder="{{ trans('label.work_hours_per_year_decimal_notation') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="post_entry_training_hours" class="form-label">{{ trans('label.post_entry_training_hours') }}</label>
                            <input type="number" class="form-control" name="post_entry_training_hours" id="post_entry_training_hours" value="{{ old('post_entry_training_hours') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_hours" class="form-label">{{ trans('label.training_no1_hours') }}</label>
                            <input type="number" class="form-control" name="training_no1_hours" id="training_no1_hours" value="{{ old('training_no1_hours') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_hours" class="form-label">{{ trans('label.training_no2_hours') }}</label>
                            <input type="number" class="form-control" name="training_no2_hours" id="training_no2_hours" value="{{ old('training_no2_hours') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_hours" class="form-label">{{ trans('label.training_no3_hours') }}</label>
                            <input type="number" class="form-control" name="training_no3_hours" id="training_no3_hours" value="{{ old('training_no3_hours') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_span_period" class="form-label">{{ trans('label.training_span_period') }}</label>
                            <input type="text" class="form-control" name="training_span_period" id="training_span_period" value="{{ old('training_span_period') }}" placeholder="{{ trans('label.training_span_period') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_basic_salary_for_month" class="form-label">{{ trans('label.training_no1_basic_salary_for_month') }}</label>
                            <input type="number" class="form-control" name="training_no1_basic_salary_for_month" id="training_no1_basic_salary_for_month" value="{{ old('training_no1_basic_salary_for_month') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_basic_salary_for_day" class="form-label">{{ trans('label.training_no1_basic_salary_for_day') }}</label>
                            <input type="number" class="form-control" name="training_no1_basic_salary_for_day" id="training_no1_basic_salary_for_day" value="{{ old('training_no1_basic_salary_for_day') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no1_basic_salary_for_hour" class="form-label">{{ trans('label.training_no1_basic_salary_for_hour') }}</label>
                            <input type="number" class="form-control" name="training_no1_basic_salary_for_hour" id="training_no1_basic_salary_for_hour" value="{{ old('training_no1_basic_salary_for_hour') }}">
                        </div>

                        <!-- Continue the pattern for the remaining fields -->

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_basic_salary_for_month" class="form-label">{{ trans('label.training_no2_basic_salary_for_month') }}</label>
                            <input type="number" class="form-control" name="training_no2_basic_salary_for_month" id="training_no2_basic_salary_for_month" value="{{ old('training_no2_basic_salary_for_month') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_basic_salary_for_day" class="form-label">{{ trans('label.training_no2_basic_salary_for_day') }}</label>
                            <input type="number" class="form-control" name="training_no2_basic_salary_for_day" id="training_no2_basic_salary_for_day" value="{{ old('training_no2_basic_salary_for_day') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no2_basic_salary_for_hour" class="form-label">{{ trans('label.training_no2_basic_salary_for_hour') }}</label>
                            <input type="number" class="form-control" name="training_no2_basic_salary_for_hour" id="training_no2_basic_salary_for_hour" value="{{ old('training_no2_basic_salary_for_hour') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_basic_salary_for_month" class="form-label">{{ trans('label.training_no3_basic_salary_for_month') }}</label>
                            <input type="number" class="form-control" name="training_no3_basic_salary_for_month" id="training_no3_basic_salary_for_month" value="{{ old('training_no3_basic_salary_for_month') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_basic_salary_for_day" class="form-label">{{ trans('label.training_no3_basic_salary_for_day') }}</label>
                            <input type="number" class="form-control" name="training_no3_basic_salary_for_day" id="training_no3_basic_salary_for_day" value="{{ old('training_no3_basic_salary_for_day') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="training_no3_basic_salary_for_hour" class="form-label">{{ trans('label.training_no3_basic_salary_for_hour') }}</label>
                            <input type="number" class="form-control" name="training_no3_basic_salary_for_hour" id="training_no3_basic_salary_for_hour" value="{{ old('training_no3_basic_salary_for_hour') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="commuting_allowance" class="form-label">{{ trans('label.commuting_allowance') }}</label>
                            <input type="number" class="form-control" name="commuting_allowance" id="commuting_allowance" value="{{ old('commuting_allowance') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="approx_amount" class="form-label">{{ trans('label.approx_amount') }}</label>
                            <input type="number" class="form-control" name="approx_amount" id="approx_amount" value="{{ old('approx_amount') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="food_expense_div" class="form-label">{{ trans('label.food_expense_div') }}</label>
                            <select class="form-control" name="food_expense_div" id="food_expense_div">
                                <option value="1">{{ trans('label.yes') }}</option>
                                <option value="0">{{ trans('label.no') }}</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="food_expense_amount" class="form-label">{{ trans('label.food_expense_amount') }}</label>
                            <input type="number" class="form-control" name="food_expense_amount" id="food_expense_amount" value="{{ old('food_expense_amount') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="house_expense_amount" class="form-label">{{ trans('label.house_expense_amount') }}</label>
                            <input type="number" class="form-control" name="house_expense_amount" id="house_expense_amount" value="{{ old('house_expense_amount') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="accommodation_type" class="form-label">{{ trans('label.accommodation_type') }}</label>
                            <select class="form-control" name="accommodation_type" id="accommodation_type">
                                <option value="01">{{ trans('label.self_owned_property') }}</option>
                                <option value="02">{{ trans('label.leased_property') }}</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="light_heat_fee_div" class="form-label">{{ trans('label.light_heat_fee_div') }}</label>
                            <select class="form-control" name="light_heat_fee_div" id="light_heat_fee_div">
                                <option value="1">{{ trans('label.yes') }}</option>
                                <option value="0">{{ trans('label.no') }}</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="light_heat_fee" class="form-label">{{ trans('label.light_heat_fee') }}</label>
                            <input type="number" class="form-control" name="light_heat_fee" id="light_heat_fee" value="{{ old('light_heat_fee') }}">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="other_amount" class="form-label">{{ trans('label.other_amount') }}</label>
                            <input type="number" class="form-control" name="other_amount" id="other_amount" value="{{ old('other_amount') }}">
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

    </div>

</form>
@endsection

@section('script-footer')
<script src="{{ asset('assets/js/prism-custom.js') }}"></script>

<script src="{{ asset('assets/js/custom-switcher.min.js') }}"></script>
<!-- Custom JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

@endsection