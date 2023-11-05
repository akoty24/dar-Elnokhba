@extends('Admin.layouts.master')

@section('pageTitle') 
    <i class="fa fa-plus-circle"></i> {{ trans('backend.show') }} {{ trans('backend.message') }}
@endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title"> {{ trans('backend.infos') }}</h3>



            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-warning" href="{{ route('messages.index') }}">
                <i class="fa fa-reply fa-fw fa-lg"></i> {{ trans('backend.back') }}</a>
            </div>
            
        </div>

        <div class="box-body">
                
            <form id="myForm" action="" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-8">
                        <!-- Main Info  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" style="color:#337ab7"><b>{{ trans('backend.name') }}</b></label>
                                    <h4 style="margin:0">{{ $message->name }}</h4>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone" style="color:#337ab7"><b>{{ trans('backend.phone') }}</b></label>
                                    <h4 style="margin:0">{{ $message->phone }}</h4>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" style="color:#337ab7"><b>{{ trans('backend.email') }}</b></label>
                                    <h4 style="margin:0">{{ $message->email }}</h4>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject" style="color:#337ab7"><b>{{ trans('backend.subject') }}</b></label>
                                    <h4 style="margin:0">{{ $message->subject }}</h4>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message" style="color:#337ab7"><b>{{ trans('backend.message') }}</b></label>
                                    <h4 style="margin:0">{{ $message->message }}</h4>
                                </div>
                            </div>
                            
                        </div>
                </div>

                
                </div>
            </form>
                    
        </div>   

    </div>

@endsection


@push('scripts')
<script>
$(document).ready(function(){

  // Validate Form ...
  $('#myForm').validate({
      rules : {
        name : { required : true ,  },
        email : { required : true , email: true },
        subject : { required : true ,  },
        message : { required : true ,  },
        phone : { required : true , minlength: 10, maxlength:15 },
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