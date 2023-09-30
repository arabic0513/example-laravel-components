<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
        <span class="brand-text font-weight-light">Example App</span>
    </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('yajra')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Yajra Datatables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('uppy')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Uppy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('eimzo')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Eimzo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <button data-toggle="collapse" data-target="#demo" class="nav-link">
                                <div class="float-left">
                                    <div>
                                        <i class="nav-icon fas fa-sort float-left"></i>
                                        <p>{{ __('Статусы') }}</p>
                                    </div>
                                    <div class="d-flex align-items-start flex-column">
                                            <a href="#" id="demo" class="collapse">
                                                <i class="nav-icon fas fa-chevron-right"></i>
                                                <p>{{ __('new') }}</p>
                                            </a>
                                            <a href="#" id="demo" class="collapse">
                                                <i class="nav-icon fas fa-chevron-right"></i>
                                                <p>{{ __('in_process') }}</p>
                                            </a>
                                            <a href="#" id="demo" class="collapse">
                                                <i class="nav-icon fas fa-chevron-right"></i>
                                                <p>{{ __('refused') }}</p>
                                            </a>
                                        <a href="#" id="demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('Согласован') }}</p>
                                        </a>
                                        <a href="#" id="demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('Отказ') }}</p>
                                        </a>

                                        <a href="#" id="demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('distributed') }}</p>
                                        </a>
                                        <a href="#" id="demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('canceled') }}</p>
                                        </a>
                                        <a href="#" id="demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('overdue') }}</p>
                                        </a>
                                        <a href="#demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('for_signature') }}</p>
                                        </a>
                                        <a href="#demo" class="collapse">
                                            <i class="nav-icon fas fa-chevron-right"></i>
                                            <p>{{ __('Performer_status') }}</p>
                                        </a>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
</aside>
