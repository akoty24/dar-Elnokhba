@extends('admin.layouts.master')

@section('pageTitle')
    <i class="fa fa-globe"></i> {{ trans('backend.messages') }}
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('backend.manage') }} {{ trans('backend.messages') }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ trans('backend.name') }}</th>
                        <th>{{ trans('backend.phone') }}</th>
                        <th>{{ trans('backend.email') }}</th>
                        <th>{{ trans('backend.subject') }}</th>
                        <th>{{ trans('backend.message') }}</th>
                        <th>{{ trans('backend.manage') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($messages as $index => $message)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                          
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->phone }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->subject }}</td>
                            <td>{{ $message->message }}</td>
                            <td>
                                <div class="btn-group manage-button" title="View Account">
                                    <a class="btn btn-primary btn-o dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                    </a>
                                    <ul role="menu" class="dropdown-menu dropdown-light pull-right">
                                        <br>
                                        <br>
                                        <li>
                                            <a title="{{ trans('backend.show') }} {{ trans('backend.record') }}" href="{{ route('messages.show' , $message->id) }}">
                                                <i class="fa fa-fw fa-eye"></i> {{ trans('backend.show') }}
                                            </a>
                                        </li>

                                        <li>
                                            <form action="{{ route('messages.destroy' , $message->id) }}" method="POST" style="display:inline">
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
                'message': true,
                'autoWidth': false,
                'responsive': true,
                'language': {
                    'url': '//cdn.datatables.net/plug-ins/1.10.24/i18n/{{ app()->getLocale() }}.json'
                }
            });
        });
    </script>
@endpush
