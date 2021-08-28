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
        jQuery(document).ready(function() {
            var $ = jQuery;
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Posts</strong>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                        <tr>
                                            <td>
                                                {{ $item->id }}
                                            </td>
                                            <td>
                                                {{ Str::ucfirst($item->category) }}
                                            </td>
                                            <td>
                                                <a href="{{ route('adlist.detail', ['post_id' => $item->id, 'slug' => Str::slug($item->title)]) }}" class="text-primary">{{ ucfirst($item->title) }}</a>
                                            </td>
                                            <td>
                                                {{ $item->phone }}
                                            </td>
                                            <td>
                                                {{ $item->email }}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-around">
                                                    <div>
                                                        <button type="button" onclick="event.preventDefault(); document.getElementById('blockPostForm{{ $item->id }}').submit();" class="btn btn-sm btn-danger">Remove</button>

                                                        <form action="{{ route('admin.post.block') }}" method="post" id="blockPostForm{{ $item->id }}">
                                                            @csrf
                                                            <input type="hidden" name="post_id" value="{{ Crypt::encrypt($item->id) }}">
                                                        </form>
                                                    </div>
                                                </div>
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



    </div>
@endsection
