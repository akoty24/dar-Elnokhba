@extends('Admin.layouts.master')

@section('pageTitle') 
    <i class="fa fa-plus-circle"></i> {{ trans('backend.add') }} {{ trans('backend.workers') }} 
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
                
            <form id="myForm" action="{{ route('workers.store') }}" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('POST') }}

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
                            <label for="country"><b>{{ trans('backend.country') }}</b></label>
                            <select name="country_id" id="country" class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}">
                                <option value="">Select a country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" {{ (old('country') == $country->country) ? 'selected' : '' }}>{{ $country->country }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('country'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('country') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="religion"><b>{{ trans('backend.religion') }}</b></label>
                            <select name="religion" id="religion" class="form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}">
                                <option value="">Select a religion</option>
                                <option value="1" {{ old('religion') == 'Muslim' ? 'selected' : '' }}>Muslim</option>
                                <option value="2" {{ old('religion') == 'Christian' ? 'selected' : '' }}>Christian</option>
                            </select>
                            @if ($errors->has('religion'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('religion') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="job"><b>{{ trans('backend.job') }}</b></label>
                            <select name="job_id" id="job" class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}">
                                <option value="">Select a job</option>
                            @foreach($jobs as $job)
                                    <option value="{{ $job->id }}" {{ (old('job') == $job->job) ? 'selected' : '' }}>{{ $job->job }}</option>
                                @endforeach
                                <!-- Add more options as needed -->
                            </select>
                            @if ($errors->has('job'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('job') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category"><b>{{ trans('backend.category') }}</b></label>
                            <select name="category_id" id="category" class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}">
                                <option value="">Select a category</option>
                            @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ (old('category') == $category->category) ? 'selected' : '' }}>{{ $category->category }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="experience"><b>{{ trans('backend.experience') }}</b></label>
                            <select name="experience" id="experience" class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}">
                                <option value="">Select a experience</option>
                                <option value="1" {{ old('experience') == 'Has good experience' ? 'selected' : '' }}>Has good experience</option>
                                <option value="2" {{ old('experience') == 'Has no experience' ? 'selected' : '' }}>Has no experience</option>
                                <!-- Add more options as needed -->
                            </select>
                            @if ($errors->has('category'))
                                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('category') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="text-center" style="margin-top:30px">
                            <button type="submit" class="btn btn-primary btn-block" style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i> {{ trans('backend.save') }}</button>
                        </div>
                    </div>
                <!-- End Row  -->
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