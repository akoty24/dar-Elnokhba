@extends('Admin.layouts.master')

@section('pageTitle') <i class="fa fa-user-plus"></i> {{ trans('backend.orders') }} @endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title">
                {{ trans('backend.info') }} {{ trans('backend.orders') }}

            </h3>

            <div class="button-page-header">
                <a class="btn btn-block btn-primary" href="{{ route('orders.create') }}">
                    <i class="fa fa-plus-circle fa-fw fa-lg"></i> {{ trans('backend.create_new') }}</a>
            </div>




        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="yajra-datatable" class="table table-hover table-bordered text-center">
                    <thead>
                    <tr>
                        <th><b>{{ trans('#') }}</b></th>
                        <th><b>{{ trans('backend.Identity ID') }}</b></th>
                        <th><b>{{ trans('backend.Date of Birth (Hijri)') }}</b></th>
                        <th><b>{{ trans('backend.Phone') }}</b></th>
                        <th><b>{{ trans('backend.Visa Number') }}</b></th>
                        <th><b>{{ trans('backend.Visa Date (Hijri)') }}</b></th>
                        <th><b>{{ trans('backend.Border Number') }}</b></th>
                        <th><b>{{ trans('backend.Work Place') }}</b></th>
                        <th><b>{{ trans('backend.Work City') }}</b></th>
                        <th><b>{{ trans('backend.Address') }}</b></th>
                        <th><b>{{ trans('backend.Relative Name') }}</b></th>
                        <th><b>{{ trans('backend.Relative Type') }}</b></th>
                        <th><b>{{ trans('backend.Relative Phone') }}</b></th>
                        <th><b>{{ trans('backend.Employer') }}</b></th>
                        <th><b>{{ trans('backend.Number of Floors') }}</b></th>
                        <th><b>{{ trans('backend.Number of Rooms') }}</b></th>
                        <th><b>{{ trans('backend.Number of Family Members') }}</b></th>
                        <th><b>{{ trans('backend.Verification Code') }}</b></th>
                        <th><b>{{ trans('backend.Notes') }}</b></th>
                        <th><b>{{ trans('backend.status') }}</b></th>
                        <th><b>{{ trans('backend.date') }}</b></th>
                        <th width="8%"><b>{{ trans('backend.manage')}}</b></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $orders as $index=>$order )
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $order->identity_id }}</td>
                            <td>{{ $order->date_of_birth_hijri }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->visa_number }}</td>
                            <td>{{ $order->visa_date_hijri }}</td>
                            <td>{{ $order->border_number }}</td>
                            <td>{{ $order->work_place }}</td>
                            <td>{{ $order->work_city }}</td>
                            <td>{{ $order->address }}</td>
                            <td>{{ $order->relative_name }}</td>
                            <td>{{ $order->relative_type }}</td>
                            <td>{{ $order->relative_phone }}</td>
                            <td>{{ $order->employer }}</td>
                            <td>{{ $order->num_floors }}</td>
                            <td>{{ $order->num_rooms }}</td>
                            <td>{{ $order->num_family_members }}</td>
                            <td>{{ $order->verification_code }}</td>
                            <td>{{ $order->notes }}</td>
                            <td>
                                @if( $admin->status == 0 )
                                    <span class="badge label-success">{{ trans('backend.Completed') }}</span>
                                @elseif( $admin->status == 1 )
                                    <span class="badge label-primary">{{ trans('backend.InProgress') }}</span>
                                @else
                                    <span class="badge label-danger">{{ trans('backend.Canceled') }}</span>
                                @endif
                            </td>
                            <td>{{ $order->created_at->diffForHumans() }}</td>
                            <td>
                                <div class="btn-group manage-button" title="View Account">
                                    <a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>
                                    <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                        <li>
                                            <a title="{{ trans('backend.edit') }} {{ trans('backend.record') }}" href="{{ route('orders.edit' , $order->id) }}">
                                                <i class="fa fa-fw fa-pencil"></i> {{ trans('backend.edit') }}
                                            </a>
                                        </li>

                                        <li>
                                            <form action="{{ route('orders.destroy' , $order->id) }}" method="POST" style="display:inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button title="{{ trans('backend.edit') }} {{ trans('backend.record') }}" type="submit"  class="delete" style="cursor:pointer">
                                                    <i class="fa fa-trash fa-fw"></i> {{ trans('backend.delete') }}
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.box-body -->
    </div>

@endsection


@push('scripts')
    <script>
        $(document).ready(function(){
            var table = $('#yajra-datatable').DataTable();
        });
    </script>
@endpush