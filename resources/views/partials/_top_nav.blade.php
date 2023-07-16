<nav class="navbar navbar-light">
    <div class="navbar-left">
        <div class="logo-area">
            <a class="navbar-brand" href="{{ route('dashboard.demo_one',app()->getLocale()) }}">
                <img class="dark" src="{{ asset('assets/img/logo-dark.svg') }}" alt="svg">
                <img class="light" src="{{ asset('assets/img/logo-white.svg') }}" alt="img">
            </a>
            <a href="#" class="sidebar-toggle">
                <img class="svg" src="{{ asset('assets/img/svg/align-center-alt.svg') }}" alt="img"></a>
        </div>

        <div class="top-menu">
            <div class="hexadash-top-menu position-relative">
                <ul>
                    <li class="has-subMenu">
                        <a href="#" class="{{ Request::is(app()->getLocale().'/dashboards/*') ? 'active':'' }}">Dashboard</a>
                        <ul class="subMenu">
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-one') ? 'active':'' }}" href="{{ route('dashboard.demo_one',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-one') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-two') ? 'active':'' }}" href="{{ route('dashboard.demo_two',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-two') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-three')  ? 'active':'' }}" href="{{ route('dashboard.demo_three',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-three') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-four')  ? 'active':'' }}" href="{{ route('dashboard.demo_four',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-four') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-five')  ? 'active':'' }}" href="{{ route('dashboard.demo_five',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-five') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-six')  ? 'active':'' }}" href="{{ route('dashboard.demo_six',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-six') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-seven')  ? 'active':'' }}" href="{{ route('dashboard.demo_seven',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-seven') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-eight')  ? 'active':'' }}" href="{{ route('dashboard.demo_eight',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-eight') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-nine')  ? 'active':'' }}" href="{{ route('dashboard.demo_nine',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-nine') }}</a></li>
                            <li><a class="{{ Request::is(app()->getLocale().'/dashboards/demo-ten')  ? 'active':'' }}" href="{{ route('dashboard.demo_ten',app()->getLocale()) }}">{{ trans('menu.dashboard-demo-ten') }}</a></li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#" class="">{{ trans('menu.layout-menu-title') }}</a>
                        <ul class="subMenu">
                            <li class="l_sidebar">
                            <a href="#" data-layout="light">{{ trans('menu.layout-light-mode') }}</a>
                            </li>
                            <li class="l_sidebar">
                            <a href="#" data-layout="dark">{{ trans('menu.layout-dark-mode') }}</a>
                            </li>
                            <li class="l_navbar">
                            <a href="#" data-layout="top">{{ trans('menu.layout-top-menu') }}</a>
                            </li>
                            <li class="layout">
                            <a href="{{ Helper::get_translation_url( 'ar' ) }}">{{ trans('menu.layout-rtl') }}</a>
                            </li>
                            <li class="layout">
                            <a href="{{ Helper::get_translation_url( 'en' ) }}">{{ trans('menu.layout-ltr') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#" class="{{ Request::is(app()->getLocale().'/table/*') || Request::is(app()->getLocale().'/pages/dynamic-table') || Request::is(app()->getLocale().'/applications/job/*') || Request::is(app()->getLocale().'/applications/support/*') || Request::is(app()->getLocale().'/applications/social/profile-settings') || Request::is(app()->getLocale().'/applications/bookmark') || Request::is(app()->getLocale().'/applications/task')  || Request::is(app()->getLocale().'/applications/filemanager') || Request::is(app()->getLocale().'/applications/import_export/*') || Request::is(app()->getLocale().'/applications/kanban') || Request::is(app()->getLocale().'/applications/todo') || Request::is(app()->getLocale().'/applications/note') || Request::is(app()->getLocale().'/applications/contact/*') || Request::is(app()->getLocale().'/applications/user/*') || Request::is(app()->getLocale().'/applications/calendar') || Request::is(app()->getLocale().'/applications/project/*') || Request::is(app()->getLocale().'/applications/ecommerce/*') || Request::is(app()->getLocale().'/applications/email/*') || Request::is(app()->getLocale().'/applications/chat') ? 'active':'' }}">Apps</a>
                        <ul class="megaMenu-wrapper megaMenu-dropdown">
                            <li>
                                <ul>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/email/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-envelope"></span>
                                            <span class="menu-text">{{ trans('menu.email-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/email/inbox') ? 'active':'' }}" href="">{{ trans('menu.email-inbox') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/email/read') ? 'active':'' }}" href="">{{ trans('menu.email-read') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                    <a href="#">
                                        <span class="nav-icon uil uil-chat"></span>
                                        <span class="menu-text">{{ trans('menu.chat-menu-title') }}</span>
                                        <span class="badge badge-success menuItem rounded-circle">3</span>
                                    </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-bag"></span>
                                            <span class="menu-text text-initial">{{ trans('menu.ecommerce-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="#">{{ trans('menu.ecommerce-products') }}</a></li>
                                            <li><a href="#">{{ trans('menu.ecommerce-product-details') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/add-product') ? 'active':'' }}">{{ trans('menu.ecommerce-product-add') }}</a></li>
                                            <li><a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/cart') ? 'active':'' }}">{{ trans('menu.ecommerce-cart') }}</a></li>
                                            <li><a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/orders') ? 'active':'' }}">{{ trans('menu.ecommerce-orders') }}</a></li>
                                            <li><a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/sellers') ? 'active':'' }}">{{ trans('menu.ecommerce-sellers') }}</a></li>
                                            <li><a href="#" class="{{ Request::is(app()->getLocale().'/applications/ecommerce/invoice') ? 'active':'' }}">{{ trans('menu.ecommerce-invoices') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                    <a href="#" class="{{ Request::is(app()->getLocale().'/applications/project/*') ? 'active':'' }}">
                                        <span class="nav-icon uil uil-folder"></span>
                                        <span class="menu-text">{{ trans('menu.project-menu-title') }}</span>
                                    </a>
                                    <ul class="subMenu">
                                        <li><a href="#" class="{{ Request::is(app()->getLocale().'/applications/project/list') ? 'active':'' }}">{{ trans('menu.project-title') }}</a></li>
                                        <li><a href=" " class="{{ Request::is(app()->getLocale().'/applications/project/project-detail') ? 'active':'' }}">{{ trans('menu.project-detail') }}</a></li>
                                        <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/project/create') ? 'active':'' }}">{{ trans('menu.create-project') }}</a></li>
                                    </ul>
                                    </li>
                                    <li>
                                    <a href="">
                                        <span class="nav-icon uil uil-calendar-alt"></span>
                                        <span class="menu-text">{{ trans('menu.calendar-menu-title') }}</span>
                                    </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-users-alt"></span>
                                            <span class="menu-text">{{ trans('menu.user-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/member') ? 'active':'' }}">{{ trans('menu.user-team') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/grid') ? 'active':'' }}">{{ trans('menu.user-grid') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/list') ? 'active':'' }}">{{ trans('menu.user-list') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/grid-style') ? 'active':'' }}">{{ trans('menu.user-grid-style') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/group') ? 'active':'' }}">{{ trans('menu.user-group') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/add') ? 'active':'' }}">{{ trans('menu.user-add') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/user/table') ? 'active':'' }}">{{ trans('menu.user-table') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/contact/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-at"></span>
                                            <span class="menu-text">{{ trans('menu.contact-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/contact/grid') ? 'active':'' }}" href="">{{ trans('menu.contact-grid') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/contact/list') ? 'active':'' }}" href="">{{ trans('menu.contact-list') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/contact/create') ? 'active':'' }}" href="">{{ trans('menu.contact-list') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/applications/note') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-clipboard-notes"></span>
                                            <span class="menu-text">{{ trans('menu.note-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/applications/todo') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-check-square"></span>
                                            <span class="menu-text">{{ trans('menu.todo-menu-title') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/applications/kanban') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-expand-arrows"></span>
                                            <span class="menu-text">{{ trans('menu.kanban-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/import_export/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-exchange"></span>
                                            <span class="menu-text">{{ trans('menu.ie-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/import_export/import') ? 'active':'' }}" href="">{{ trans('menu.ie-import') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/import_export/export') ? 'active':'' }}" href="">{{ trans('menu.ie-export') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/import_export/export-selected') ? 'active':'' }}" href="">{{ trans('menu.ie-export-selected') }}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <span class="nav-icon uil uil-repeat"></span>
                                            <span class="menu-text">{{ trans('menu.filemanager-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <span class="nav-icon uil uil-lightbulb-alt"></span>
                                            <span class="menu-text">{{ trans('menu.task-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="">
                                            <span class="nav-icon uil uil-bookmark"></span>
                                            <span class="menu-text"></span>
                                        </a>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/social/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-apps"></span>
                                            <span class="menu-text">{{ trans('menu.social-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li class="nav-item"><a href="" class="{{ Request::is(app()->getLocale().'/applications/social/profile') ? 'active':'' }}">{{ trans('menu.social-profile') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/applications/social/profile-settings') ? 'active':'' }}">{{ trans('menu.social-profile-setting') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/support/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-user"></span>
                                            <span class="menu-text">{{ trans('menu.support-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/support/support-ticket') ? 'active':'' }}" href="">{{ trans('menu.support-ticket') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/support/support-details') ? 'active':'' }}" href="">{{ trans('menu.support-ticket-detail') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/support/new-ticket') ? 'active':'' }}" href="">{{ trans('menu.support-new-ticket') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/applications/job/*') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-search"></span>
                                            <span class="menu-text">{{ trans('menu.job-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-search') ? 'active':'' }}" href="">{{ trans('menu.job-search') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-search-list') ? 'active':'' }}" href="">{{ trans('menu.job-search-list') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-detail') ? 'active':'' }}" href="">{{ trans('menu.job-detail') }}</a></li>
                                            <li><a class="{{ Request::is(app()->getLocale().'/applications/job/job-apply') ? 'active':'' }}" href="">{{ trans('menu.job-apply') }}</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-subMenu-left">
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/table/*') || Request::is(app()->getLocale().'/pages/dynamic-table') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-table"></span>
                                            <span class="menu-text">{{ trans('menu.table-menu-title') }}</span>
                                        </a>
                                        <ul class="subMenu">
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/table/basic') ? 'active':'' }}">{{ trans('menu.table-basic') }}</a></li>
                                            <li><a href="}" class="{{ Request::is(app()->getLocale().'/table/data') ? 'active':'' }}">{{ trans('menu.table-data') }}</a></li>
                                            <li><a href="" class="{{ Request::is(app()->getLocale().'/pages/dynamic-table') ? 'active':'' }}">{{ trans('menu.dynamic-table-menu-title') }}</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#" class="{{ Request::is(app()->getLocale().'/customer/*') ? 'active':'' }}">Crud</a>
                        <ul class="subMenu">
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/customer/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-database"></span>
                                    <span class="menu-text">{{ trans('menu.customer-crud-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is(app()->getLocale().'/customer/list') ? 'active':'' }}" href="">{{ trans('menu.customer-view-all') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/customer/create') ? 'active':'' }}" href="">{{ trans('menu.customer-add-new') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-subMenu">
                        <a href="#" class="{{ Request::is(app()->getLocale().'/wizard/*') || Request::is(app()->getLocale().'/widget/*') || Request::is(app()->getLocale().'/map/*') || Request::is(app()->getLocale().'/form/*') || Request::is(app()->getLocale().'/chart/*') || Request::is(app()->getLocale().'/editor') || Request::is(app()->getLocale().'/icon/*') ? 'active':'' }}">Features</a>
                        <ul class="subMenu">
                            <li>
                                <a href="" class="{{ Request::is(app()->getLocale().'/editor') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-edit"></span>
                                    <span class="menu-text">{{ trans('menu.editor-menu-title') }}</span>
                                </a>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/icon/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-grid"></span>
                                    <span class="menu-text">{{ trans('menu.icon-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/icon/unicon') ? 'active':'' }}">{{ trans('menu.icon-unicon') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/icon/awesome') ? 'active':'' }}">{{ trans('menu.icon-awesome') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/icon/lineawesome') ? 'active':'' }}">{{ trans('menu.icon-line') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/chart/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-chart"></span>
                                    <span class="menu-text">{{ trans('menu.chart-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is(app()->getLocale().'/chart/chartjs') ? 'active':'' }}" href="">{{ trans('menu.chart-js') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/chart/google') ? 'active':'' }}" href="">{{ trans('menu.chart-google') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/chart/peity') ? 'active':'' }}" href="">{{ trans('menu.chart-peity') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/form/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-keyhole-circle"></span>
                                    <span class="menu-text">{{ trans('menu.form-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is(app()->getLocale().'/form/basic') ? 'active':'' }}" href="">{{ trans('menu.form-basic') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/form/layout') ? 'active':'' }}" href="">{{ trans('menu.form-layout') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/form/element') ? 'active':'' }}" href="">{{ trans('menu.form-element') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/form/component') ? 'active':'' }}" href="">{{ trans('menu.form-component') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/form/validation') ? 'active':'' }}" href="">{{ trans('menu.form-validation') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/map/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-map"></span>
                                    <span class="menu-text">{{ trans('menu.map-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/map/google') ? 'active':'' }}">{{ trans('menu.map-google') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/map/leaflet') ? 'active':'' }}">{{ trans('menu.map-leaflet') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/map/vector') ? 'active':'' }}">{{ trans('menu.map-vector') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/widget/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-server"></span>
                                    <span class="menu-text">{{ trans('menu.widget-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a class="{{ Request::is(app()->getLocale().'/widget/chart') ? 'active':'' }}" href="">{{ trans('menu.widget-chart') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/widget/mixed') ? 'active':'' }}" href="">{{ trans('menu.widget-mixed') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/widget/card') ? 'active':'' }}" href="">{{ trans('menu.widget-card') }}</a></li>
                                </ul>
                            </li>
                            <li class="has-subMenu-left">
                                <a href="#" class="{{ Request::is(app()->getLocale().'/wizard/*') ? 'active':'' }}">
                                    <span class="nav-icon uil uil-square"></span>
                                    <span class="menu-text">{{ trans('menu.wizard-menu-title') }}</span>
                                </a>
                                <ul class="subMenu">
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/wizard/one') ? 'active':'' }}">{{ trans('menu.wizard-one') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/wizard/two') ? 'active':'' }}">{{ trans('menu.wizard-two') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/wizard/three') ? 'active':'' }}">{{ trans('menu.wizard-three') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/wizard/four') ? 'active':'' }}">{{ trans('menu.wizard-four') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/wizard/five') ? 'active':'' }}">{{ trans('menu.wizard-five') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-item has-subMenu">
                        <a href="#" class="{{ Request::is(app()->getLocale().'/pages/pricing') || Request::is(app()->getLocale().'/pages/gallery/*') || Request::is(app()->getLocale().'/changelog') ? 'active':'' }}">Pages</a>
                        <ul class="megaMenu-wrapper megaMenu-small">
                            <li>
                                <ul>
                                    <li>
                                        <a href="#" class="{{ Request::is(app()->getLocale().'/changelog') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-arrow-growth"></span>
                                            <span class="menu-text">{{ trans('menu.changelog-menu-title') }}</span>
                                            <span class="badge badge-info-10 menuItem rounded-pill">1.0.1</span>
                                        </a>
                                    </li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/pages/gallery/gallery1') ? 'active':'' }}">{{ trans('menu.gallery-one') }}</a></li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/gallery/gallery2') ? 'active':'' }}">{{ trans('menu.gallery-two') }}</a>
                                    </li>
                                    <li>
                                    <a href="" class="{{ Request::is(app()->getLocale().'/pages/pricing') ? 'active':'' }}">
                                        <span class="nav-icon uil uil-bill"></span>
                                        <span class="menu-text">{{ trans('menu.pricing-menu-title') }}</span>
                                    </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/banner') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-thumbs-up"></span>
                                            <span class="menu-text">{{ trans('menu.banner-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/testimonial') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-book-open"></span>
                                            <span class="menu-text">{{ trans('menu.testimonial-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/faq') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-question-circle"></span>
                                            <span class="menu-text">{{ trans('menu.faq-menu-title') }}</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/search/result') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-credit-card-search"></span>
                                            <span class="menu-text">{{ trans('menu.search-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/blank') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-circle"></span>
                                            <span class="menu-text">{{ trans('menu.blank-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/pages/knowledge/base') ? 'active':'' }}" href="">{{ trans('menu.knowledge-base') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/pages/knowledge/all-articles') ? 'active':'' }}" href="">{{ trans('menu.knowledge-all-article') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/pages/knowledge/article') ? 'active':'' }}" href="">{{ trans('menu.knowledge-single-article') }}</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/support/center') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-headphones"></span>
                                            <span class="menu-text">{{ trans('menu.support-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/pages/blog/one') ? 'active':'' }}">{{ trans('menu.blog-style-one') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/pages/blog/two') ? 'active':'' }}">{{ trans('menu.blog-style-two') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/pages/blog/three') ? 'active':'' }}">{{ trans('menu.blog-style-three') }}</a></li>
                                    <li><a href="" class="{{ Request::is(app()->getLocale().'/pages/blog/detail') ? 'active':'' }}">{{ trans('menu.blog-detail') }}</a></li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/terms-and-condition') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-question-circle"></span>
                                            <span class="menu-text">{{ trans('menu.terms-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/maintenance') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-airplay"></span>
                                            <span class="menu-text">{{ trans('menu.maintenance-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/404') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-exclamation-triangle"></span>
                                            <span class="menu-text">{{ trans('menu.not-found-menu-title') }}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="{{ Request::is(app()->getLocale().'/pages/coming-soon') ? 'active':'' }}">
                                            <span class="nav-icon uil uil-sync"></span>
                                            <span class="menu-text">{{ trans('menu.coming-soon-menu-title') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="mega-item has-subMenu">
                        <a href="#" class="{{ Request::is(app()->getLocale().'/ui/*') ? 'active':'' }}">Components</a>
                        <ul class="megaMenu-wrapper megaMenu-wide">
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/alert') ? 'active':'' }}" href="">{{ trans('menu.ui-alert') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/avatar') ? 'active':'' }}" href="">{{ trans('menu.ui-avatar') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/badge') ? 'active':'' }}" href="">{{ trans('menu.ui-badge') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/breadcrumps') ? 'active':'' }}" href="">{{ trans('menu.ui-breadcrumb') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/button') ? 'active':'' }}" href="">{{ trans('menu.ui-button') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/card') ? 'active':'' }}" href="">{{ trans('menu.ui-card') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/carousel') ? 'active':'' }}" href="">{{ trans('menu.ui-carousel') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/checkbox') ? 'active':'' }}" href="">{{ trans('menu.ui-checkbox') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/collapse') ? 'active':'' }}" href="">{{ trans('menu.ui-collapse') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/comments') ? 'active':'' }}" href="">{{ trans('menu.ui-comment') }}</a></li>

                                </ul>
                            </li>
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                    <li><a class="{{ Request::is(app()->getLocale().'/ui/dashboard-base') ? 'active':'' }}" href="">{{ trans('menu.ui-dashboard-base') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/ui/datepicker') ? 'active':'' }}" href="">{{ trans('menu.ui-date-picker') }}</a></li>
                                    <li><a class="{{ Request::is(app()->getLocale().'/ui/drawer') ? 'active':'' }}" href="">{{ trans('menu.ui-drawer') }}</a></li>


                                </ul>
                            </li>
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/modals') ? 'active':'' }}" href="">{{ trans('menu.ui-modal') }}</a></li>
                                <li><a class="{{ Request::is(app()->getLocale().'/ui/notification') ? 'active':'' }}" href="">{{ trans('menu.ui-notification') }}</a></li>


                                </ul>
                            </li>
                            <li>
                                <span class="mega-title">Components</span>
                                <ul>
                                    <li><a class="{{ Request::is(app()->getLocale().'/ui/slider') ? 'active':'' }}" href="">{{ trans('menu.ui-slider') }}</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="navbar-right">
        <ul class="navbar-right__menu">
            <li class="nav-search">
                <a href="#" class="search-toggle">
                    <i class="uil uil-search"></i>
                    <i class="uil uil-times"></i>
                </a>
                <form action="/" class="search-form-topMenu">
                    <span class="search-icon uil uil-search"></span>
                    <input class="form-control me-sm-2 box-shadow-none" type="search" placeholder="Search..." aria-label="Search">
                </form>
            </li>
            <li class="nav-message">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="{{ asset('assets/img/svg/message.svg') }}" alt="img">
                    </a>
                    <div class="dropdown-wrapper">
                        <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ms-1">2</span></h2>
                        <ul>
                            <li class="author-online has-new-message">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-offline has-new-message">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-online has-new-message">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                        <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-offline">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                    </p>
                                </div>
                            </li>
                            <li class="author-offline">
                                <div class="user-avater">
                                    <img src="{{ asset('assets/img/team-1.png') }}" alt="">
                                </div>
                                <div class="user-message">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                        <span class="time-posted">3 hrs ago</span>
                                    </p>
                                    <p>
                                        <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                            dolor amet cosec Lorem ipsum</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="" class="dropdown-wrapper__more">See All Message</a>
                    </div>
                </div>
            </li>
            <li class="nav-notification">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle icon-active">
                        <img class="svg" src="{{ asset('assets/img/svg/alarm.svg') }}" alt="img">
                    </a>
                    <div class="dropdown-wrapper">
                        <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ms-1">4</span></h2>
                        <ul>
                            <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--primary">
                                    <img src="{{ asset('assets/img/svg/inbox.svg') }}" alt="inbox" class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--secondary">
                                    <img src="{{ asset('assets/img/svg/upload.svg') }}" alt="upload" class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--success">
                                    <img src="{{ asset('assets/img/svg/log-in.svg') }}" alt="log-in" class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--info">
                                    <img src="{{ asset('assets/img/svg/at-sign.svg') }}" alt="at-sign" class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                            <li class="nav-notification__single nav-notification__single d-flex flex-wrap">
                                <div class="nav-notification__type nav-notification__type--danger">
                                    <img src="{{ asset('assets/img/svg/heart.svg') }}" alt="heart" class="svg">
                                </div>
                                <div class="nav-notification__details">
                                    <p>
                                        <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">James</a>
                                        <span>sent you a message</span>
                                    </p>
                                    <p>
                                        <span class="time-posted">5 hours ago</span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="" class="dropdown-wrapper__more">See all incoming activity</a>
                    </div>
                </div>
            </li>
            <li class="nav-settings">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle">
                        <img src="{{ asset('assets/img/setting.png') }}" alt="img">
                    </a>
                    <div class="dropdown-wrapper dropdown-wrapper--large">
                        <ul class="list-settings">
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/mail.png') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">All Features</a>
                                    </h6>
                                    <p>Introducing Increment subscriptions </p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/color-palette.png') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Themes</a>
                                    </h6>
                                    <p>Third party themes that are compatible</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/home.png') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Payments</a>
                                    </h6>
                                    <p>We handle billions of dollars</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/video-camera.png') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Design Mockups</a>
                                    </h6>
                                    <p>Share planning visuals with clients</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/document.png') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Content Planner</a>
                                    </h6>
                                    <p>Centralize content gethering and editing</p>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="me-3"><img src="{{ asset('assets/img/microphone.png') }}" alt=""></div>
                                <div class="flex-grow-1">
                                    <h6>
                                        <a href="" class="stretched-link">Diagram Maker</a>
                                    </h6>
                                    <p>Plan user flows & test scenarios</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-flag-select">
                <div class="dropdown-custom">
                    @switch(app()->getLocale())
                        @case('en')
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/eng.png') }}" alt="" class="rounded-circle"></a>
                            @break
                        @case('ar')
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/iraq.png') }}" alt="" class="rounded-circle"></a>
                            @break
                        @case('gr')
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/ger.png') }}" alt="" class="rounded-circle"></a>
                            @break
                        @default
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/eng.png') }}" alt="" class="rounded-circle"></a>
                            @break
                    @endswitch
                    {{-- @if(isset($find_customer))
                        @foreach ($find_customer as $customer)
                            <div class="dropdown-wrapper dropdown-wrapper--small">
                                <a href="{{ route(Route::currentRouteName(),['en',$customer->id]) }}"><img src="{{ asset('assets/img/eng.png') }}" alt=""> English</a>
                                <a href="{{ route(Route::currentRouteName(),['ar',$customer->id]) }}"><img src="{{ asset('assets/img/iraq.png') }}" alt=""> Arabic</a>
                                <a href="{{ route(Route::currentRouteName(),['gr',$customer->id]) }}"><img src="{{ asset('assets/img/ger.png') }}" alt=""> German</a>
                            </div>
                        @endforeach
                    @else
                        <div class="dropdown-wrapper dropdown-wrapper--small">
                            <a href="{{ route(Route::currentRouteName(),'en') }}"><img src="{{ asset('assets/img/eng.png') }}" alt=""> English</a>
                            <a href="{{ route(Route::currentRouteName(),'ar') }}"><img src="{{ asset('assets/img/iraq.png') }}" alt=""> Arabic</a>
                            <a href="{{ route(Route::currentRouteName(),'gr') }}"><img src="{{ asset('assets/img/ger.png') }}" alt=""> German</a>
                        </div>
                    @endif --}}
                </div>
            </li>
            <li class="nav-author">
                <div class="dropdown-custom">
                    <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/author-nav.jpg') }}" alt="" class="rounded-circle">
                        @if(Auth::check())
                            <span class="nav-item__title">{{ Auth::user()->name }}<i class="las la-angle-down nav-item__arrow"></i></span>
                        @endif
                    </a>
                    <div class="dropdown-wrapper">
                        <div class="nav-author__info">
                            <div class="author-img">
                                <img src="{{ asset('assets/img/author-nav.jpg') }}" alt="" class="rounded-circle">
                            </div>
                            <div>
                                @if(Auth::check())
                                    <h6 class="text-capitalize">{{ Auth::user()->name }}</h6>
                                @endif
                                <span>UI Designer</span>
                            </div>
                        </div>
                        <div class="nav-author__options">
                            <ul>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/user.svg') }}" alt="user" class="svg"> Profile</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/settings.svg') }}" alt="settings" class="svg"> Settings</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/key.svg') }}" alt="key" class="svg"> Billing</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/users.svg') }}" alt="users" class="svg"> Activity</a>
                                </li>
                                <li>
                                    <a href="">
                                        <img src="{{ asset('assets/img/svg/bell.svg') }}" alt="bell" class="svg"> Help</a>
                                </li>
                            </ul>
                            <a href="" class="nav-author__signout" onclick="event.preventDefault();document.getElementById('logout').submit();">
                                <img src="{{ asset('assets/img/svg/log-out.svg') }}" alt="log-out" class="svg">
                                 Sign Out</a>
                                <form style="display:none;" id="logout" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    @method('post')
                                </form>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="navbar-right__mobileAction d-md-none">
            <a href="#" class="btn-search">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg feather-search">
                <img src="{{ asset('assets/img/svg/x.svg') }}" alt="x" class="svg feather-x">
            </a>
            <a href="#" class="btn-author-action">
                <img src="{{ asset('assets/img/svg/more-vertical.svg') }}" alt="more-vertical" class="svg"></a>
        </div>
    </div>
</nav>
