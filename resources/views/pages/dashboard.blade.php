@include('layouts.header')
@include('layouts.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
    </div>
    @if (session('lengkapiProfile'))
        <div class="alert alert-warning">
            {{ session('lengkapiProfile') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <section class="section">
        <div class="row">
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">User <span>| This year</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <span class="text-success small pt-1 fw-bold fs-2">{{$countUser}}</span> <span
                                    class="text-muted small pt-2 ps-1 ">User</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Artikel <span>| This year</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <span class="text-success small pt-1 fw-bold fs-2">{{$countArticle}}</span> <span
                                    class="text-muted small pt-2 ps-1">Artikel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Kategori <span>| This year</span></h5>
                        <div class="d-flex align-items-center">
                            <div class="ps-3">
                                <span class="text-success small pt-1 fw-bold fs-2">{{$countCategory}}</span> <span
                                    class="text-muted small pt-2 ps-1">Kategori</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artikel</h5>

                        <!-- Column Chart -->
                        <div id="columnChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#columnChart"), {
                                    series: [{
                                        name: 'Net Profit',
                                        data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
                                    }, {
                                        name: 'Revenue',
                                        data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
                                    }, {
                                        name: 'Free Cash Flow',
                                        data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded'
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['transparent']
                                    },
                                    xaxis: {
                                        categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
                                    },
                                    yaxis: {
                                        title: {
                                            text: '$ (thousands)'
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function(val) {
                                                return "$ " + val + " thousands"
                                            }
                                        }
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Column Chart -->

                    </div>
                </div>
            </div> --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Artikel Berdasarkan Kategori</h5>

                        <!-- Column Chart -->
                        <div id="categoryChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#categoryChart"), {
                                    series: [{
                                        name: 'Jumlah Artikel',
                                        data: @json($categoryValues)
                                    }],
                                    chart: {
                                        type: 'bar',
                                        height: 350
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: '55%',
                                            endingShape: 'rounded'
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        show: true,
                                        width: 2,
                                        colors: ['transparent']
                                    },
                                    xaxis: {
                                        categories: @json($categoryLabels),
                                    },
                                    yaxis: {
                                        title: {
                                            text: 'Jumlah Artikel'
                                        }
                                    },
                                    fill: {
                                        opacity: 1
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function(val) {
                                                return val + " artikel"
                                            }
                                        }
                                    }
                                }).render();
                            });
                        </script>
                        <!-- End Column Chart -->

                    </div>
                </div>
            </div>


      <!-- Service Stats -->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Service Berdasarkan Kategori</h5>
                <div id="serviceCategoryChart"></div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#serviceCategoryChart"), {
                            series: [{
                                name: 'Jumlah Service',
                                data: @json($serviceCategoryValues)
                            }],
                            chart: {
                                type: 'bar',
                                height: 350
                            },
                            plotOptions: {
                                bar: {
                                    horizontal: false,
                                    columnWidth: '55%',
                                    endingShape: 'rounded'
                                },
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                show: true,
                                width: 2,
                                colors: ['transparent']
                            },
                            xaxis: {
                                categories: @json($serviceCategoryLabels),
                            },
                            yaxis: {
                                title: {
                                    text: 'Jumlah Service'
                                }
                            },
                            fill: {
                                opacity: 1
                            },
                            tooltip: {
                                y: {
                                    formatter: function(val) {
                                        return val + " service"
                                    }
                                }
                            }
                        }).render();
                    });
                </script>
            </div>
        </div>
    </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Persentase Kategori Blog</h5>

                        <!-- Pie Chart -->
                        <div id="pieChart"></div>

                        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#pieChart"), {
                                    series: @json($categoryValues),
                                    chart: {
                                        height: 350,
                                        type: 'pie',
                                        toolbar: {
                                            show: true
                                        }
                                    },
                                    labels: @json($categoryLabels)
                                }).render();
                            });
                        </script>
                        <!-- End Pie Chart -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
@include('layouts.footer')
