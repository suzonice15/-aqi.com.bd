



<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Admission</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/admission') }}"><i class="fa fa-circle-o"></i>Admission</a>
        </li>


    </ul>
</li>


<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Accounts</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/category') }}"><i class="fa fa-circle-o"></i>Categories</a>
        </li>
        <li><a href=" {{ url('admin/income/expense') }}"><i class="fa fa-circle-o"></i>Income/Expense</a>
        </li>
        <li><a href=" {{ url('admin/income/profite') }}"><i class="fa fa-circle-o"></i>Profit</a>
        </li>


    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Services</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/service/create') }}"><i class="fa fa-circle-o"></i>Add New Service </a>
        </li>
        <li><a href=" {{ url('admin/service') }}"><i class="fa fa-circle-o"></i>Services</a></li>
    </ul>
</li>

<li>
    <a href="{{ url('/admin/inquery') }}">
        <i class="fa fa-dashboard"></i> <span>Inquery</span>
                    <span class="pull-right-container">

            </span>
    </a>

</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Events</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/event/create') }}"><i class="fa fa-circle-o"></i>Add New Event </a>
        </li>
        <li><a href=" {{ url('admin/event') }}"><i class="fa fa-circle-o"></i>Events</a></li>


    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Gelary</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/gelary/create') }}"><i class="fa fa-circle-o"></i>Add New Gelary </a>
        </li>
        <li><a href=" {{ url('admin/gelary') }}"><i class="fa fa-circle-o"></i>Gelary</a></li>


    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Teams</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/teams/create') }}"><i class="fa fa-circle-o"></i>Add New Teams </a>
        </li>
        <li><a href=" {{ url('admin/teams') }}"><i class="fa fa-circle-o"></i>Teams</a></li>


    </ul>
</li>

<li style="display:none" class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Programs</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/program/create') }}"><i class="fa fa-circle-o"></i>Add New Programs </a>
        </li>
        <li><a href=" {{ url('admin/program') }}"><i class="fa fa-circle-o"></i>Programs</a></li>


    </ul>
</li>




<li class="treeview ">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Sliders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/slider/create') }}"><i class="fa fa-circle-o"></i>Add Slider </a></li>
        <li><a href=" {{ url('admin/sliders') }}"><i class="fa fa-circle-o"></i>All Sliders</a></li>


    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Media</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/media/create') }}"><i class="fa fa-circle-o"></i>Add New Media Image
            </a></li>
        <li><a href=" {{ url('admin/media') }}"><i class="fa fa-circle-o"></i>All Product Images List</a>
        </li>

    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Pages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/page/create') }}"><i class="fa fa-circle-o"></i>Add New Page </a>
        </li>
        <li><a href=" {{ url('admin/pages') }}"><i class="fa fa-circle-o"></i>All Pages </a></li>


    </ul>
</li>

<li class="treeview active">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/user/create') }}"><i class="fa fa-circle-o"></i>Create User</a></li>
        <li><a href=" {{ url('admin/users') }}"><i class="fa fa-circle-o"></i>All Users</a></li>


    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-user"></i>
        <span>Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href=" {{ url('admin/default/setting') }}"><i class="fa fa-circle-o"></i>Default Setting</a>
        </li>
        <li><a style="display:none" href=" {{ url('admin/homepage/setting') }}"><i class="fa fa-circle-o"></i>Home Page Setting</a></li>
        <li><a href=" {{ url('admin/social/setting') }}"><i class="fa fa-circle-o"></i>Social Media Setting</a></li>
        <li><a href=" {{ url('/clear-cache') }}"><i class="fa fa-circle-o"></i>clear-cache</a></li>


    </ul>
</li>

