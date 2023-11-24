@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/libs/chartist/chartist.min.css')}}">
@endSection
@section('content')
{{-- TODO::make this breadcrumb as componant   --}}
    <div class="d-flex justify-content-between align-items-center">
        <div class="title">
            <h2>Dashboard</h2>
        </div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard v1</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- start cards--}}
    <div class="salesCard mt-4 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 mt-3">
                <div class="rbox flex1">
                    <div class="text">
                        <h4>Order</h4>
                        <h2>1,235</h2>
                    </div>
                    <div class="icon">
                        <span>
                            <i class='bx bxs-folder'></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-3">
                <div class="rbox flex1">
                    <div class="text">
                        <h4>Invoice</h4>
                        <h2>1,868</h2>
                    </div>
                    <div class="icon">
                        <span>
                            <i class='bx bxs-download'></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-3">
                <div class="rbox flex1">
                    <div class="text">
                        <h4>Cash</h4>
                        <h2>8,265</h2>
                    </div>
                    <div class="icon">
                        <span>
                            <i class='bx bxs-wallet-alt' style='color:#ffffff' ></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards--}}

    {{-- start charts --}}
    <div class="transactionTable mt-1">
        <h3>Latest Actions</h3>
        <div class="card-body p-0 overflow-hidden">
            <div id="chart"></div>
        </div>
    </div>
    {{-- end charts   --}}

    <div class="activityDash mt-4 mb-5">
        <div class="row">
            <div class="col-lg-8 col-md-12 mt-3">
                <div class="box">
                    <h3>Activity</h3>
                    <div class="content">
                        <div class="abox flex1">
                            <i class='bx bx-chevrons-right'></i>
                            <label>22 Nov</label>
                            <span class="fas fa-long-arrow-alt-right"></span>
                            <p>Responded to need “Volunteer Activities</p>
                        </div>
                        <div class="abox flex1">
                            <i class='bx bx-chevrons-right'></i>
                            <label>17 Nov</label>
                            <span class="fas fa-long-arrow-alt-right"></span>
                            <p>Everyone realizes why a new common language would be desirable... </p>
                        </div>
                        <div class="abox flex1">
                            <i class='bx bx-chevrons-right'></i>
                            <label>15 Nov</label>
                            <span class="fas fa-long-arrow-alt-right"></span>
                            <p>Joined the group “Boardsmanship Forum”</p>
                        </div>
                        <div class="abox flex1">
                            <i class='bx bx-chevrons-right'></i>
                            <label>18 Nov</label>
                            <span class="fas fa-long-arrow-alt-right"></span>
                            <p>Responded to need “In-Kind Opportunity”</p>
                        </div>
                        <button>
                            View Profile
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mt-3">
                <div class="circleDash">
                    <div class="box location">
                        <div class="text ">
                            <h3>Top Cities Selling Product</h3>
                            <img
                                src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/889AEE/external-location-map-pin-flatart-icons-outline-flatarticons-10.png">
                            <h2>1,456</h2>
                            <span>San Francisco</span>
                        </div>
                        <div id="loac">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- start tables --}}
    <div class="transactionTable mt-4">
        <h3>Latest Transaction</h3>
        <div class="detailsTable table-responsive">
            <table class="table overScroll">
                <thead>
                <tr>
                    <th> <input type="checkbox"> </th>
                    <th>Order Id</th>
                    <th>Billing Name</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Payment Status</th>
                    <th>Payment Method</th>
                    <th>View Details</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#SK2548</td>
                    <td>Neal Matthews</td>
                    <td>07 Oct, 2019</td>
                    <td>$400</td>
                    <td> <span class="green">Paid</span> </td>
                    <td><i class="fab fa-cc-mastercard"></i> Mastercard</td>
                    <td> <button>View Details</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#SK2548</td>
                    <td>Juan Mitchell</td>
                    <td>07 Oct, 2019</td>
                    <td>$400</td>
                    <td> <span class="red">Chargeback</span> </td>
                    <td><i class="fab fa-cc-visa"></i> Visa</td>
                    <td> <button>View Details</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#SK2548</td>
                    <td>Jamal Burnett</td>
                    <td>07 Oct, 2019</td>
                    <td>$400</td>
                    <td> <span class="green">Pad</span> </td>
                    <td><i class="fab fa-cc-paypal"></i> Paypal</td>
                    <td> <button>View Details</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#SK2548</td>
                    <td>Neal Matthews</td>
                    <td>07 Oct, 2019</td>
                    <td>$400</td>
                    <td> <span class="green">Paid</span> </td>
                    <td><i class="fab fa-cc-mastercard"></i> Mastercard</td>
                    <td> <button>View Details</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#SK2548</td>
                    <td>Juan Mitchell</td>
                    <td>07 Oct, 2019</td>
                    <td>$400</td>
                    <td> <span class="yellow">Refund</span> </td>
                    <td><i class="fab fa-cc-visa"></i> Visa</td>
                    <td> <button>View Details</button> </td>
                </tr>
                <tr>
                    <td><input type="checkbox"></td>
                    <td>#SK2548</td>
                    <td>Jamal Burnett</td>
                    <td>07 Oct, 2019</td>
                    <td>$400</td>
                    <td> <span class="green">Pad</span> </td>
                    <td><i class="fab fa-cc-paypal"></i> Paypal</td>
                    <td> <button>View Details</button> </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- end tables   --}}

    <div class="Cards">
        <div class="row">
            <div class="col-md-4 mt-5">
                <div class="card card-widget">
                    <div class="widget-user-header text-white">
                        <h3 class="widget-user-username">Elizabeth Pierce</h3>
                        <h5 class="widget-user-desc">Web Designer</h5>
                    </div>
                    <div class="widget-user-image">
                        <img  src="{{asset('images/profile/man_2.png')}}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,500</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">19,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">49</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card card-widget">
                    <div class="widget-user-header2 text-white">
                        <h3 class="widget-user-username">Ahmed Rayes</h3>
                        <h5 class="widget-user-desc">Web Designer</h5>
                    </div>
                    <div class="widget-user-image ">
                        <img  src="{{asset('images/profile/man.png')}}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card card-widget widget-user">
                    <div class="widget-user-header3 text-white">
                        <h3 class="widget-user-username ">Elizabeth Pierce</h3>
                        <h5 class="widget-user-desc">Web Designer</h5>
                    </div>
                    <div class="widget-user-image2">
                        <img  src="{{asset('images/profile/gamer.png')}}" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">92,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">86,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">650</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("js")
    <script src="{{asset('js/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('js/dashboard/chart.js')}}"></script>
@endsection
