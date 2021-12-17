<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/uploads/users')}}/{{ Session::get('picture') }}" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Session::get('name')}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $status= Session::get('status');

        ?>


        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>
           @if($status=='super-admin')
           @include('layouts.includes.supper_admin_sidebar')
               @else
                @include('layouts.includes.admin_sidebar')

               @endif


    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
