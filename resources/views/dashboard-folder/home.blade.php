@extends('master-page.dashboard_master')

@section('title_bar')
    Dashboard
@endsection

@section('main_content')

    <!-- Start Content-->
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="text-success" style="font-size: 30px;">Welcome to dashboard</h4>
                            <p style="color:#aebf31;font-size: 21px;">{{auth()->user()->name}}</p>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0 mb-3">Testimonial</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2 text-end">
                                <span class="badge bg-success rounded-pill float-start mt-3">{{$testimonial_data_all}}% <i class="mdi mdi-trending-up"></i> </span>
                                <h2 class="fw-normal mb-1"> {{$testimonial_data_all}} </h2>
                                <p class="text-muted mb-3">Until Now</p>
                            </div>
                            <div class="progress progress-bar-alt-success progress-sm">
                                <div class="progress-bar bg-success" role="progressbar"
                                        aria-valuenow="{{$testimonial_data_all}}" aria-valuemin="0" aria-valuemax="100"
                                        style="width: {{$testimonial_data_all}}%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

        </div>
        <!-- end row -->
    </div> <!-- container-fluid -->

@endsection
