<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{Auth::user()->photo ? Auth::user()->photo->file : 'http://lorempixel.com/50/50'}}" height="160px" width="160px" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}
                    </a>
                </div>
            </div>
    @endif

    <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control"
                       placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i
                            class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class='fa fa-home'></i>
                    <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li class="treeview {{ Request::is('admin/equipment*') || Request::is('admin/categories*')  ? 'active' : '' }}">
                <a href="#"><i class='fa fa-wrench'></i> <span>Equipment</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{active('admin.equipment.index')}}"><a href="{{URL::route('admin.equipment.index')}}"><i
                                    class='fa fa-wrench'></i>All Equipments</a></li>
                    <li class="{{active('admin.equipment.create')}}"><a href="{{URL::route('admin.equipment.create')}}"><i
                                    class="fa fa-plus "></i>Create Equipments</a></li>
                    <li class="{{active('admin.categories.index')}}"><a href="{{route('admin.categories.index')}}"><i class='fa fa-tags'></i>
                            <span>Categories</span></a></li>

                </ul>
            </li>

            <li class="{{active('admin.borrow.index')}}"><a href="{{URL::route('admin.borrow.index')}}"><i
                            class='fa fa-tag'></i> <span>Borrows</span></a></li>


            <li class="treeview {{ Request::is('admin/users*') || Request::is('admin/roles*') ? 'active' : '' }}">
                <a href="#"><i class='fa fa-user'></i> <span>Users</span> <i
                            class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{active('admin.users.index')}}"><a href="{{URL::route('admin.users.index')}}"><i
                                    class='fa fa-users'></i>All Users</a></li>
                    <li class="{{active('admin.roles.getAssistants')}}"><a href="{{route('admin.roles.getAssistants')}}"><i class='fa fa-user'></i>
                            <span>Assistants</span></a></li>
                    <li class="{{active('admin.roles.getStudents')}}"><a href="{{route('admin.roles.getStudents')}}"><i class='fa fa-user'></i>
                            <span>Students</span></a></li>
                    <li class="{{active('admin.roles.getInstructors')}}"><a href="{{route('admin.roles.getInstructors')}}"><i class='fa fa-user'></i>
                            <span>Instructors</span></a></li>
                    <li class="{{active('admin.users.create')}}"><a href="{{URL::route('admin.users.create')}}"><i
                                    class="fa fa-user-plus "></i>Create User</a></li>
                    <li class="{{active('admin.roles.index')}}"><a href="{{route('admin.roles.index')}}"><i class='fa fa-tasks'></i>
                            <span>Roles</span></a></li>



                </ul>
            </li>


        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
