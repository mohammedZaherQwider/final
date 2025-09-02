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

