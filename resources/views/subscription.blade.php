@extends('layouts.slave')
@section('title', 'Subscription | ' . env('APP_NAME', 'Aroko Health'))</title>
@section('content')
<div class="container-fluid">

{{-- <div class="row">
    <div class="col-xl-12 mt-xl-3">
        <div class="card custom-card">
            <div class="card-body">
                <h6 class="mb-0">THIS IS AN EMPTY PAGE</h6>
            </div>
        </div>
    </div>
</div> --}}

<div class="row mb-4 border rounded-3 p-4" style="border: 1px solid #dcdcdc;">
    <h2 class="text-start mb-4" style="font-weight: bold; font-size: 2rem;">My Subscriptions</h2>
    
    <div class="col-xl-3">
        <div class="card custom-card text-start" style="height: 100%;">
            <div class="card-header border-bottom-0 pb-0 d-flex align-items-center">
                <span class="me-2" style="font-size: 2rem;"><i class="ri-file-text-line"></i></span>
                <div class="fw-bold fs-16">Plan</div>
            </div>
            <div class="card-body pt-1">
                <p class="text-muted fs-11">Basic Plan</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card custom-card text-start" style="height: 100%;">
            <div class="card-header border-bottom-0 pb-0 d-flex align-items-center">
                <span class="me-2" style="font-size: 2rem;"><i class="ri-money-dollar-circle-line"></i></span>
                <div class="fw-bold fs-16">Cost</div>
            </div>
            <div class="card-body pt-1">
                <p class="text-muted fs-11">$29.99/month</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card custom-card text-start" style="height: 100%;">
            <div class="card-header border-bottom-0 pb-0 d-flex align-items-center">
                <span class="me-2" style="font-size: 2rem;"><i class="ri-timer-line"></i></span>
                <div class="fw-bold fs-16">Limit</div>
            </div>
            <div class="card-body pt-1">
                <p class="text-muted fs-11">50 Users</p>
            </div>
        </div>
    </div>

    <div class="col-xl-3">
        <div class="card custom-card text-start" style="height: 100%;">
            <div class="card-header border-bottom-0 pb-0 d-flex align-items-center">
                <span class="me-2" style="font-size: 2rem;"><i class="ri-calendar-line"></i></span>
                <div class="fw-bold fs-16">Renewal Dates</div>
            </div>
            <div class="card-body pt-1">
                <p class="text-muted fs-11">Next: Jan 15, 2024</p>
            </div>
        </div>
    </div>
</div>

<div class="row" id="convertable-pricing">
    <div class="d-flex justify-content-center mb-4">
        <div class="switcher-box">
            <span class="pricing-time-span">Monthly</span>
            <div class="switcher-pricing text-center">
              <input type="checkbox" class="pricing-toggle">
            </div>
            <span class="pricing-time-span">Annually <span class="badge bg-primary2 ms-1 rounded-pill">20% off</span></span>
        </div>
    </div>
    <div class="tab-content show" id="monthly1">
        <div class="row d-flex align-items-center justify-content-center mb-5">
            <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                <div class="card custom-card pricing-card hover bg-primary">
                    <div class="pricing-table-item-icon">
                        <i class="fe fe-zap me-2"></i> Popular
                    </div>
                    <div class="card-body p-3 border-bottom border-block-end-dashed border-white-1">
                        <h6 class="fw-medium mb-1 text-fixed-white">Premium</h6>
                        <h2 class="mb-3 fw-semibold d-block text-fixed-white">$22.89<span class="fs-12 fw-medium ms-1 op-8"> / Month</span></h2>
                        <span class="op-7 d-block text-fixed-white fs-11">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                    </div>
                    <div class="card-body p-3 text-fixed-white">
                        <ul class="list-unstyled pricing-body">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Unlimited users
                                    </span>
                                    <span class="badge bg-success rounded-pill">Unlimited</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto">
                                        Advanced analytics
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Customizable dashboards
                                    </span>
                                    <span class="bg-white-transparent op-8 p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                        <i class="ri-information-2-line"></i>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Phone support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Dedicated account manager
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        SLA guarantees
                                    </span>
                                    <span class="op-5 fs-12 fw-medium">30 Days</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        On-site training for teams
                                    </span>
                                    <span class="op-5 fs-12 fw-medium">120 Days</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed border-white-1 p-3">
                        <button type="button" class="btn btn-lg btn-white d-grid w-100 btn-wave waves-effect waves-light">
                            <span class="ms-4 me-4">Get Started!</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                <div class="card custom-card pricing-card">
                    <div class="card-body p-3 border-bottom border-block-end-dashed">
                        <h6 class="fw-medium mb-1">Basic</h6>
                        <h2 class="mb-3 fw-semibold d-block">$8.5<span class="fs-12 fw-medium ms-1"> / Month</span></h2>
                        <span class="mb-1 text-muted d-block fs-11">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-unstyled pricing-body">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Up to 10 users
                                    </span>
                                    <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto">
                                        Community access
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Basic reporting
                                    </span>
                                    <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                        <i class="ri-information-2-line"></i>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Email support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Community access
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Access to essential features
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">12 Days</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Mobile app access
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">45 Days</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer p-3">
                        <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                            <span class="ms-4 me-4">Get Started!</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                <div class="card custom-card pricing-card">
                    <div class="card-body p-3 border-bottom border-block-end-dashed">
                        <h6 class="fw-medium mb-1">Standard</h6>
                        <h2 class="mb-3 fw-semibold d-block">$29.99<span class="fs-12 fw-medium ms-1"> / Month</span></h2>
                        <span class="fs-11 text-muted d-block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-unstyled pricing-body">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Up to 50 users
                                    </span>
                                    <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto">
                                        Access to webinars
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Advanced reporting
                                    </span>
                                    <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                        <i class="ri-information-2-line"></i>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Priority email support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        24/7 chat support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        All Standard features
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">52 Days</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Team collaboration tools
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">60 Days</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer p-3">
                        <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                            <span class="ms-4 me-4">Get Started!</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content show" id="yearly1">
        <div class="row d-flex align-items-center justify-content-center mb-5">
            <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                <div class="card custom-card pricing-card hover bg-primary">
                    <div class="pricing-table-item-icon">
                        <i class="fe fe-zap me-2"></i> Popular
                    </div>
                    <div class="card-body p-3 border-bottom border-block-end-dashed border-white-1">
                        <h6 class="fw-medium mb-1 text-fixed-white">Premium</h6>
                        <h2 class="mb-3 fw-semibold d-block text-fixed-white">$1,999.89<span class="fs-12 fw-medium ms-1 op-8"> / Annum</span></h2>
                        <span class="op-7 d-block text-fixed-white fs-11">Unlock powerful tools tailored for seasoned users, designed to take your skills to the next level.</span>
                    </div>
                    <div class="card-body p-3 text-fixed-white">
                        <ul class="list-unstyled pricing-body">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Unlimited users
                                    </span>
                                    <span class="badge bg-success rounded-pill">Unlimited</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto">
                                        Advanced analytics
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Customizable dashboards
                                    </span>
                                    <span class="bg-white-transparent op-8 p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                        <i class="ri-information-2-line"></i>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Phone support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Dedicated account manager
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        SLA guarantees
                                    </span>
                                    <span class="op-5 fs-12 fw-medium">90 Days</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled op-8 fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        On-site training for teams
                                    </span>
                                    <span class="op-5 fs-12 fw-medium">300 Days</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-top border-block-start-dashed border-white-1 p-3">
                        <button type="button" class="btn btn-lg btn-white d-grid w-100 btn-wave waves-effect waves-light">
                            <span class="ms-4 me-4">Get Started!</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                <div class="card custom-card pricing-card">
                    <div class="card-body p-3 border-bottom border-block-end-dashed">
                        <h6 class="fw-medium mb-1">Basic</h6>
                        <h2 class="mb-3 fw-semibold d-block">$899.96<span class="fs-12 fw-medium ms-1"> / Annum</span></h2>
                        <span class="mb-1 text-muted d-block fs-11">Discover the vital features that create an enchanting foundation for a magical beginning.</span>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-unstyled pricing-body">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Up to 10 users
                                    </span>
                                    <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto">
                                        Community access
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Basic reporting
                                    </span>
                                    <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                        <i class="ri-information-2-line"></i>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Email support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Community access
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Access to essential features
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">40 Days</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Mobile app access
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">180 Days</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer p-3">
                        <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                            <span class="ms-4 me-4">Get Started!</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                <div class="card custom-card pricing-card">
                    <div class="card-body p-3 border-bottom border-block-end-dashed">
                        <h6 class="fw-medium mb-1">Standard</h6>
                        <h2 class="mb-3 fw-semibold d-block">$589.99<span class="fs-12 fw-medium ms-1"> / Annum</span></h2>
                        <span class="fs-11 text-muted d-block">Elevate to the highest standards with unparalleled excellence and exclusive top-tier support.</span>
                    </div>
                    <div class="card-body p-3">
                        <ul class="list-unstyled pricing-body">
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Up to 50 users
                                    </span>
                                    <span class="badge bg-primary2-transparent rounded-pill">New</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto">
                                        Access to webinars
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Advanced reporting
                                    </span>
                                    <span class="bg-info-transparent p-1 lh-1 rounded-pill" data-bs-toggle="tooltip" data-bs-title="Provide essential insights and data analysis to help you track the performance.">
                                        <i class="ri-information-2-line"></i>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        Priority email support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                     <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                     </span>
                                    <span class="ms-2 my-auto">
                                        24/7 chat support
                                    </span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        All Standard features
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">250 Days</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <span class="avatar avatar-xs svg-success">
                                       <i class="ti ti-circle-arrow-right-filled text-primary fs-18"></i>
                                    </span>
                                    <span class="ms-2 my-auto flex-fill">
                                        Team collaboration tools
                                    </span>
                                    <span class="text-muted fs-12 fw-medium">320 Days</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer p-3">
                        <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave waves-effect waves-light">
                            <span class="ms-4 me-4">Get Started!</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
  @endsection
  
  @section('scripts')

<!-- Apex Charts JS -->
{{-- <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script> --}}

<!-- Pricing JS -->
<script src="{{ asset('assets/js/pricing.js') }}"></script>

@endsection