@extends('admin.admin_master')

@section('title', 'Admin Profile')

{{-- session 'dashboard_content' duoc goi o admin.admin_master --}}
@section('dashboard_content')
<section class="content">
    <div class="row">
        <div class="col-12 col-lg-5 col-xl-6">
            <div class=" ">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="">
                    <a href="{{ route('admin.profile.edit') }}" class="btn btn-info">Edit
                        Profile</a>
                    <h3 class="widget-user-username">Admin Name: {{ $adminData->name }}</h3>
                    <h6 class="widget-user-desc">Admin Email: {{ $adminData->email }}</h6>
                </div>
                <div class="widget-user-image">
                    <img class="rounded-circle"
                        src="{{ !empty($adminData->profile_photo_path) ? url('upload/admin_images/'.$adminData->profile_photo_path) : url('upload/admin_images/blank_profile_photo.jpg') }}"
                        alt="User Avatar">
                </div>

            </div>
        </div>
    </div>


</section>


@endsection