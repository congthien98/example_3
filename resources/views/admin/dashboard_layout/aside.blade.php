@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
// $request = Request::is('/orders');
// dd($route, $prefix, $request);
@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <h3><b>BakerzBite</b> Admin</h3>


        <!-- sidebar menu-->
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ ($route == 'admin.dashboard') ? 'active':'' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <li class="{{ ($route == 'user.index') ? 'active' : '' }}">
                <a href="#">

                    <span>User</span>

                </a>
                <ul class="">
                    <li class=" {{ ($route == 'user.index') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}"><i class="ti-more"></i>All User</a>
                    </li>

                </ul>
            </li>




        </ul>
    </section>

</aside>