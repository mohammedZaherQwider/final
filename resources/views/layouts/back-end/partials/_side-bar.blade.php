<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}" style="margin-left: 18px">
                    {{-- <a href="{{ route('admin.dashboard.index') }}"> --}}
                        <i class="fas fa-tachometer-alt"></i>
                        <span>{{ __('Dashboard') }}</span>
                    {{-- </a> --}}
                </li>
                <!--Product Management -->
                    <li
                        class="menu-title {{ Request::is('admin/brand*') || Request::is('admin/category*') || Request::is('admin/sub*') || Request::is('admin/attribute*') || Request::is('admin/product*') ? 'scroll-here' : '' }}">
                        <span>{{ __('product_management') }}</span>
                    </li>
                    <li
                        class="submenu  {{ Request::is('admin/product/list/in_house') || Request::is('admin/product/bulk-import') || Request::is('admin/product/add-new') || Request::is('admin/product/view/*') || Request::is('admin/product/barcode/*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-box-open"></i>
                            <span>
                                {{ __('Products') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display:  {{(Request::is('admin/product/list/in_house') || (Request::is('admin/product/stock-limit-list/in_house')) || (Request::is('admin/product/bulk-import')) || (Request::is('admin/product/add-new')) || (Request::is('admin/product/view/*')) || (Request::is('admin/product/barcode/*')))?'block':''}}">
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/product/list/in_house') || Request::is('admin/product/add-new') || Request::is('admin/product/view/*') || Request::is('admin/product/barcode/*') ? 'active' : '' }}" href="{{ route('admin.product.list', ['in_house', '']) }}" --}}
                                   title="{{ __('Products') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Products List') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/product/stock-limit-list/in_house') ? 'active' : '' }}" href="{{route('admin.product.stock-limit-list',['in_house'])}}"
                                   title="{{ __('Limited Stock List') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Limited Stock List') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/combo/list') ? 'active' : '' }}" href="{{ route('admin.combo.list') }}"
                                   title="{{ __('Combo Products') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Combo Products') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/product/bulk-import') ? 'active' : '' }}" href="{{ route('admin.product.bulk-import') }}"
                                   title="{{ __('bulk_import') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('bulk_import') }}</span>
                                {{-- </a> --}}
                            </li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
