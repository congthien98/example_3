<header class="main-header">
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top pl-30">

        <div class="dropdown">

            <a href="#" class=" dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false" title="User">
                <img class="rounded-circle"
                    src="{{ !empty($adminData->profile_photo_path) ? url('upload/admin_images/'.$adminData->profile_photo_path) : url('upload/admin_images/blank_profile_photo.jpg') }}"
                    alt="User Avatar">
                {{-- <img src="{{ asset('backend') }}/images/avatar/1.jpg" alt=""> --}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('profile.index') }}">Profile</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.change.password')}}">Change Password</a></li>
                <li><a class="dropdown-item" href="{{ route('admin.logout')}}">Logout</a></li>
            </ul>
        </div>

        {{-- <div class="col-md-12 widget-user-image">
            <img id="show-image" class="rounded-circle"
                src="{{ !empty($adminData->profile_photo_path) ? url('upload/admin_images/'.$adminData->profile_photo_path) : url('upload/admin_images/blank_profile_photo.jpg') }}"
                alt="User Avatar" style="float: right" width="100px" height="100px">
        </div> --}}

    </nav>
</header>