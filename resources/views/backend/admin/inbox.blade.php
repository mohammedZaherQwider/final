@extends('layouts.app')

@section('title', 'Dashboard')

@push('css_or_js')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')
@php
    $data=[];
    $ordersPerMonth=0;
    $usersPerMonth=0;
    $salesPerMonth=0;
@endphp
    {{-- @if(auth('admin')->user()->admin_role_id==1 || \App\CPU\Helpers::module_permission_check('dashboard')) --}}
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header pb-0 mb-0 border-0">
                <div class="flex-between align-items-center">
                    <div>
                        {{-- <h1 class="page-header-title" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};">{{__('Dashboard')}}</h1> --}}
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Overview Section -->
            {{-- @include('admin-views.partials._dashboard-seals-overview',['data'=>$data]) --}}
            <!-- /Overview Section -->

            <!-- Overview Section -->
            {{-- @include('admin-views.partials._dashboard-order-stats',['data'=>$data]) --}}
            <!-- /Overview Section -->

            <!-- inventory Section -->
            {{-- @include('admin-views.partials._dashboard-charts',['data'=>$data]) --}}
            <!-- /inventory Section -->

            <!-- inventory Section -->
{{--            @include('admin-views.partials._dashboard-inventory',['data'=>$data])--}}
            <!-- /inventory Section -->
            <!-- End Business Analytics -->
            <div class="row">
                <div class="col-md-6 col-xl-4 mb-2">
                    <!-- Card -->
                    <div class="card h-100">
                        {{-- @include('admin-views.partials._top-customer',['top_customer'=>$data['top_customer']]) --}}
                    </div>
                    <!-- End Card -->
                </div>
{{--                <div class="col-md-6 col-xl-4 mb-2">--}}
{{--                    <!-- Card -->--}}
{{--                    <div class="card h-100">--}}
{{--                        @include('admin-views.partials._most-rated-products',['most_rated_products'=>$data['most_rated_products']])--}}
{{--                    </div>--}}
{{--                    <!-- End Card -->--}}
{{--                </div>--}}

                <div class="col-md-6 col-xl-4 mb-2">
                    <!-- Card -->
                    <div class="card h-100">
                        {{-- @include('admin-views.partials._top-delivery-man',['top_deliveryman'=>$data['top_deliveryman']]) --}}
                    </div>
                    <!-- End Card -->
                </div>
                <div class="col-md-6 col-xl-4 mb-2">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <h5 class="card-title">User Statistics</h5>
                                </div>
                            </div>
                        </div>
                        <div class="dash-widget">
                            <div id="piechart-area"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 mb-2">
                    <!-- Card -->
                    <div class="card h-100">
                        {{-- @include('admin-views.partials._top-selling-products',['top_sell'=>$data['top_sell']]) --}}
                    </div>
                    <!-- End Card -->
                </div>

            </div>
        </div>
    {{-- @else --}}
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col-12 mb-2 mb-sm-0">
                        {{-- <h3 class="text-center">{{__('hi')}} {{auth('admin')->user()->name}}, {{__('welcome_to_dashboard')}}.</h3> --}}
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
        </div>
    {{-- @endif --}}
@endsection

@push('script')
    <!-- Chart JS -->
    <script src="{{ asset('assets/back-end/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/back-end/assets/plugins/apexchart/chart-data.js') }}"></script>

    <script>
        if ($('#apexcharts-area').length > 0) {
            var options = {
                chart: {
                    height: 350,
                    type: "line",
                    toolbar: {
                        show: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: "smooth"
                },
                series: [{
                    name: "Orders",
                    color: '#6da017',
                    data: JSON.parse('{!! $ordersPerMonth !!}')
                }, {
                    name: "Users",
                    color: '#70C4CF',
                    data: JSON.parse('{!! $usersPerMonth !!}')
                }],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#apexcharts-area"),
                options
            );
            chart.render();
        }
        if ($('#bar').length > 0) {
            var optionsBar = {
                chart: {
                    type: 'bar',
                    height: 350,
                    width: '100%',
                    stacked: false,
                    toolbar: {
                        show: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                plotOptions: {
                    bar: {
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                series: [{
                    name: "Total Seals",
                    color: '#6da017',
                    data: JSON.parse('{!! $salesPerMonth !!}'),
                }, {
                    name: "Total Earnings",
                    color: '#3D5EE1',
                    data: JSON.parse('{!! $salesPerMonth !!}'),
                }],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                xaxis: {
                    labels: {
                        show: false
                    },
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: '#777'
                        }
                    }
                },
                title: {
                    text: '',
                    align: 'left',
                    style: {
                        fontSize: '18px'
                    }
                }

            }

            var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
            chartBar.render();
        }


        var chart = new ApexCharts(document.querySelector("#piechart-area"), options);
        chart.render();
    </script>
@endpush

