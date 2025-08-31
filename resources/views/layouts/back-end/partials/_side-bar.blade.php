<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    {{-- <a href="{{ route('admin.dashboard.index') }}"> --}}
                        <i class="fas fa-tachometer-alt"></i>
                        <span>{{ __('Dashboard') }}</span>
                    {{-- </a> --}}
                </li>
                <!--Product Management -->
                {{-- @if (\App\CPU\Helpers::module_permission_check('product_management')) --}}
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
                    <li
                        class="submenu {{ Request::is('admin/category*') || Request::is('admin/sub*') ? 'active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="fas fa-layer-group"></i>
                            <span>
                                {{ __('Category_Setup') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display:  {{ Request::is('admin/category*') || Request::is('admin/sub*') ? 'block' : '' }}">
                            <li class="nav-item">
                                {{-- <a class="nav-link {{ Request::is('admin/category/view') ? 'active' : '' }}" href="{{ route('admin.category.view') }}"
                                   title="{{ __('Categories') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Categories') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/sub-category/view') ? 'active' : '' }}" href="{{ route('admin.sub-category.view') }}"
                                   title="{{ __('Sub_Categories') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Sub_Categories') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/sub-sub-category/view') ? 'active' : '' }}" href="{{ route('admin.sub-sub-category.view') }}"
                                   title="{{ __('Sub_Sub_Categories') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Sub_Sub_Categories') }}</span>
                                {{-- </a> --}}
                            </li>
                        </ul>
                    </li>
                    <!-- Pages -->
                    <li
                        class="navbar-vertical-aside-has-menu {{ Request::is('admin/category*') || Request::is('admin/sub*') ? 'active' : '' }}">
                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub"
                            style="display: {{ Request::is('admin/category*') || Request::is('admin/sub*') ? 'block' : '' }}">

                        </ul>
                    </li>
                    {{-- / --}}
                    <li class="submenu {{ Request::is('admin/brand*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-copyright"></i>
                            <span>
                                {{ __('brands') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display:  {{Request::is('admin/brand*')?'block':'none'}}">
                            <li class="nav-item "
                                title="{{ __('add_new') }}">
                                {{-- <a class="nav-link {{ Request::is('admin/brand/add-new') ? 'active' : '' }}" href="{{ route('admin.brand.add-new') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('add_new') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item "
                                title="{{ __('List') }}">
                                {{-- <a class="nav-link {{ Request::is('admin/brand/list') ? 'active' : '' }}" href="{{ route('admin.brand.list') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('List') }}</span>
                                {{-- </a> --}}
                            </li>
                        </ul>
                    </li>
                    <li class="submenu {{ Request::is('admin/productType*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-tags"></i>
                            <span>
                                {{ __('Product Type') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display:  {{Request::is('admin/productType*')?'block':'none'}}">
                            <li class="nav-item "
                                title="{{ __('add_new') }}">
                                {{-- <a class="nav-link {{ Request::is('admin/productType/add-new') ? 'active' : '' }}" href="{{ route('admin.productType.add-new') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('add_new') }}</span>
                                {{-- </a> --}}
                            </li>
                            <li class="nav-item "
                                title="{{ __('List') }}">
                                {{-- <a class="nav-link {{ Request::is('admin/productType/list') ? 'active' : '' }}" href="{{ route('admin.productType.list') }}"> --}}
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('List') }}</span>
                                {{-- </a> --}}
                            </li>
                        </ul>
                    </li>
                    {{-- / --}}
                    {{-- / --}}
                    <li>
                        {{-- <a href="{{ route('admin.shop.list') }}" class="{{ Request::is('admin/shop*') ? 'active' : '' }}"> --}}
                            <i class="fas fa-shop"></i>
                            <span>{{ __('shops') }}</span>
                        {{-- </a> --}}
                    </li>
                    <li >
                        {{-- <a href="{{ route('admin.attribute.view') }}" class=" {{ Request::is('admin/attribute*') ? 'active' : '' }}"><i class="fas fa-list-ul"></i> --}}
                            <span>{{ __('Product_Attributes') }}</span>
                        {{-- </a> --}}
                    </li>

                    {{-- / --}}
                {{-- @endif --}}
                <!--Product Management Ends-->
                <!-- Order Management -->
                {{-- @if (\App\CPU\Helpers::module_permission_check('order_management')) --}}
                    <li class="menu-title">
                        <span>{{ __('order_management') }}</span>
                    </li>
                    <li class="submenu {{ Request::is('admin/orders*') || Request::is('admin/quotes*') ? 'active' : '' }}">
                        <a href="javascript:void(0)">
                            <i class="fas fa-clipboard-list"></i>
                            <span>
                                {{ __('orders') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul style="display: {{ Request::is('admin/order*') ? 'block' : 'none' }}">
                            <li >
                                    {{-- <a href="{{ route('admin.orders.list', ['all']) }}" class="{{ Request::is('admin/orders/list/all') ? 'active' : '' }}"> --}}
                                        <span class="text-truncate">
                                            {{ __('Order List') }}
                                        </span>
                                    {{-- </a> --}}
                            </li>
                            <li >
                                {{-- <a href="{{ route('admin.quotes.list') }}" class="{{ Request::is('admin/quotes/list') ? 'active' : '' }}"> --}}
                                    <span class="text-truncate">
                                        {{ __('Quotes List') }}
                                    </span>
                                {{-- </a> --}}
                            </li>
{{--                        
                        </ul>
                    </li>
                    <li class="submenu {{ Request::is('admin/refund-section/refund/*') ? 'active' : '' }}">
                        <a href="javascript:" title="{{ __('Refund_Requests') }}">
                            <i class="fas fa-money-bill-wave"></i>
                            <span>
                                {{ __('Refund_Requests') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul style="display: {{ Request::is('admin/refund-section/refund*') ? 'block' : 'none' }}">
                            <li >
                                {{-- <a href="{{ route('admin.refund-section.refund.list', ['pending']) }}" class="{{ Request::is('admin/refund-section/refund/list/pending') ? 'active' : '' }}">
                                    <span class="text-truncate">
                                        {{ __('pending') }}
                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            {{ \App\Models\RefundRequest::where('status', 'pending')->count() }}
                                        </span>
                                    </span>
                                </a> --}}
                            </li>
                            <li >
                                {{-- <a href="{{ route('admin.refund-section.refund.list', ['approved']) }}" class="{{ Request::is('admin/refund-section/refund/list/approved') ? 'active' : '' }}">
                                    <span class="text-truncate">
                                        {{ __('approved') }}
                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            {{ \App\Models\RefundRequest::where('status', 'approved')->count() }}
                                        </span>
                                    </span>
                                </a> --}}
                            </li>
                            <li >
                                {{-- <a href="{{ route('admin.refund-section.refund.list', ['refunded']) }}" class="{{ Request::is('admin/refund-section/refund/list/refunded') ? 'active' : '' }}">
                                    <span class="text-truncate">
                                        {{ __('refunded') }}
                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            {{ \App\Models\RefundRequest::where('status', 'refunded')->count() }}
                                        </span>
                                    </span>
                                </a> --}}
                            </li>
                            <li >
                                {{-- <a href="{{ route('admin.refund-section.refund.list', ['rejected']) }}" class="{{ Request::is('admin/refund-section/refund/list/rejected') ? 'active' : '' }}">
                                    <span class="text-truncate">
                                        {{ __('rejected') }}
                                        <span class="badge badge-soft-info badge-pill ml-1">
                                            {{ \App\Models\RefundRequest::where('status', 'rejected')->count() }}
                                        </span>
                                    </span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                    {{-- <li class="{{ Request::is('admin/abandonedCart/list') ? 'active' : '' }}">
                        <a href="{{ route('admin.abandonedCart.list') }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>{{ __('Abandoned Cart') }}</span>
                        </a>
                    </li> --}}
                {{-- @endif --}}

                {{-- / --}}
                {{-- @if (\App\CPU\Helpers::module_permission_check('promotion_management')) --}}
                    <!--promotion management start-->
                    <li
                        class="menu-title {{ Request::is('admin/banner*') || Request::is('admin/coupon*') || Request::is('admin/notification*') || Request::is('admin/deal*') ? 'scroll-here' : '' }}">
                        <span>{{ __('promotion_management') }}</span>
                    </li>

                    <li >
                        {{-- <a href="{{ route('admin.banner.list') }}" class=" {{ Request::is('admin/banner*') ? 'active' : '' }}"><i class="fas fa-newspaper"></i>
                            <span>{{ __('banners') }}</span></a> --}}
                    </li>
                    <li
                        class="submenu  {{ Request::is('admin/coupon*') || Request::is('admin/deal*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-handshake"></i>
                            <span>
                                {{ __('Offers_&_Deals') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display: {{(Request::is('admin/coupon*') || Request::is('admin/deal*'))?'block':'none'}}">
                            <li
                                class="navbar-vertical-aside-has-menu ">
                                {{-- <a class="js-navbar-vertical-aside-menu-link nav-link {{ Request::is('admin/coupon*') ? 'active' : '' }}"
                                    href="{{ route('admin.coupon.add-new') }}"
                                    title="{{ __('coupon') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span
                                        class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">{{ __('coupon') }}</span>
                                </a> --}}
                            </li>
                            <li
                                class="navbar-vertical-aside-has-menu ">
                                {{-- <a class="js-navbar-vertical-aside-menu-link nav-link {{ Request::is('admin/deal/flash') || Request::is('admin/deal/update*') ? 'active' : '' }}"
                                    href="{{ route('admin.deal.flash') }}"
                                    title="{{ __('Flash_Deals') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span
                                        class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">{{ __('Flash_Deals') }}</span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>

                    <li >
                        {{-- <a href="{{ route('admin.notification.add-new') }}" class="{{ Request::is('admin/notification*') ? 'active' : '' }}"><i class="fas fa-bell"></i>
                            <span> {{ __('Push_Notification') }}</span></a> --}}
                    </li>
                {{-- @endif --}}
                {{-- / --}}

                <!--User management-->
                {{-- @if (\App\CPU\Helpers::module_permission_check('user_section')) --}}
                    <li
                        class="menu-title {{ Request::is('admin/customer/list') || Request::is('admin/sellers/subscriber-list') || Request::is('admin/sellers/seller-add') || Request::is('admin/sellers/seller-list') || Request::is('admin/delivery-man*') ? 'scroll-here' : '' }}">
                        <span> {{ __('user_management') }}</span>
                    </li>
                    <li
                        class="submenu {{ Request::is('admin/customer/wallet*') || Request::is('admin/customer/list') || Request::is('admin/customer/view*') || Request::is('admin/reviews*') || Request::is('admin/customer/loyalty/report') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-users"></i>
                            <span>
                                {{ __('customers') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display:   {{ Request::is('admin/customer/wallet*') || Request::is('admin/customer/list') || Request::is('admin/customer/view*') || Request::is('admin/reviews*') || Request::is('admin/customer/loyalty/report') ? 'block' : 'none' }}">
                            <li
                                class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/customer/list') || Request::is('admin/customer/view*') ? 'active' : '' }}" href="{{ route('admin.customer.list') }}"
                                   title="{{ __('Customer_List') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Customer_List') }} </span>
                                </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/reviews*') ? 'active' : '' }}" href="{{ route('admin.reviews.list') }}"
                                   title="{{ __('Customer') }} {{ __('Reviews') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                        {{ __('Customer') }} {{ __('Reviews') }}
                                    </span>
                                </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/customer/wallet/report') ? 'active' : '' }}" title="{{ __('wallet') }}"
                                   href="{{ route('admin.customer.wallet.report') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">
                                        {{ __('wallet') }}
                                    </span>
                                </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/customer/loyalty/report') ? 'active' : '' }}" title="{{ __('Loyalty_Points') }}"
                                   href="{{ route('admin.customer.loyalty.report') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">
                                        {{ __('Loyalty_Points') }}
                                    </span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                    <li class="submenu {{ Request::is('admin/delivery-man*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-truck"></i>
                            <span>
                                {{ __('delivery-man') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul style="display: {{ Request::is('admin/delivery-man*') ? 'block' : 'none' }}">
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/delivery-man/add') ? 'active' : '' }}" href="{{ route('admin.delivery-man.add') }}"
                                   title="{{ __('add_new') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('add_new') }}</span>
                                </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/delivery-man/list') || Request::is('admin/delivery-man/earning-statement*') || Request::is('admin/delivery-man/order-history-log*') || Request::is('admin/delivery-man/order-wise-earning*') ? 'active' : '' }}" href="{{ route('admin.delivery-man.list') }}"
                                   title="{{ __('List') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('List') }}</span>
                                </a> --}}
                            </li>
                            <li class="nav-item {{ Request::is('admin/delivery-man/chat') ? 'active' : '' }}">
                                {{-- <a class="nav-link" href="{{ route('admin.delivery-man.chat') }}"
                                   title="{{ __('Chat') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('chat') }}</span>
                                </a> --}}
                            </li>
                            <li
                                class="nav-item {{ Request::is('admin/delivery-man/withdraw-list') || Request::is('admin/delivery-man/withdraw-view*') ? 'active' : '' }}">
                                {{-- <a class="nav-link " href="{{ route('admin.delivery-man.withdraw-list') }}"
                                   title="{{ __('withdraws') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('withdraws') }}</span>
                                </a> --}}
                            </li>

                            <li
                                class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/delivery-man/emergency-contact') ? 'active' : '' }}"
                                   href="{{ route('admin.delivery-man.emergency-contact.index') }}"
                                   title="{{ __('emergency_contact') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Emergency_Contact') }}</span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                    <li class="submenu {{ Request::is('admin/topups*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-money-bill"></i>
                            <span>
                                {{ __('Topups') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul style="display: {{ Request::is('admin/delivery-man*') ? 'block' : 'none' }}">
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/topups/generate') ? 'active' : '' }}" href="{{ route('admin.topups.add') }}"
                                   title="{{ __('add_new') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Generate Topups') }}</span>
                                </a> --}}
                            </li>
                            <li class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/topups/view')  ? 'active' : '' }}" href="{{ route('admin.topups.view') }}"
                                   title="{{ __('List') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Topups List') }}</span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                    <li
                        class="submenu {{ Request::is('admin/employee*') || Request::is('admin/custom-role*') ? 'active' : '' }}">
                        <a href="javascript:">
                            <i class="fas fa-user-tie"></i>
                            <span>
                                {{ __('employees') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a>
                        <ul
                            style="display: {{ Request::is('admin/employee*') || Request::is('admin/custom-role*') ? 'block' : 'none' }}">
                            <li
                                class="navbar-vertical-aside-has-menu ">
                                {{-- <a class="js-navbar-vertical-aside-menu-link nav-link {{ Request::is('admin/custom-role*') ? 'active' : '' }}"
                                   href="{{ route('admin.custom-role.create') }}"
                                   title="{{ __('Employee_Role_Setup') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                        {{ __('Employee_Role_Setup') }}</span>
                                </a> --}}
                            </li>
                            <li
                                class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/employee/list') || Request::is('admin/employee/add-new') || Request::is('admin/employee/update*') ? 'active' : '' }}" href="{{ route('admin.employee.list') }}"
                                   title="{{ __('Employees') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">{{ __('Employees') }}</span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                {{-- @endif --}}
                <!--User management end-->

                <!-- end refund section -->
                {{-- @if (\App\CPU\Helpers::module_permission_check('support_section')) --}}
                    <li
                        class="menu-title {{ Request::is('admin/support-ticket*') || Request::is('admin/contact*') ? 'scroll-here' : '' }}">
                        <span>{{ __('Customer Support Management') }}</span>
                    </li>
                    <li >
                        {{-- <a href="{{ route('admin.contact.list') }}" class="{{ Request::is('admin/contact*') ? 'active' : '' }}"><i class="fas fa-envelope-open-text"></i>
                            <span> {{ __('messages') }}</span></a> --}}
                        {{-- <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                <span class="position-relative">
                                    {{ __('messages') }}
                                    @php($message = \App\Models\Contact::where('seen', 0)->count())
                                    @if ($message != 0)
                                        <span
                                            class="btn-status btn-xs-status btn-status-danger position-absolute top-0 menu-status"></span>
                                    @endif
                                </span>
                            </span> --}}
                    </li>
                    <li >
                        {{-- <a href="{{ route('admin.support-ticket.view') }}" class="{{ Request::is('admin/support-ticket*') ? 'active' : '' }}"><i class="fas fa-comments"></i>
                            <span> {{ __('Support_Ticket') }}</span></a> --}}
                        {{-- <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                <span class="position-relative">
                                    {{ __('Support_Ticket') }}
                                    @if (\App\Models\SupportTicket::where('status', 'open')->count() > 0)
                                        <span
                                            class="btn-status btn-xs-status btn-status-danger position-absolute top-0 menu-status"></span>
                                    @endif
                                </span>
                            </span> --}}
                    </li>
                {{-- @endif --}}

                <!--Reports & Analytics section-->
                {{-- @if (\App\CPU\Helpers::module_permission_check('report')) --}}
                    <li
                        class="menu-title {{ Request::is('admin/report/earning') || Request::is('admin/report/inhoue-product-sale') || Request::is('admin/report/seller-report') || Request::is('admin/report/earning') || Request::is('admin/transaction/list') || Request::is('admin/refund-section/refund-list') || Request::is('admin/stock/product-in-wishlist') || Request::is('admin/reviews*') || Request::is('admin/stock/product-stock') ? 'scroll-here' : '' }}">
                        <span> {{ __('Reports') }} {{ __('Management') }}</span>
                    </li>
                    <li
                        class="submenu {{ Request::is('admin/report/admin-earning') || Request::is('admin/report/seller-earning') || Request::is('admin/report/inhoue-product-sale') || Request::is('admin/report/seller-report') || Request::is('admin/report/earning') || Request::is('admin/transaction/order-transaction-list') || Request::is('admin/transaction/expense-transaction-list') || Request::is('admin/transaction/refund-transaction-list') ? 'active' : '' }}">
                        {{-- <a href="javascript:">
                            <i class="fas fa-chart-line"></i>
                            <span>
                                {{ __('Sales_&_Transaction_Report') }}
                                <span class="menu-arrow"></span>
                            </span>
                        </a> --}}
                        <ul
                            style="display: {{(Request::is('admin/report/admin-earning') || Request::is('admin/report/seller-earning') || Request::is('admin/report/inhoue-product-sale') || Request::is('admin/report/seller-report') || Request::is('admin/report/earning') || Request::is('admin/transaction/order-transaction-list') || Request::is('admin/transaction/expense-transaction-list') || Request::is('admin/transaction/refund-transaction-list')) ?'block':'none'}}">
                            <li
                                class="navbar-vertical-aside-has-menu ">
                                {{-- <a class="js-navbar-vertical-aside-menu-link nav-link {{ Request::is('admin/report/admin-earning') || Request::is('admin/report/seller-earning') ? 'active' : '' }}"
                                    href="{{ route('admin.report.admin-earning') }}"
                                    title="{{ __('Earning') }} {{ __('reports') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                        {{ __('Earning') }} {{ __('reports') }}
                                    </span>
                                </a> --}}
                            </li>
                            <li
                                class="nav-item ">
                                {{-- <a class="nav-link {{ Request::is('admin/report/inhoue-product-sale') ? 'active' : '' }}" href="{{ route('admin.report.inhoue-product-sale') }}"
                                    title="{{ __('inhouse') }} {{ __('sales') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">
                                        {{ __('inhouse') }} {{ __('sales') }}
                                    </span>
                                </a> --}}
                            </li>
                            <li
                                class="navbar-vertical-aside-has-menu ">
                                {{-- <a class="js-navbar-vertical-aside-menu-link nav-link {{ Request::is('admin/transaction/order-transaction-list') || Request::is('admin/transaction/expense-transaction-list') || Request::is('admin/transaction/refund-transaction-list') ? 'active' : '' }}"
                                    href="{{ route('admin.transaction.order-transaction-list') }}"
                                    title="{{ __('Transaction_Report') }}">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                        {{ __('Transaction_Report') }}
                                    </span>
                                </a> --}}
                            </li>
                        </ul>
                    </li>
                    <li>
                        {{-- <a href="{{ route('admin.report.all-product') }}" class="{{ Request::is('admin/report/all-product') || Request::is('admin/stock/product-in-wishlist') || Request::is('admin/stock/product-stock') ? 'active' : '' }}"><i class="fas fa-chart-bar"></i>
                            <span> {{ __('Product_Report') }}</span></a> --}}
                    </li>
                    <li>
                        {{-- <a href="{{ route('admin.report.order') }}" class="{{ Request::is('admin/report/order') ? 'active' : '' }}"><i class="fas fa-file-alt"></i>
                            <span> {{ __('Order_Report') }}</span></a> --}}
                    </li>
                {{-- @endif --}}
                <!--Reports & Analytics section End-->

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
