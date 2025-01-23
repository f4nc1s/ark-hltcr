@extends('layouts.slave')
@section('title', 'Dashboard | ' . env('APP_NAME', 'Aroko Health'))</title>
@section('content')
<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between my-4 page-header-breadcrumb flex-wrap gap-2">
        <div>
            <p class="fw-medium fs-20 mb-0">Good Morning, JO</p>
            <p class="fs-13 text-muted mb-0">Let's check how you're feeling today!</p>
        </div>
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <!-- <div class="form-group">
                <div class="input-group">
                    <div class="input-group-text bg-primary-transparent text-primary"> <i class="ri-calendar-line"></i> </div>
                    <input type="text" class="form-control breadcrumb-input flatpickr-input" id="daterange"
                        placeholder="Search By Date Range" readonly="readonly">
                </div>
            </div> -->
            <!-- <div class="btn-list">
                <button class="btn btn-secondary-light btn-wave waves-effect waves-light"><i class="ri-upload-cloud-line align-middle me-1 lh-1"></i> Export Report </button>
                <button class="btn btn-icon btn-success btn-wave me-0 waves-effect waves-light"> <i class="ri-filter-3-line"></i></button>
            </div> -->
        </div>
    </div>

    <!-- Banner Section -->
    <div class="row">
        <div class="col-xl-7">
            <div class="card custom-card nft-custom-card bg-primary-gradient border-0">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-6">
                            <h2 class="text-fixed-white mb-4 lh-base">Have you considered having the best treatment at the lowest possible cost??</h2>
                            <button class="btn btn-secondary btn-lg btn-wave waves-effect waves-light">Upgrade Plan</button>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 d-md-block d-none">
                            <div class="text-center nft-main-image">
                                <img src="https://php.spruko.com/mamix/mamix/assets/images/nft-images/1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-5">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card custom-card bg-primary-transparent border-0 shadow-none">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="main-card-icon primary">
                                    <div class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                        <div class="avatar avatar-sm svg-white">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                <path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 4h2v5l-1-.75L9 9V4zm9 16H6V4h1v9l3-2.25L13 13V4h5v16z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block ,mb-1">Total Assets</span>
                                    <h5 class="fw-medium d-block mb-0">543 <span class="text-success fw-semibold fs-12 ms-2 d-inline-block">0.25% <i class="ri-arrow-up-s-line align-middle mx-1"></i>
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card custom-card bg-secondary-transparent border-0 shadow-none">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="main-card-icon secondary">
                                    <div class="avatar avatar-lg bg-secondary-transparent border border-secondary border-opacity-10">
                                        <div class="avatar avatar-sm svg-white">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <path d="M0,0h24v24H0V0z" fill="none"></path>
                                                <g>
                                                    <path d="M19.5,3.5L18,2l-1.5,1.5L15,2l-1.5,1.5L12,2l-1.5,1.5L9,2L7.5,3.5L6,2v14H3v3c0,1.66,1.34,3,3,3h12c1.66,0,3-1.34,3-3V2 L19.5,3.5z M15,20H6c-0.55,0-1-0.45-1-1v-1h10V20z M19,19c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H8V5h11V19z"></path>
                                                    <rect height="2" width="6" x="9" y="7"></rect>
                                                    <rect height="2" width="2" x="16" y="7"></rect>
                                                    <rect height="2" width="6" x="9" y="10"></rect>
                                                    <rect height="2" width="2" x="16" y="10"></rect>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block ,mb-1">Total Value</span>
                                    <h5 class="fw-medium d-block mb-0">$15,322 <span class="text-danger fw-semibold fs-12 ms-2 d-inline-block">0.14% <i class="ri-arrow-down-s-line align-middle mx-1"></i>
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card custom-card bg-success-transparent border-0 shadow-none">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="main-card-icon success">
                                    <div class="avatar avatar-lg bg-success-transparent border border-success border-opacity-10">
                                        <div class="avatar avatar-sm svg-white">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g>
                                                    <path d="M0,0h24v24H0V0z" fill="none"></path>
                                                </g>
                                                <g>
                                                    <g>
                                                        <path d="M21.41,11.41l-8.83-8.83C12.21,2.21,11.7,2,11.17,2H4C2.9,2,2,2.9,2,4v7.17c0,0.53,0.21,1.04,0.59,1.41l8.83,8.83 c0.78,0.78,2.05,0.78,2.83,0l7.17-7.17C22.2,13.46,22.2,12.2,21.41,11.41z M12.83,20L4,11.17V4h7.17L20,12.83L12.83,20z"></path>
                                                        <circle cx="6.5" cy="6.5" r="1.5"></circle>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block ,mb-1">Total Sales</span>
                                    <h5 class="fw-medium d-block mb-0">662 <span class="text-success fw-semibold fs-12 ms-2 d-inline-block">1.57% <i class="ri-arrow-up-s-line align-middle mx-1"></i>
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card custom-card bg-orange-transparent border-0 shadow-none">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <div class="main-card-icon orange">
                                    <div class="avatar avatar-lg bg-orange-transparent border border-orange border-opacity-10">
                                        <div class="avatar avatar-sm svg-white">
                                            <svg class="svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                                <g>
                                                    <rect fill="none" height="24" width="24"></rect>
                                                </g>
                                                <g>
                                                    <path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8 s8,3.59,8,8C20,16.41,16.41,20,12,20z M12.89,11.1c-1.78-0.59-2.64-0.96-2.64-1.9c0-1.02,1.11-1.39,1.81-1.39 c1.31,0,1.79,0.99,1.9,1.34l1.58-0.67c-0.15-0.44-0.82-1.91-2.66-2.23V5h-1.75v1.26c-2.6,0.56-2.62,2.85-2.62,2.96 c0,2.27,2.25,2.91,3.35,3.31c1.58,0.56,2.28,1.07,2.28,2.03c0,1.13-1.05,1.61-1.98,1.61c-1.82,0-2.34-1.87-2.4-2.09L8.1,14.75 c0.63,2.19,2.28,2.78,3.02,2.96V19h1.75v-1.24c0.52-0.09,3.02-0.59,3.02-3.22C15.9,13.15,15.29,11.93,12.89,11.1z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="d-block ,mb-1">Total Revenue</span>
                                    <h5 class="fw-medium d-block mb-0">$67,977 <span class="text-success fw-semibold fs-12 ms-2 d-inline-block">0.34% <i class="ri-arrow-up-s-line align-middle mx-1"></i>
                                        </span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Services -->
    <div class="row">
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card custom-card">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <div>
                                <span class="d-block mb-2">Plan</span>
                                <h5 class="mb-4 fs-4">Aroko Essential Plan</h5>
                            </div>
                            <!-- <span class="text-success me-2 fw-medium d-inline-block"><i class="ti ti-trending-up fs-5 align-middle me-1 d-inline-block"></i>0.45% </span> -->
                            <span class="text-muted">Upgrade</span>
                        </div>
                        <div>
                            <div class="main-card-icon primary">
                                <div class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                    <div class="avatar avatar-sm svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                            <path d="M216,64H176a48,48,0,0,0-96,0H40A16,16,0,0,0,24,80V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V80A16,16,0,0,0,216,64ZM128,32a32,32,0,0,1,32,32H96A32,32,0,0,1,128,32Zm88,168H40V80H80V96a8,8,0,0,0,16,0V80h64V96a8,8,0,0,0,16,0V80h40Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card custom-card main-card">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <div>
                                <div class="main-card-icon secondary">
                                    <div class="avatar avatar-lg bg-secondary-transparent border border-secondary border-opacity-10">
                                        <div class="avatar avatar-sm svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                                <path d="M12 16.114c-3.998-5.951-8.574-7.043-8.78-7.09L2 8.75V10c0 7.29 3.925 12 10 12 5.981 0 10-4.822 10-12V8.75l-1.22.274c-.206.047-4.782 1.139-8.78 7.09z"></path>
                                                <path d="M11.274 3.767c-1.799 1.898-2.84 3.775-3.443 5.295 1.329.784 2.781 1.943 4.159 3.685 1.364-1.76 2.826-2.925 4.17-3.709-.605-1.515-1.646-3.383-3.435-5.271L12 3l-.726.767z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <!-- <span class="d-block mb-2">Healthcare Provider</span> -->
                                <h4 class="mb-4 fs-4">Ikoyi Central Hospital</h4>
                            </div>
                            <!-- <span class="text-success me-2 fw-medium d-inline-block"> -->
                            <!-- <i class="ti ti-trending-up fs-5 align-middle me-1 d-inline-block"></i>0.18% </span> -->
                            <span class="text-muted">Change</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card custom-card main-card">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <div>
                                <span class="d-block mb-2">Gym and Spa</span>
                                <h5 class="mb-4 fs-4">Not Enrolled</h5>
                            </div>
                            <!-- <span class="text-success me-2 fw-medium d-inline-block">
                                <i class="ti ti-trending-up fs-5 align-middle me-1 d-inline-block"></i>0.29% </span> -->
                            <span class="text">Enrol</span>
                        </div>
                        <div>
                            <div class="main-card-icon success">
                                <div class="avatar avatar-lg bg-success-transparent border border-success border-opacity-10">
                                    <div class="avatar avatar-sm svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                            <path d="M200,168a48.05,48.05,0,0,1-48,48H136v16a8,8,0,0,1-16,0V216H104a48.05,48.05,0,0,1-48-48,8,8,0,0,1,16,0,32,32,0,0,0,32,32h48a32,32,0,0,0,0-64H112a48,48,0,0,1,0-96h8V24a8,8,0,0,1,16,0V40h8a48.05,48.05,0,0,1,48,48,8,8,0,0,1-16,0,32,32,0,0,0-32-32H112a32,32,0,0,0,0,64h40A48.05,48.05,0,0,1,200,168Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card custom-card main-card">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start justify-content-between">
                        <div>
                            <div>
                                <span class="d-block mb-2">Beneficiary</span>
                                <h5 class="mb-4 fs-4">4</h5>
                            </div>
                            <!-- <span class="text-danger me-2 fw-medium d-inline-block">
                                <i class="ti ti-trending-down fs-5 align-middle me-1 d-inline-block"></i>0.05% </span>
                            <span class="text-muted">Since last month</span> -->
                        </div>
                        <div>
                            <div class="main-card-icon orange">
                                <div class="avatar avatar-lg bg-orange-transparent border border-orange border-opacity-10">
                                    <div class="avatar avatar-sm svg-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                            <path d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- HMO History -->
    <div class="col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title"> HMO History </div>
                <a href="javascript:void(0);" class="fs-12 text-muted"> View All <i class="ti ti-arrow-narrow-right ms-1"></i>
                </a>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col">Serial ID</th>
                                <th scope="col">Description</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="fw-medium fs-13">AR89292</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start gap-2">
                                        <!-- <div>
                                            <span class="avatar avatar-sm bg-primary-transparent">
                                                <i class="ri-paypal-line fs-18"></i>
                                            </span>
                                        </div> -->
                                        <div>
                                            <span class="d-block fw-medium mb-1">Aroko Essential Plan</span>
                                            <span class="text-primary">Active</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="d-block fw-medium mb-1">$12,000</span>
                                        <!-- <span class="d-block fs-11 text-muted">Nov 22,2024</span> -->
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="fw-medium fs-13">AR89292</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start gap-2">
                                        <!-- <div>
                                            <span class="avatar avatar-sm bg-primary-transparent">
                                                <i class="ri-paypal-line fs-18"></i>
                                            </span>
                                        </div> -->
                                        <div>
                                            <span class="d-block fw-medium mb-1">Aroko Essential Plan</span>
                                            <span class="text-primary">Active</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="d-block fw-medium mb-1">$12,000</span>
                                        <!-- <span class="d-block fs-11 text-muted">Nov 22,2024</span> -->
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="fw-medium fs-13">AR89292</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start gap-2">
                                        <!-- <div>
                                            <span class="avatar avatar-sm bg-primary-transparent">
                                                <i class="ri-paypal-line fs-18"></i>
                                            </span>
                                        </div> -->
                                        <div>
                                            <span class="d-block fw-medium mb-1">Aroko Essential Plan</span>
                                            <span class="text-primary">Active</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="d-block fw-medium mb-1">$12,000</span>
                                        <!-- <span class="d-block fs-11 text-muted">Nov 22,2024</span> -->
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="fw-medium fs-13">AR89292</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start gap-2">
                                        <!-- <div>
                                            <span class="avatar avatar-sm bg-primary-transparent">
                                                <i class="ri-paypal-line fs-18"></i>
                                            </span>
                                        </div> -->
                                        <div>
                                            <span class="d-block fw-medium mb-1">Aroko Essential Plan</span>
                                            <span class="text-primary">Active</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="d-block fw-medium mb-1">$12,000</span>
                                        <!-- <span class="d-block fs-11 text-muted">Nov 22,2024</span> -->
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0)" class="fw-medium fs-13">AR89292</a>
                                </td>
                                <td>
                                    <div class="d-flex align-items-start gap-2">
                                        <!-- <div>
                                            <span class="avatar avatar-sm bg-primary-transparent">
                                                <i class="ri-paypal-line fs-18"></i>
                                            </span>
                                        </div> -->
                                        <div>
                                            <span class="d-block fw-medium mb-1">Aroko Essential Plan</span>
                                            <span class="text-primary">Active</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="d-block fw-medium mb-1">$12,000</span>
                                        <!-- <span class="d-block fs-11 text-muted">Nov 22,2024</span> -->
                                    </div>
                                </td>
                                <td>
                                    <span class="d-block fs-11 text-muted">Nov 22,2024</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 mt-xl-3">
            <div class="card custom-card">
                <div class="card-body">
                    <h6 class="mb-0">THIS IS AN EMPTY PAGE</h6>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('scripts')
<!-- Sales Dashboard JS -->
<script src="{{ asset('assets/js/sales-dashboard.js') }}"></script>

@endsection