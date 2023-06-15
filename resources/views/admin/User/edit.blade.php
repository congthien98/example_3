@extends('admin.admin_master')

@section('dashboard_content')
{{-- @include('admin.dashboard_layout.breadcrumb', [
'name' => 'Category',
'url' => "categories.index",
'section_name' => 'Edit Category'
]) --}}
<section class="content">
    <div class="row">
        {{-- Add Category Page --}}
        <div class="col-md-8 col-lg-8 offset-2">
            <div class="box">
                <div class="box-header with-border d-flex justify-content-between align-items-center">
                    <h3 class="box-title">Update User</h3>
                    <a href="{{ route('user.index') }}" class="btn btn-primary">Back To List User</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('user.update', $user) }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <h5>User Name <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="{{ old('name', $user) }}" name="name" class="form-control"
                                    required="" data-validation-required-message="This field is required">
                                <div class="help-block"></div>
                            </div>
                            @error('name')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h5>User Email <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="text" value="{{ old('email', $user->email) }}" name="email"
                                    class="form-control" required=""
                                    data-validation-required-message="This field is required">
                                <div class="help-block"></div>
                            </div>
                            @error('mail')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h5>User Phone Number <span class="text-danger"></span></h5>
                            <div class="controls">
                                <input type="text" name="phone_number" class="form-control"
                                    value="{{ old('phone_number', $user->phone_number) }}">
                                <div class="help-block"></div>
                            </div>
                            {{-- @error('user_phone_number')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>
                        <div class="form-group">
                            <h5>User Avatar <span class="text-danger">*</span></h5>
                            <div class="controls">
                                <input type="file" name="image" class="form-control">
                                <div class="help-block"></div>
                            </div>
                            @error('image')
                            <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-xs-right">
                            <button type="submit" class="btn btn-rounded btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection