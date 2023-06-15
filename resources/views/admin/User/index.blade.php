@extends('admin.admin_master')

@section('dashboard_content')
{{-- @include('admin.dashboard_layout.breadcrumb', [
'name' => 'User',
'url' => "categories.index",
'section_name' => 'All User'
]) --}}
<section class="content">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="box">
                <div class="box-header with-border d-flex justify-content-between align-items-center">
                    <h3 class="box-title">All Brands Data Table</h3>
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Create New User</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example1" class="table table-bordered table-striped dataTable"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>ID</th>
                                                <th>User Name </th>
                                                <th>User Email</th>
                                                <th>User Phone Number </th>
                                                <th>User Avatar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $item)
                                            <tr role="row" class="odd">
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{ $item->id }}</td>
                                                <td class="sorting_1">{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone_number}}</td>
                                                <td>
                                                    <img src="{{ !empty($item->profile_photo_path) ? url('storage/profile-photos/'.$item->profile_photo_path) : url('storage/profile-photos/blank_profile_photo.jpg') }}"
                                                        alt="" style="width:70px; height:40px;">
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <a href="{{ route('user.edit', $item) }}" class="btn btn-info"
                                                            title="Edit Data"><i class="fa fa-pencil">Edit User</i></a>
                                                        <form action="{{ route('user.destroy', $item) }}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="" class="btn btn-danger" title="Delete Data"
                                                                id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i
                                                                    class="fa fa-trash"></i>Delete User</a>
                                                        </form>
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
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection