@extends('Front.layouts.master')
@section('content')
    <style>
        .background-image {
            background: linear-gradient(transparent, transparent, #fff), url('{{ asset('front/assets/images/bg.0669d73ac7189e72e94e.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
        }
    </style>
    <div class="background-image">
        <div class="iq-breadcrumb bg-soft-success  ">
            <div class="container">
            </div>
        </div> <!-- bread-crumb -->
    </div>
    <!-- Add this modal code at the bottom of your page, just before the closing </body> tag -->
    <div class="container">
                <div class="modal-body">
                    <form action="{{ route('submit-request') }}" method="POST">
                        @csrf
                        <div class="row">
                            <!-- Identity Id -->
                            <div class="form-group col-md-6">
                                <label for="name">{{ trans('backend.name')}}<span class="mx-1 text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" >
                                @if ($errors->has('name'))
                                                                       <span class="text-danger" role="alert">

                                   {{ $errors->first('name') }}
                                </span>
                                @endif
                            </div>
                            <!-- Identity ID -->
                            <div class="form-group col-md-6">
                                <label for="identity_id">{{ trans('backend.identity_id')}}<span class="mx-1 text-danger">*</span></label>
                                <input type="number" class="form-control" id="identity_id" name="identity_id" >
                                @if ($errors->has('identity_id'))
                                                                       <span class="text-danger" role="alert">

                                   {{ $errors->first('identity_id') }}
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <!-- Date of Birth - Hijri -->
                            <div class="form-group col-md-6">
                                <label for="date_of_birth_hijri">{{ trans('date_of_birth_hijri')}}<span class="mx-1 text-danger">*</span></label>
                                <input type="date" class="form-control" id="date_of_birth_hijri" name="date_of_birth_hijri" >
                                @if ($errors->has('date_of_birth_hijri'))
                                                                       <span class="text-danger" role="alert">

                                   {{ $errors->first('date_of_birth_hijri') }}
                                </span>
                                @endif
                            </div>
                            <!-- Phone -->
                            <div class="form-group col-md-6">
                                <label for="phone">{{ trans('backend.phone')}}<span class="mx-1 text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone" >
                                @if ($errors->has('phone'))
                                    <span class="text-danger" role="alert">
                                    {{ $errors->first('phone') }}
                                </span>
                                @endif
                            </div>
                        </div>

                        <!-- Check if "has visa Already" is checked -->
                        <div class="form-group col-md-6">
                            <input style="height: 20px; width: 20px"  type="checkbox" name="hasVisaCheckbox" id="hasVisaCheckbox">
                            <label for="hasVisaCheckbox">{{ trans('backend.has_visa_already')}}</label>
                        </div>
                        <div style="margin-left: 20px" class="form-group col-md-6" >
                            <div class="row">
                                <!-- Verification Code -->
                                <label for="verification_code">{{ trans('backend.verification_code')}}<span class="mx-1 text-danger">*</span></label>
                                <input style="width: 70%" type="text" class="form-control" id="verification_code" name="verification_code" >
                                <span style="margin-left: 10px;background-color: #66bb6a;color: white;width: 80px; height: 32px; padding-top: 9px;" class="input-group-text badge justify-content-center align-items-center">{{ trans('backend.57652')}}</span>
                                @if ($errors->has('verification_code'))
                                    <span class="text-danger" role="alert">
                                    {{ $errors->first('verification_code') }}
                                </span>
                                @endif
                            </div>
                        </div>
                        <div id="additionalFields" style="display: none;">


                            <div class="row" >
                                <!-- Visa Number -->
                                <div class="form-group col-md-6">
                                    <label for="visa_number">{{ trans('backend.visa_number')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="visa_number" name="visa_number">
                                    @if ($errors->has('visa_number'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('visa_number') }}
                                </span>
                                    @endif
                                </div>
                                <!-- Visa Date - Hijri -->
                                <div class="form-group col-md-6">
                                    <label for="visa_date_hijri">{{ trans('backend.visa_date_hijri')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="date" class="form-control" id="visa_date_hijri" name="visa_date_hijri">
                                    @if ($errors->has('visa_date_hijri'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('visa_date_hijri') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <!-- Border Number -->
                                <div class="form-group col-md-6">
                                    <label for= "border_number">{{trans('backend.border_number')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="border_number" name="border_number">
                                    @if ($errors->has('border_number'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('border_number') }}
                                </span>
                                    @endif
                                </div>
                                <!-- Work Place -->
                                <div class="form-group col-md-6">
                                    <label for="work_place">{{ trans('backend.work_place')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="work_place" name="work_place" >
                                    @if ($errors->has('work_place'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('work_place') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <!-- Work City -->
                                <div class="form-group col-md-6">
                                    <label for="work_city">{{ trans('backend.work_city')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="work_city" name="work_city" >
                                    @if ($errors->has('work_city'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('work_city') }}
                                </span>
                                    @endif
                                </div>
                                <!-- Address -->
                                <div class="form-group col-md-6">
                                    <label for="address">{{ trans('backend.address')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="address" name="address" >
                                    @if ($errors->has('address'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('address') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <!-- Name of a first-degree relative -->
                                <div class="form-group col-md-6">
                                    <label for="relative_name">{{ trans('backend.name_of_a_first_degree_relative')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="relative_name" name="relative_name" >
                                    @if ($errors->has('relative_name'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('relative_name') }}
                                </span>
                                    @endif
                                </div>
                                <!-- Relative Type -->
                                <div class="form-group col-md-6">
                                    <label for="relative_type">{{ trans('backend.relative_type')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="relative_type" name="relative_type" >
                                    @if ($errors->has('relative_type'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('relative_type') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <!-- Relative Phone -->
                                <div class="form-group col-md-6">
                                    <label for="relative_phone">{{ trans('backend.relative_phone')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="relative_phone" name="relative_phone" >
                                    @if ($errors->has('relative_phone'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('relative_phone') }}
                                </span>
                                    @endif
                                </div>
                                <!-- Employer of the person close to you -->
                                <div class="form-group col-md-6">
                                    <label for="employer">{{ trans('backend.employer_of_the_person_close_to_you')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="text" class="form-control" id="employer" name="employer" >
                                    @if ($errors->has('employer'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('employer') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="num_floors">{{ trans('backend.number_of_floors')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="number" class="form-control" id="num_floors" name="num_floors" value="1">
                                    @if ($errors->has('num_floors'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('num_floors') }}
                                </span>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <!-- Number of rooms -->
                                    <label for="num_rooms">{{ trans('backend.num_rooms')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="number" class="form-control" id="num_rooms" name="num_rooms" value="1">
                                    @if ($errors->has('num_rooms'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('num_rooms') }}
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <!-- Number of family members -->
                                <div class="form-group col-md-6">
                                    <label for="num_family_members">{{ trans('backend.num_family_members')}}<span class="mx-1 text-danger">*</span></label>
                                    <input type="number" class="form-control" id="num_family_members" name="num_family_members" value="1">
                                    @if ($errors->has('num_family_members'))
                                                                           <span class="text-danger" role="alert">

                                   {{ $errors->first('num_family_members') }}
                                </span>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <!-- Notes -->
                        <div class="row form-group col-md-12">
                            <label for="notes">{{ trans('backend.notes')}}</label>
                            <textarea style="margin-left:20px;width: 100%" class="form-control" id="notes" name="notes" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Move your JavaScript code inside this <script> block -->
<script>
    $(document).ready(function () {
        $('#addDataModal').click(function () {
            $('#requestModal').modal('show');
        });

        // Show or hide additional fields based on the checkbox
        $('#hasVisaCheckbox').change(function () {
            var additionalFields = $('#additionalFields');
            if ($(this).is(':checked')) {
                additionalFields.show();
            } else {
                additionalFields.hide();
            }
        });
    });
</script>