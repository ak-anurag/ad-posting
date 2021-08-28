@extends('admin.parent')

@section('stylesheet')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection

@section('js_down')
    {{-- <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>
 --}}

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table').DataTable();
        });
    </script>
@endsection

@section('content')
    <div class="animated fadeIn">

        @if (Session::has('success'))
            <div class="alert alert-success">
                <strong>
                    {{ Session::get('success') }}
                </strong>
            </div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">
                <strong>
                    {{ Session::get('fail') }}
                </strong>
            </div>
        @endif

        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-user"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib"> 
                                    <div class="stat-text"><span class="count">{{ $users->count() }}</span></div>
                                    <div class="stat-heading">Users</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $posts }}</span></div>
                                    <div class="stat-heading">Posts</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{{-- 
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">349</span></div>
                                    <div class="stat-heading">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">2986</span></div>
                                    <div class="stat-heading">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- /Widgets -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Users</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Joined At</th>
                                    <th>Ad Count</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ Str::ucfirst($item->name) }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ date('d-m-Y h:i:s A', strtotime($item->created_at)) }}</td>
                                        <td>{{ $item->posts->count() }}</td>
                                        <td>

                                            @if ($item->is_blocked == 0)
                                                <div class="d-flex justify-content-around">
                                                    <div>
                                                        <button type="button" onclick="event.preventDefault(); document.getElementById('userBlockForm{{ $item->id }}').submit();" class="btn btn-danger btn-sm">Block</button>
        
                                                        <form action="{{ route('admin.block.user') }}" id="userBlockForm{{ $item->id }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{ Crypt::encrypt($item->id) }}">
                                                        </form>
                                                    </div>
                                                </div>
                                            @elseif($item->is_blocked == 1)
                                                <div class="d-flex justify-content-around">
                                                    <div>
                                                        <button type="button" onclick="event.preventDefault(); document.getElementById('userUnblockForm{{ $item->id }}').submit();" class="btn btn-success btn-sm">Unblock</button>
        
                                                        <form action="{{ route('admin.unblock.user') }}" id="userUnblockForm{{ $item->id }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="user_id" value="{{ Crypt::encrypt($item->id) }}">
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
