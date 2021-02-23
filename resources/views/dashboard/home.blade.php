@extends('dashboard.layouts.layout')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                    <nav class="d-none d-md-inline-block ml-md-4" aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboards</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right"><a class="btn btn-sm btn-neutral" href="/dashboard/information">New</a></div>
            </div><!-- Card stats-->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Projets</h5><span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow"><i class="ni ni-active-40"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">CLIENTS PERMANENTS</h5><span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow"><i class="ni ni-chart-pie-35"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">TRANSITIONS GARANTIES</h5><span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow"><i class="ni ni-money-coins"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body-->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">LOGISTIQUE TOTAL</h5><span class="h2 font-weight-bold mb-0"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow"><i class="ni ni-chart-bar-32"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection