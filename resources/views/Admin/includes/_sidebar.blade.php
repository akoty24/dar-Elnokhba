@php
    $segment = Request::segment(3);
    $route = Route::currentRouteName();
@endphp
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left">
          <img src="{{ asset(adminurl()->avatar) }}" style="width:40px;height:40px;border-radius:50%" class="" alt="User Image">
        </div>
        <div class="pull-left info" style="margin-top:10px">
          <p> {{ adminurl()->first_name }} {{ adminurl()->last_name }}</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">

        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li class="{{ $route == 'admin.index' ? 'active' : '' }}">
            <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard text-aqua"></i> <span> {{ trans('backend.dashboard') }}</span></a>
        </li>
      
        <!-- Admins -->
        <li class="{{ $segment == 'admins' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>{{ trans('backend.admins') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'admin.admins.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.admins.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.admins') }}</span>
                    </a>
                </li>
                <li class="{{ $route == 'admin.admins.create' ? 'active' : '' }}">
                    <a href="{{ route('admin.admins.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.create_new') }}</span>
                    </a>
                </li>
            </ul>
        </li>
  <!-- country -->
        <li class="{{ $segment == 'countries' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>{{ trans('backend.countries') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'countries.index' ? 'active' : '' }}">
                    <a href="{{ route('countries.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.countries') }}</span>
                    </a>
                </li>
                <li class="{{ $route == 'countries.create' ? 'active' : '' }}">
                    <a href="{{ route('countries.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.create_new') }}</span>
                    </a>
                </li>
            </ul>
        </li>
   <!-- jobs -->
        <li class="{{ $segment == 'jobs' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>{{ trans('backend.jobs') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'jobs.index' ? 'active' : '' }}">
                    <a href="{{ route('jobs.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.jobs') }}</span>
                    </a>
                </li>
                <li class="{{ $route == 'jobs.create' ? 'active' : '' }}">
                    <a href="{{ route('jobs.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.create_new') }}</span>
                    </a>
                </li>
            </ul>
        </li>
 <!-- categories -->
        <li class="{{ $segment == 'jobs' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>{{ trans('backend.categories') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'categories.index' ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.categories') }}</span>
                    </a>
                </li>
                <li class="{{ $route == 'categories.create' ? 'active' : '' }}">
                    <a href="{{ route('categories.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.create_new') }}</span>
                    </a>
                </li>
            </ul>
        </li>
  <!-- workers -->
        <li class="{{ $segment == 'workers' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>{{ trans('backend.workers') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'workers.index' ? 'active' : '' }}">
                    <a href="{{ route('workers.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.workers') }}</span>
                    </a>
                </li>
                <li class="{{ $route == 'workers.create' ? 'active' : '' }}">
                    <a href="{{ route('workers.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.create_new') }}</span>
                    </a>
                </li>
            </ul>
        </li>

 <!-- orders -->
        <li class="{{ $segment == 'orders' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-user-plus"></i> <span>{{ trans('backend.orders') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'orders.index' ? 'active' : '' }}">
                    <a href="{{ route('orders.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.orders') }}</span>
                    </a>
                </li>
                <li class="{{ $route == 'orders.create' ? 'active' : '' }}">
                    <a href="{{ route('orders.create') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.create_new') }}</span>
                    </a>
                </li>
            </ul>
        </li>

          <!-- Settings -->
        <li class="{{ $segment == 'settings' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-cogs"></i> <span>{{ trans('backend.settings') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'admin.settings.index' ? 'active' : '' }}">
                    <a href="{{ route('admin.settings.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.settings') }}</span>
                    </a>
                </li>
                
            </ul>
        </li>

                 <!-- Messages -->
        <li class="{{ $segment == 'messages' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-cogs"></i> <span>{{ trans('backend.messages') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'messages.index' ? 'active' : '' }}">
                    <a href="{{ route('messages.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.messages') }}</span>
                    </a>
                </li>

            </ul>
        </li>


            <!-- website info -->
        <li class="{{ $segment == 'website-info' ? 'active' : '' }} users-active-li roles-list-active-li role-active-li treeview">
            <a href="users.html">
                <i class="fa fa-cogs"></i> <span>{{ trans('backend.website-info') }}</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="{{ $route == 'website-info.index' ? 'active' : '' }}">
                    <a href="{{ route('website-info.index') }}">
                        <i class="fa fa-angle-double-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}"></i>
                        <span>{{ trans('backend.website-info') }}</span>
                    </a>
                </li>

            </ul>
        </li>


                
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>