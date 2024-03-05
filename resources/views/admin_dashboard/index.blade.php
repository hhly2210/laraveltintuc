@extends("admin_dashboard.layouts.app")
@section("style")
    <link href="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-info">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng bài viết</p>
                                    <h4 class="my-1 text-info">{{ $countPost }}</h4>
                                    <!-- <p class="mb-0 font-13">+2.5% from last week</p> -->
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class='bx bx-message-square-edit'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng danh mục</p>
                                    <h4 class="my-1 text-danger">{{ $countCategories }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class='bx bx bx-menu'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-success">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng người quản trị</p>
                                    <h4 class="my-1 text-success">{{ $countAdmin }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class='bx bx-user' ></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-start border-0 border-3 border-warning">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0 text-secondary">Tổng người dùng</p>
                                    <h4 class="my-1 text-warning">{{ $countUser }}</h4>
                                </div>
                                <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <h6 class="mb-0">Biểu đồ thống kê tháng trước</h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                                <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Số đã người đọc</span>
                                <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Số bài viết</span>
                            </div>
                            <div class="chart-container-1">
                                <canvas id="chart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card w-100 radius-10">
                        <div class="card-body">
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Lượt Xem</p>
                                            <h4 class="my-1">{{ $countView }}</h4>
                                            <!-- <p class="mb-0 font-13">+6.2% from last week</p> -->
                                        </div>
                                        <div class="widgets-icons-2 bg-gradient-cosmic text-white ms-auto"><i class='bx bx-show'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card radius-10 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Bình luận</p>
                                            <h4 class="my-1">{{ $countComments }}</h4>
                                        </div>
                                        <div class="widgets-icons-2 bg-gradient-ibiza text-white ms-auto"><i class='bx bxs-comment-detail'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card radius-10 mb-0 border shadow-none">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <p class="mb-0 text-secondary">Lượt thích</p>
                                            <h5 class="my-1"></h5> Chờ cập nhật ... 
                                        </div>
                                        <div class="widgets-icons-2 bg-gradient-moonlit text-white ms-auto"><i class='bx bxs-like'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>

                    </div>

                </div>
            </div><!--end row-->

        </div>
    </div>
@endsection

@section("script")
    <script src="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/js/index.js') }}"></script>

   
	<script>
		$(document).ready(function () {
			// Biểu đồ
        var ctx = document.getElementById("chart1").getContext('2d');
        
        var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke1.addColorStop(0, '#6078ea');  
            gradientStroke1.addColorStop(1, '#17c5ea'); 
            
        var gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
            gradientStroke2.addColorStop(0, '#ff8359');
            gradientStroke2.addColorStop(1, '#ffdf40');
        
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($postsData['labels']) !!},
                datasets: [{
                    label: 'Lượt xem',
                    data: {!! json_encode($postsData['views']) !!},
                    borderColor: gradientStroke1,
                    backgroundColor: gradientStroke1,
                    hoverBackgroundColor: gradientStroke1,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 0
                }, {
                    label: 'Bài viết',
                    data: {!! json_encode($postsData['posts']) !!},
                    borderColor: gradientStroke2,
                    backgroundColor: gradientStroke2,
                    hoverBackgroundColor: gradientStroke2,
                    pointRadius: 0,
                    fill: false,
                    borderWidth: 0
                }]
                },
                
                options:{
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom',
                    display: false,
                    labels: {
                        boxWidth:8
                    }
                    },
                    tooltips: {
                    displayColors:false,
                    },	
                scales: {
                    xAxes: [{
                        barPercentage: .5
                    }]
                    }
                }
            });
                });

	</script>


@endsection
