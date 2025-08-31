<!-- Header -->
<div class="header">

    <!-- Logo -->
    <div class="header-left">
        {{-- <a href="{{ route('admin.dashboard') }}" class="logo">
            @php($e_commerce_logo=\App\Models\BusinessSetting::where(['type'=>'company_web_logo'])->first()->value)
            <img src="{{asset("storage/company/$e_commerce_logo")}}" onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'" alt="Logo">
        </a>
        <a href="{{route('admin.dashboard.index')}}" class="logo logo-small">
            <img src="{{asset("storage/company/$e_commerce_logo")}}" onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'" alt="Logo" width="30" height="30">
        </a> --}}
    </div>
    <!-- /Logo -->

    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

{{--    <ul class="navbar-nav align-items-center flex-row flex-grow-1 __navbar-nav">--}}
{{--        <li class="nav-item __nav-item">--}}
{{--            <a href="https://6ammart-admin.6amtech.com/admin/users" id="tourb-6" class="__nav-link ">--}}
{{--                <span>Users</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}

    <ul class="nav user-menu ms-5 float-start">
        <li>
            <a href="#" class="btn">
                <i class="fas fa-truck-fast"></i>
                Delivery Management
            </a>
        </li>
    </ul>
    <!-- Search Bar -->
{{--    <div class="top-nav-search">--}}
{{--        <form>--}}
{{--            <input type="text" class="form-control" placeholder="Search here">--}}
{{--            <button class="btn" type="submit"><i class="fas fa-search"></i></button>--}}
{{--        </form>--}}
{{--    </div>--}}
    <!-- /Search Bar -->

    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Right Menu -->
    <ul class="nav user-menu">
        {{-- @if (\App\CPU\Helpers::module_permission_check('system_settings')) --}}
            <li  class="nav-item dropdown noti-dropdown language-drop me-2">
                <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                    <i class="fas fa-gears"></i>
                </a>
                <div class="dropdown-menu text-center w-300">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">General Settings Management</span>
                    </div>
                    <div class="noti-content w-100">
                        <div >
                            {{-- <a class="dropdown-item {{ Request::is('admin/business-settings/web-config') || Request::is('admin/business-settings/web-config/app-settings') || Request::is('admin/product-settings/inhouse-shop') || Request::is('admin/business-settings/seller-settings') || Request::is('admin/customer/customer-settings') || Request::is('admin/refund-section/refund-index') || Request::is('admin/business-settings/shipping-method/setting') || Request::is('admin/business-settings/order-settings/index') || Request::is('admin/product-settings') || Request::is('admin/business-settings/web-config/delivery-restriction') || Request::is('admin/business-settings/cookie-settings') ? 'active' : '' }}"
                               href="{{ route('admin.business-settings.web-config.index') }}"> --}}
                                <i class="fas fa-cogs me-2"></i>{{ __('Business_Setup') }}
                            {{-- </a> --}}
                            {{-- <a class="dropdown-item {{ Request::is('admin/business-settings/mail') || Request::is('admin/business-settings/sms-module') || Request::is('admin/business-settings/captcha') || Request::is('admin/social-login/view') || Request::is('admin/social-media-chat/view') || Request::is('admin/business-settings/map-api') || Request::is('admin/business-settings/payment-method') || Request::is('admin/business-settings/fcm-index') ? 'active' : '' }}"
                               href="{{ route('admin.business-settings.sms-module') }}"> --}}
                                <i class="fas fa-project-diagram me-2"></i>{{ __('Project Setup') }}
                            {{-- </a> --}}
                            {{-- <a class="dropdown-item {{ Request::is('admin/business-settings/terms-condition') || Request::is('admin/business-settings/page*') || Request::is('admin/business-settings/privacy-policy') || Request::is('admin/business-settings/about-us') || Request::is('admin/helpTopic/list') ? 'active' : '' }}" href="{{ route('admin.business-settings.terms-condition') }}"> --}}
                                <i class="fas fa-page4 me-2"></i>{{ __('pages') }}
                            {{-- </a> --}}
                            {{-- <a class="dropdown-item {{ Request::is('admin/business-settings/social-media') ? 'active' : '' }}" href="{{ route('admin.business-settings.social-media') }}"> --}}
                                <i class="fas fa-message me-2"></i>{{ __('Social_Media_Links') }}
                            {{-- </a> --}}
                        </div>
                    </div>
                </div>
            </li>
        {{-- @endif --}}
        {{-- @if(\App\CPU\Helpers::module_permission_check('support_section'))
            <li  class="nav-item me-2">
                <a href="{{route('admin.support-ticket.view')}}" class="nav-link header-nav-list win-maximize">
                    <i class="fas fa-mail-bulk"></i>
                </a>
            </li>
        @endif --}}
        {{-- @if(\App\CPU\Helpers::module_permission_check('order_management'))
            <li class="nav-item me-2">
                <a class="nav-link header-nav-list win-maximize position-relative" href="{{route('admin.orders.list',['all'])}}">
                    <i class="fas fa-clipboard-list"></i>
                    <span class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-theme">
                            {{\App\Models\Order::where('order_status','pending')->count()}}
                    </span>
                </a>
            </li>
        @endif --}}
        <!-- Notifications -->
        <li class="nav-item dropdown noti-dropdown me-2">
            <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                <img src="{{ asset('assets/back-end/assets/img/icons/header-icon-05.svg') }}" alt="">
            </a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span class="notification-title">Notifications</span>
                    <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                </div>
                <div class="noti-content">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
												</span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
												</span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
												</span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="#">
                                <div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
												</span>
                                    <div class="media-body flex-grow-1">
                                        <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="#">View all Notifications</a>
                </div>
            </div>
        </li>

        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <span class="user-img">
                        {{-- <img class="rounded-circle" src="{{asset('storage/admin')}}/{{auth('admin')->user()->image}}" width="31" alt="Ryan Taylor"> --}}
                        <div class="user-text">
                            {{-- <h6>{{auth('admin')->user()->first_name . ' '  . auth('admin')->user()->last_name}}</h6> --}}
                        </div>
                    </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        {{-- <img src="{{asset('storage/admin')}}/{{auth('admin')->user()->image}}" alt="User Image" class="avatar-img rounded-circle"> --}}
                    </div>
                    <div class="user-text">
                        {{-- <h6>{{auth('admin')->user()->first_name . ' '  . auth('admin')->user()->last_name}}</h6> --}}
                    </div>
                </div>
                {{-- <a class="dropdown-item" href="{{route('admin.profile.update',auth('admin')->user()->id)}}">My Profile</a> --}}
                {{-- <a class="dropdown-item" href="#" onclick="Swal.fire({
                                    title: '{{__('Do_you_want_to_logout')}}?',
                                    showDenyButton: true,
                                    showCancelButton: true,
                                    confirmButtonColor: '#377dff',
                                    cancelButtonColor: '#363636',
                                    confirmButtonText: `Yes`,
                                    denyButtonText: `Don't Logout`,
                                    }).then((result) => {
                                    if (result.value) {
                                    location.href='{{route('admin.auth.logout')}}';
                                    } else{
                                    Swal.fire('Canceled', '', 'info')
                                    }
                                    })">Logout</a> --}}
            </div>
        </li>
        <!-- /User Menu -->

    </ul>
    <!-- /Header Right Menu -->

</div>
<!-- /Header -->

