<div class="sidebar__menu-group">
    <ul class="sidebar_nav">
        <li class="has-child {{ Request::is(app()->getLocale().'/dashboards/*') ? 'open':'' }}">
            <a href="#" class="{{ Request::is(app()->getLocale().'/dashboards/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ trans('menu.dashboard-menu-title') }}</span>
                <span class="toggle-icon"></span>
            </a>
            <ul>
                <li class="{{ Request::is(app()->getLocale().'/dashboards/demo-one') ? 'active':'' }}"><a href="{{ route('dashboard.demo_one',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-one') }}</a></li>
                <li class="{{ Request::is(app()->getLocale().'/category')  ? 'active':'' }}"><a href="{{ route('category.index',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-ten') }}</a></li>
            </ul>
        </li>

</div>
