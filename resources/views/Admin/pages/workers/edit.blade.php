@extends('Admin.layouts.master')

@section('pageTitle')
    <i class="fa fa-plus-circle"></i> {{ trans('backend.edit') }} {{ trans('backend.workers') }}
@endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('backend.enter') }} {{ trans('backend.infos') }}</h3>

            <!-- Start Button  -->
            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-warning" href="{{ route('workers.index') }}">
                    <i class="fa fa-reply fa-fw fa-lg"></i> {{ trans('backend.back') }}</a>
            </div>

        </div>

        <div class="box-body">

            <form id="myForm" action="{{ route('workers.update' , $worker->id) }}" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <!-- Start Row  -->
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputFile"><b>{{ trans('backend.image') }}</b></label>
                        <input type="file" name="image" id="exampleInputFile" style="padding: 10px;height:45px" class="form-control image {{ $errors->has('image') ? 'is-invalid' : '' }}">
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                        @endif
                        <div class="imagePreview">
                            <img style="width:250px;height:200px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset('uploads/workers/default.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="country_id"><b>{{ trans('backend.country') }}</b></label>
                        <select name="country_id" id="country_id" class="form-control">
                            <option value="">Select a country</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}" {{ $worker->country_id == $country->id ? 'selected' : '' }}>{{ $country->country }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="religion"><b>{{ trans('backend.religion') }}</b></label>
                        <select name="religion" id="religion" class="form-control">
                            <option value="">Select a religion</option>
                            <option value="Muslim" {{ $worker->religion == 'Muslim' ? 'selected' : '' }}>Muslim</option>
                            <option value="Christian" {{ $worker->religion == 'Christian' ? 'selected' : '' }}>Christian</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="job_id"><b>{{ trans('backend.job') }}</b></label>
                        <select name="job_id" id="job_id" class="form-control">
                            <option value="">Select a job</option>
                            @foreach($jobs as $job)
                                <option value="{{ $job->id }}" {{ $worker->job_id == $job->id ? 'selected' : '' }}>{{ $job->job }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="category_id"><b>{{ trans('backend.category') }}</b></label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $worker->category_id == $category->id ? 'selected' : '' }}>{{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                    <div class="form-group">
                        <label for="experience"><b>{{ trans('backend.experience') }}</b></label>
                        <select name="experience" id="experience" class="form-control">
                            <option value="">Select an experience</option>
                            <option value="Has good experience" {{ $worker->experience == 'Has good experience' ? 'selected' : '' }}>Has good experience</option>
                            <option value="Has no experience" {{ $worker->experience == 'Has no experience' ? 'selected' : '' }}>Has no experience</option>
                        </select>
                    </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="text-center" style="margin-top:30px">
                        <button type="submit" class="btn btn-success btn-block" style="font-size:16px"><i class="fa fa-refresh fa-fw fa-lg"></i> {{ trans('backend.update') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function(){

            // Summernote .
            $('#description').summernote({
                height : 300
            });

            // Validate Form ...
            $('#myForm').validate({
                rules : {
                    country : { required : true ,  },
                    experience : { required : true ,  },
                    category : { required : true ,  },
                    job : { required : true ,  },
                    religion : { required : true ,  },
                },
                messages : {

                },
                errorEelement : 'span',
                errorPlacement : function(error , element){
                    element.closest('.form-group').append(error);
                },

            });

        });
    </script>
@endpush