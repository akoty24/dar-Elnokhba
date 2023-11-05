@extends('admin.layouts.master')

@section('pageTitle')
    <i class="fa fa-globe"></i> {{ trans('backend.website_information') }}
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('backend.manage') }} {{ trans('backend.website_information') }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('backend.logo') }}</th>
                        <th>{{ trans('backend.title') }}</th>
                        <th>{{ trans('backend.phone') }}</th>
                        <th>{{ trans('backend.address') }}</th>
                        <th>{{ trans('backend.location') }}</th>
                        <th>{{ trans('backend.whatsapp') }}</th>
                        <th>{{ trans('backend.twitter') }}</th>
                        <th>{{ trans('backend.snapchat') }}</th>
                        <th>{{ trans('backend.instagram') }}</th>
                        <th>{{ trans('backend.email') }}</th>
                        <th>{{ trans('backend.manage') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($website_info as $index => $info)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img style="width:50px;height:50px;object-fit:contain" src="{{ asset($info->logo) }}" alt="">
                            </td>
                            <td>{{ $info->title }}</td>
                            <td>{{ $info->phone }}</td>
                            <td>{{ $info->address }}</td>
                            <td>{{ $info->location }}</td>
                            <td>{{ $info->whatsapp }}</td>
                            <td>{{ $info->twitter }}</td>
                            <td>{{ $info->snapchat }}</td>
                            <td>{{ $info->instagram }}</td>
                            <td>{{ $info->email }}</td>
                            <td>
                                <div class="btn-group manage-button" title="View Account">
                                    <a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>

                                    <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                        <br>
                                        <br>
                                        <li>
                                            <a title="{{ trans('backend.edit') }} {{ trans('backend.record') }}" href="{{ route('website-info.edit' , $info->id) }}">
                                                <i class="fa fa-fw fa-pencil"></i> {{ trans('backend.edit') }}
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('website-info.destroy' , $info->id) }}" method="POST" style="display:inline">
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
        $(document).ready(function () {
            // DataTable initialization
            $('#dataTable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': false,
                'responsive': true,
                'language': {
                    'url': '//cdn.datatables.net/plug-ins/1.10.24/i18n/{{ app()->getLocale() }}.json'
                }
            });
        });
    </script>
@endpush
