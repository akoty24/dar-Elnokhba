@extends('Admin.layouts.master')

@section('pageTitle')
    <i class="fa fa-plus-circle"></i> {{ trans('backend.edit') }} {{ trans('backend.website_information') }}
@endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('backend.enter') }} {{ trans('backend.infos') }}</h3>

            <!-- Start Button  -->
            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-warning" href="{{ route('website-info.index') }}">
                    <i class="fa fa-reply fa-fw fa-lg"></i> {{ trans('backend.back') }}</a>
            </div>

        </div>

        <div class="box-body">

            <form id="myForm" action="{{ route('website-info.update',$website_info->id) }}" method="POST" class="userForm"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <!-- Start Row  -->
                <div class="row">
                    <!-- Label -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputFile"><b>{{ trans('backend.logo') }}</b></label>
                            <input type="file" name="logo" id="exampleInputFile" value="{{$website_info->logo}}" style="padding: 10px;height:45px" class="form-control image {{ $errors->has('logo') ? 'is-invalid' : '' }}">
                            @if ($errors->has('logo'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                            @endif
                            <div class="imagePreview">
                                <img style="width:250px;height:200px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset($website_info->logo) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title"><b>{{ trans('backend.title') }}</b></label>
                            <input type="text" name="title" id="title"
                                   class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->title }}">
                            @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="whatsapp"><b>{{ trans('backend.whatsapp') }}</b></label>
                            <input type="text" name="whatsapp" id="whatsapp"
                                   class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->whatsapp }}">
                            @if ($errors->has('whatsapp'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('whatsapp') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><b>{{ trans('backend.twitter') }}</b></label>
                            <input type="text" name="twitter" id="twitter"
                                   class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->twitter }}">
                            @if ($errors->has('twitter'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('twitter') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="snapchat"><b>{{ trans('backend.snapchat') }}</b></label>
                            <input type="text" name="snapchat" id="snapchat"
                                   class="form-control {{ $errors->has('snapchat') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->snapchat }}">
                            @if ($errors->has('snapchat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('snapchat') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="instagram"><b>{{ trans('backend.instagram') }}</b></label>
                            <input type="text" name="instagram" id="instagram"
                                   class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->instagram }}">
                            @if ($errors->has('instagram'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('instagram') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email"><b>{{ trans('backend.email') }}</b></label>
                            <input type="email" name="email" id="email"
                                   class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->email }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Phone -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone"><b>{{ trans('backend.phone') }}</b></label>
                            <input type="text" name="phone" id="phone"
                                   class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->phone }}">
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address"><b>{{ trans('backend.address') }}</b></label>
                            <input type="text" name="address" id="address"
                                   class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->address }}">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <!-- location -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="location"><b>{{ trans('backend.location') }}</b></label>
                            <input type="text" name="location" id="location"
                                   class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}"
                                   value="{{ $website_info->location }}">
                            @if ($errors->has('location'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('location') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="text-center" style="margin-top:30px;margin-bottom:10px">
                            <button type="submit" class="btn btn-primary btn-block" style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i> {{ trans('backend.update') }}</button>
                        </div>
                    </div>

                </div>
                <!-- End Row  -->


            </form>

        </div>

    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function () {

            // Summernote .
            $('#description').summernote({
                height: 300
            });

            // Validate Form ...
            $('#myForm').validate({
                rules: {
                    title: {required: true,},
                    logo: {required: true,},
                    whatsapp: {required: false,},
                    twitter: {required: false, },
                    instagram: {required: false,},
                },
                messages: {},
                errorEelement: 'span',
                errorPlacement: function (error, element) {
                    element.closest('.form-group').append(error);
                },

            });

        });
    </script>
@endpush