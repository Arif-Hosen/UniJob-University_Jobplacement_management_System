@extends('layout.admin')

@section('stylesheet')
    <!-- DataTables -->
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 class="panel-title">Job Fair Job Post List</h2>
                        </header>
                        <div class="panel-body">
                            @if (session()->has('status'))
                                {!! session()->get('status') !!}
                            @endif

                            @if (\App\Helper\CustomHelper::canView('Manage Industry Post|Delete Industry Post', 'Industry'))
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                                        <a href="{{ route('admin.job.post.create.jobFairPost', request()->route('id')) }}"
                                            class="brn btn-success btn-sm">New Job</a>
                                    </div>
                                </div>
                            @endif

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                cellspacing="0" width="100%" style="font-size: 14px">

                                <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th>Job Title</th>
                                        <th>Position</th>
                                        <th>Vacancy</th>
                                        @if (\App\Helper\CustomHelper::canView('Manage Industry Post|Delete Industry Post', 'Industry'))
                                            <th>status</th>
                                            <th width="15%">Option</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $key => $val)
                                        <tr class="@if ($key % 2 == 0) gradeX @else gradeC @endif">
                                            <td class="p-1">{{ $key + 1 }}</td>
                                            <td class="p-1 text-capitalize">{{ $val->job_title }}</td>
                                            <td class="p-1 text-capitalize">{{ $val->position }}</td>
                                            <td class="p-1 text-capitalize">{{ $val->vacancy }}</td>
                                            @if (\App\Helper\CustomHelper::canView('Manage Industry Post', 'Industry'))
                                                <td class="text-capitalize p-1" width="100">
                                                    <div class="onoffswitch">
                                                        <input type="checkbox" name="onoffswitch"
                                                            class="onoffswitch-checkbox" @checked($val->status == \App\Models\IndustryPost::$statusArrays[1])
                                                            data-id="{{ $val->id }}"
                                                            id="myonoffswitch{{ $key + 1 }}">
                                                        <label class="onoffswitch-label"
                                                            for="myonoffswitch{{ $key + 1 }}">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            @else
                                            @endif
                                            @if (\App\Helper\CustomHelper::canView('Manage Industry Post|Delete Industry Post', 'Industry'))
                                                <td class="text-center p-1" width="100">
                                                    @if (\App\Helper\CustomHelper::canView('Manage Industry Post', 'Industry'))
                                                        <a href="{{ route('admin.employer.application.list', $val->id) }}"
                                                            class="btn btn-sm btn-info"> <i class="fa fa-list"></i> </a>
                                                    @endif
                                                    @if (\App\Helper\CustomHelper::canView('Manage Industry Post', 'Industry'))
                                                        <a href="{{ route('admin.job.post.manage', $val->id) }}"
                                                            class="btn btn-sm btn-success"> <i class="fa fa-edit"></i> </a>
                                                    @endif
                                                    @if (\App\Helper\CustomHelper::canView('Delete Industry Post', 'Industry'))
                                                        <span
                                                            class="btn btn-sm btn-danger btn-delete delete_{{ $val->id }}"
                                                            style="cursor: pointer" data-id="{{ $val->id }}"><i
                                                                class="fa fa-trash-o"></i></span>
                                                    @endif
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="userDeleteModal" tabindex="-1" role="dialog" aria-labelledby="userDeleteModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Delete Post</h4>
                </div>
                <div class="modal-body">
                    <strong>Are you sure to delete this Post?</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-success btn-sm yes-btn">Yes</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            // $('#datatable-buttons').DataTable();

            // var table = $('#datatable-buttons').DataTable({
            //   lengthChange: false,
            //   buttons: ['copy', 'excel', 'pdf', 'colvis']
            // });
            //
            // table.buttons().container()
            //   .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');


            $(document).on('change', 'input[name="onoffswitch"]', function() {
                var status = 'inactive';
                var id = $(this).data('id')
                var isChecked = $(this).is(":checked");
                if (isChecked) {
                    status = 'active';
                }
                $.ajax({
                    url: "{{ route('admin.ajax.update.job.post.status') }}",
                    method: "post",
                    dataType: "html",
                    data: {
                        'id': id,
                        'status': status
                    },
                    success: function(data) {
                        if (data === "success") {}
                    }
                });
            })


            $(document).on('click', '.yes-btn', function() {
                var pid = $(this).data('id');
                var $this = $('.delete_' + pid)
                $.ajax({
                    url: "{{ route('admin.job.post.destroy') }}",
                    method: "DELETE",
                    dataType: "html",
                    data: {
                        id: pid
                    },
                    success: function(data) {
                        if (data === "success") {
                            $('#userDeleteModal').modal('hide')
                            $this.closest('tr').css('background-color', 'red').fadeOut();
                        }
                    }
                });
            })

            $(document).on('click', '.btn-delete', function() {
                var pid = $(this).data('id');
                $('.yes-btn').data('id', pid);
                $('#userDeleteModal').modal('show')
            });
        })
    </script>
@endsection
