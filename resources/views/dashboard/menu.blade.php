<li class="nav-item menu-open">
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{route('site.applications.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                    {{ __('Все заявки') }}
                </p>
            </a>
        </li>
        @if ((int)auth()->user()->status === 1)
            <li class="nav-item">
                <a href="{{route('site.applications.my_applications')}}" class="nav-link">
                    <i class="nav-icon fas fa-th-list"></i>
                    <p>
                        {{ __('Мои заявки') }}
                    </p>
                </a>
            </li>
            @if(auth()->user()->branch_id != null && auth()->user()->department_id != null)
                @if(auth()->user()->hasPermission(\App\Enums\PermissionEnum::Select_Branch))
                <li class="nav-item">
                    <a href="{{route('branches.view')}}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            {{ __('Заявки по филиалу') }}
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <button data-toggle="collapse" data-target="#demo" class="nav-link">
                        <div class="float-left">
                            <div>
                                <i class="nav-icon fas fa-sort float-left"></i>
                                <p>{{ __('Статусы') }}</p>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                @if(auth()->user()->role_id != \App\Enums\ApplicationMagicNumber::Director)
                                <a href="{{route('site.applications.show_status', 'new')}}" id="demo" class="collapse">
                                      <i class="nav-icon fas fa-chevron-right"></i>
                                      <p>{{ __('new') }}</p>
                                  </a>
                                <a href="{{route('site.applications.show_status', 'in_process')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('in_process') }}</p>
                                </a>
                                <a href="{{route('site.applications.show_status', 'refused')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('refused') }}</p>
                                </a>
                                @endif
                                <a href="{{route('site.applications.show_status', 'agreed')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('Согласован') }}</p>
                                </a>
                                <a href="{{route('site.applications.show_status', 'rejected')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('Отказ') }}</p>
                                </a>

                                <a href="{{route('site.applications.show_status', 'distributed')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('distributed') }}</p>
                                </a>
                                <a href="{{route('site.applications.show_status','cancelled')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('canceled') }}</p>
                                </a>
                                <a href="{{route('site.applications.show_status', 'overdue')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('overdue') }}</p>
                                </a>
                                <a href="{{route('site.applications.to_sign')}}" id="demo" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('for_signature') }}</p>
                                </a>
                                    <a href="{{route('site.applications.performer_status_get')}}" id="demo" class="collapse">
                                        <i class="nav-icon fas fa-chevron-right"></i>
                                        <p>{{ __('Performer_status') }}</p>
                                    </a>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="nav-item">
                    <button data-toggle="collapse" data-target="#report" class="nav-link">
                        <div class="float-left">
                            <div>
                                <i class="nav-icon fas fa-sort float-left"></i>
                                <p>{{__('Отчеты')}}</p>
                            </div>
                            <div class="d-flex align-items-start flex-column">
                                <a href="{{route('site.report.index', '1')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{__('1 отчет')}}</p>
                                </a>
                                <a href="{{route('site.report.index', '2')}}" id="report" class="collapse">
                                  <i class="nav-icon fas fa-chevron-right"></i>
                                  <p>{{ __('2 отчет квартальный итоговый') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '22')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('2 отчет квартальный плановый') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '3')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('3-отчет за год') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '4')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('4-отчет за год') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '5')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('5 отчет свод  общий') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '6')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('6 отчет свод  общий') }}</p>

                                <a href="{{route('site.report.index', '7')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('7 отчет плановый') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '8')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('8 отчет по видам закупки') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '9')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('9 отчет плановый') }}</p>
                                </a>
                                <a href="{{route('site.report.index', '10')}}" id="report" class="collapse">
                                    <i class="nav-icon fas fa-chevron-right"></i>
                                    <p>{{ __('за год') }} </p>
                                </a>
                                </a>
                            </div>
                        </div>
                    </button>
                </li>
                @if(auth()->user()->branch_id != null)
                <li class="nav-item">
                    <a href="{{route('site.applications.create')}}" class="nav-link">
                        <i class="nav-icon fas fa-plus-square"></i>
                        <p>
                            {{ __('Создать заявку') }}
                        </p>
                    </a>
                </li>
                @endif
            @endif
            <li class="nav-item">
                <a href="{{route('site.applications.drafts.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-file-text"></i>
                    <p>
                        {{ __('Черновик') }}
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('site.faqs.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        {{ __('База знаний') }}
                    </p>
                </a>
            </li>
        @endif
    </ul>
</li>
