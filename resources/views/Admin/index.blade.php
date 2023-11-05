@extends('Admin.layouts.master')

@section('pageTitle') <i class="fa fa-dashboard"></i> {{ trans('backend.dashboard') }} @endsection

@section('content')
<!-- Info boxes -->
    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner text-uppercase">
            <h3>{{ $admins->count() }}</h3><p>{{ trans('backend.admins') }}</p>
          </div>
          <div class="icon">
            <i class="fa fa-user-plus"></i>
          </div>
            
          <a href="{{ route('admin.admins.index') }}" class="small-box-footer text-uppercase"> {{ trans('backend.show_info') }} <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-12 col-xs-12">
        <!-- Calendar Component  -->
        <div id="calendar">

        </div>
      </div>

      

    </div>

    
    <!-- Info boxes -->

@endsection 


@push('scripts')

  <script>
    $(document).ready(function(){
        
        // Full Calendar .
        // $('#calendar').fullCalendar({
            
        //     header : {
        //         left : 'prev,next,today',
        //         center : 'title',
        //         right : 'month,agendaWeek,agendaDay'
        //     },
        //     eventSources: [
        //         {
        //             url: '',
        //             type: 'GET'
        //         },
        //         {
        //             url: '',
        //             type: 'GET'
        //         },
        //         {
        //             url: '',
        //             type: 'GET'
        //         }
        //     ],
        //     eventClick : function(event){
                
        //         if( event.color == '#127ebd' ){
        //             // blue [ agences ]

        //             @if( app()->getLocale() == 'ar' )
        //                 var url = "{{ url('ar/human_resource/agences/show/') }}/" + event.id;
        //             @else
        //                 var url = "{{ url('en/human_resource/agences/show/') }}/" + event.id;
        //             @endif

        //             window.location.href = url;

        //         }else if( event.color == '#d13e3e' ){
        //             // red [ schedule ]

        //             @if( app()->getLocale() == 'ar' )
        //                 var url = "{{ url('ar/human_resource/schedules/show/') }}/" + event.id;
        //             @else
        //                 var url = "{{ url('en/human_resource/schedules/show/') }}/" + event.id;
        //             @endif

        //             window.location.href = url;

        //         }else if( event.color == '#59a74b' ){
        //             // green [ ads ]
                    
        //             @if( app()->getLocale() == 'ar' )
        //                 var url = "{{ url('ar/human_resource/marketers/ads/show/') }}/" + event.id;
        //             @else
        //                 var url = "{{ url('en/human_resource/marketers/ads/show/') }}/" + event.id;
        //             @endif

        //             window.location.href = url;
        //         }
        //     }
            
        // });

    });
  </script>

    <script>

        //line chart
        /*var line = new Morris.Line({
            element: 'line-chart',
            resize: true,
            data: [
              {y: '2006', a: 100, b: 90},
              {y: '2007', a: 75, b: 65},
              {y: '2008', a: 50, b: 40},
              {y: '2009', a: 75, b: 65},
              {y: '2010', a: 50, b: 40},
              {y: '2011', a: 75, b: 65},
              {y: '2012', a: 100, b: 90}
            ],
            barColors: ['#00a65a', '#f56954'],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: [1,2,3,4,5,6],
            lineWidth: 2,
            hideHover: 'auto',
            gridStrokeWidth: 0.4,
            pointSize: 4,
            gridTextFamily: 'Open Sans',
            gridTextSize: 10
        });*/

      //   var bar = new Morris.Bar({
      //   element: 'line-chart',
      //   resize: true,
      //   data: [
      //     {y: '2006', a: 100, b: 90},
      //     {y: '2007', a: 75, b: 65},
      //     {y: '2008', a: 50, b: 40},
      //     {y: '2009', a: 75, b: 65},
      //     {y: '2010', a: 50, b: 40},
      //     {y: '2011', a: 75, b: 65},
      //     {y: '2012', a: 100, b: 90}
      //   ],
      //   barColors: ['#00a65a', '#f56954'],
      //   xkey: 'y',
      //   ykeys: ['a', 'b'],
      //   labels: ['CPU', 'DISK'],
      //   hideHover: 'auto'
      // });
    </script>

@endpush