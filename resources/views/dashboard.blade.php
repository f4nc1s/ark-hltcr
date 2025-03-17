@extends('layouts.slave')
@section('title', 'Dashboard | ' . env('APP_NAME', 'Aroko Health'))</title>
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12 mt-xl-3">
                <div class="d-flex align-items-center justify-content-between my-4 page-header-breadcrumb flex-wrap gap-2">
                    <div>
                        <p id="greeting" class="fw-medium fs-20 mb-0"></p>
                        <p class="fs-13 text-muted mb-0">Let's check how you're feeling today!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Section -->
        <div class="row d-flex align-items-stretch">
            <!-- Left Column -->
            <div class="col-xl-9 d-flex position-relative">
                <div class="card custom-card nft-custom-card bg-primary-gradient border-0 w-100">
                    <div class="card-body d-flex flex-column justify-content-between p-3">
                        <div class="row">
                            <!-- Logo and Brand -->
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/ark-imgs/aroko-logo.png') }}"
                                    alt="Aroko Health Logo" class="w-25 h-auto">
                            </div>
                            <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-6">
                                <h2 class="text-fixed-white mb-3 lh-base">
                                    Have you considered having the best treatment at the lowest possible cost?
                                </h2>
                                <button class="btn btn-secondary btn-lg btn-wave waves-effect waves-light">
                                    Upgrade Plan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom-Right Image -->
                <img src="{{ asset('assets/images/ark-imgs/virus-immune.png') }}"
                    alt="Virus Immune"
                    class="virus-image">
            </div>

            <!-- Right Column (HMO Status Box) -->
            <div class="col-xl-3 d-flex">
                <div class="card custom-card text-center w-100"
                    style="background-color: #fff0f8; border: 1px solid #ff9ecf; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                    <div class="card-body p-3 d-flex flex-column justify-content-center">

                        <!-- HMO Status Section -->
                        <div class="hmo-status mb-2">
                            <span class="fw-bold" style="color: #5c5f66; font-size: 1.4rem;">HMO Status:</span><br>
                            <span class="{{ isset($latestPlan) && $latestPlan->status === 'active' ? 'hmo-active' : 'hmo-inactive' }}"
                                style="font-size: 1.4rem; font-weight: bold;
                                       color: {{ isset($latestPlan) && $latestPlan->status === 'active' ? '#28a745' : '#ff4685' }};">
                              {{ isset($latestPlan) && $latestPlan->status === 'active' ? 'Active' : 'Inactive' }}
                          </span>
                        </div>
                        <!-- Icon based on HMO Status -->
                        <div class="icon-status">
                            <div style="width: 50px; height: 50px;
                                        background-color: {{ isset($latestPlan) && $latestPlan->status === 'active' ? '#d4edda' : '#ffd6e7' }};
                                        border-radius: 50%; display: flex;
                                        align-items: center; justify-content: center; margin: 0 auto;">
                                <i class="{{ isset($latestPlan) && $latestPlan->status === 'active' ? 'ri-check-line' : 'ri-close-line' }}"
                                style="color: {{ isset($latestPlan) && $latestPlan->status === 'active' ? '#28a745' : '#ff4685' }};
                                        font-size: 1.5rem;">
                                </i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- CSS -->
        <style>
            .virus-image {
                position: absolute;
                bottom: 25;
                right: 0;
                max-width: 30%;
                height: auto;
                pointer-events: none;
            }
        </style>



        <!-- Services -->
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card custom-card">
                    <div class="card-body p-4">
                            <!-- Icon -->
                            <div class="mb-2">
                                <div class="rounded-circle bg-light p-3 d-inline-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_641_4542)">
                                            <path d="M11.0589 5.53314C10.7236 5.61927 10.4976 5.80341 10.2872 6.01683C9.96165 6.34836 9.62571 6.67201 9.29409 6.99852C9.25973 7.0341 9.22394 7.06503 9.18308 7.10522C8.85716 6.78337 8.46278 6.70244 8.02634 6.70698C7.14408 6.71604 6.26223 6.70834 5.38001 6.70243C4.92374 6.70121 4.53705 6.85282 4.21663 7.17331C4.06871 7.32128 3.91936 7.46746 3.75952 7.62502C3.53413 7.20216 3.44547 6.77146 3.5152 6.32085C3.62751 5.5911 3.95384 4.95001 4.36482 4.34874C4.72402 3.82258 5.15375 3.35616 5.60292 2.90621C5.65885 2.84709 5.69528 2.77256 5.70737 2.6925C5.75188 2.36843 5.99523 2.13655 6.32562 2.13564C7.03666 2.13373 7.74769 2.13563 8.4587 2.14132C8.80099 2.14224 9.04812 2.38898 9.07464 2.72643C9.08316 2.79031 9.11265 2.84965 9.15859 2.89535C9.70897 3.44319 10.2236 4.01982 10.616 4.69136C10.7726 4.9589 10.906 5.24065 11.0589 5.53314Z" fill="#112D44"/>
                                            <path d="M7.33353 10.0308C7.35152 8.69347 8.49745 7.59557 9.85538 7.61452C11.1971 7.63272 12.3 8.73447 12.2835 10.0401C12.2661 11.4463 11.1613 12.5293 9.76697 12.5078C8.42311 12.4871 7.31556 11.3596 7.33353 10.0308ZM9.53734 10.2931C9.41432 10.1673 9.30102 10.0471 9.18338 9.93198C9.06575 9.81683 8.94348 9.81579 8.85089 9.91148C8.7583 10.0072 8.76737 10.1213 8.87492 10.2307C9.0344 10.3933 9.19592 10.554 9.35948 10.7128C9.48612 10.8362 9.5954 10.8368 9.72233 10.7137C9.91543 10.5277 10.1053 10.3382 10.2962 10.1504C10.4525 9.9967 10.6108 9.84519 10.7635 9.68797C10.8597 9.58872 10.8564 9.46567 10.7661 9.37983C10.6823 9.29972 10.5604 9.30154 10.4631 9.38616C10.427 9.41852 10.3908 9.45444 10.3572 9.48859L9.53734 10.2931Z" fill="#112D44"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_641_4542">
                                                <rect width="11.9682" height="11.9682" fill="white" transform="translate(1.0127 0.519135) rotate(0.152608)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <!-- plan Name -->
                            <div class="mb-1">
                                <h6 class="mb-0">{{ $plan ? $plan->name : 'No active plan' }}</h6>
                            </div>
                            <!-- View All -->
                            <div>
                                <a href="#" class="text-decoration-none text-primary d-flex align-items-center">
                                    View all <i class="ms-1 bi bi-arrow-right"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card custom-card">
                    <div class="card-body p-4">
                            <!-- Icon -->
                            <div class="mb-2">
                                <div class="rounded-circle bg-light p-3 d-inline-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M11.06 5.53c-.34.09-.56.27-.78.49-.33.33-.67.66-1 .99a1.44 1.44 0 00-.11.1c-.33-.32-.73-.4-1.16-.4-1.19.01-2.38.01-3.57 0-.46 0-.85.15-1.17.47-.15.15-.3.3-.44.46-.22-.42-.31-.84-.24-1.29.11-.73.44-1.37.85-1.97.36-.52.79-.97 1.25-1.42.06-.06.1-.13.12-.22.05-.32.3-.55.63-.55.71-.002 1.42 0 2.13.006.34.002.58.25.61.59.01.07.04.13.1.19.55.55 1.07 1.12 1.47 1.78.16.27.3.55.46.86z" fill="#112D44"/>
                                            <path d="M7.33 10.03c.02-1.34 1.17-2.44 2.52-2.42 1.34.02 2.45 1.13 2.43 2.43-.02 1.41-1.12 2.49-2.52 2.47-1.34-.02-2.44-1.15-2.43-2.48zm2.2.26c-.12-.13-.24-.26-.35-.39-.12-.11-.24-.11-.33-.02-.1.1-.09.22.02.33.16.16.31.32.47.47.13.13.24.13.38 0 .19-.18.37-.36.55-.54.16-.16.32-.33.48-.5.1-.1.1-.24 0-.34-.09-.09-.21-.09-.3 0a15.6 15.6 0 01-.63.63z" fill="#112D44"/>
                                            <path d="M7.03 10.9c-.35.05-.68.1-1.01.14-.04.01-.1-.03-.12-.06a2.42 2.42 0 00-.56-.63c-.7-.7-1.4-1.4-2.1-2.1-.04-.04-.08-.08-.12-.13.04-.04.07-.07.1-.1.3-.3.6-.6.9-.9.13-.13.28-.23.46-.3.17-.07.36-.1.55-.1.91.02 1.82.01 2.73.02.22 0 .43.06.61.21-.2.11-.4.2-.6.33-.31.2-.57.45-.77.75a.51.51 0 01-.2.1c-.22 0-.44.01-.67.01-.18 0-.28.08-.28.23s.1.23.25.23c.2 0 .4 0 .6.002-.24.61-.27 1.29-.08 1.92z" fill="#112D44"/>
                                            <path d="M5.59 11.35a.9.9 0 01-.15.27c-.25.26-.5.52-.75.78-.18.18-.41.18-.6 0a45.8 45.8 0 01-2.89-2.89c-.18-.18-.17-.41 0-.6.25-.25.5-.5.75-.74.18-.18.42-.18.6 0 .75.75 1.5 1.5 2.25 2.24.1.1.18.23.2.38z" fill="#112D44"/>
                                            <path d="M8.98 1.85a3.6 3.6 0 01-.66-.1c-.3-.1-.64-.07-.94-.06-.63.002-1.25-.007-1.88.006a3.1 3.1 0 01-.31.03c-.01-.02-.02-.04-.03-.06-.07-.3-.15-.6-.22-.89-.04-.18.05-.29.22-.3.31-.002.6.09.88.23.3.16.63.2.96.14.15-.03.3-.1.45-.14.23-.08.46-.15.69-.22.08-.02.16-.01.24 0 .17.02.25.1.22.26a8.5 8.5 0 01-.25.97z" fill="#112D44"/>
                                            <path d="M11.69 7.87c-.58-.46-1.22-.69-1.94-.68.01-.02.03-.04.05-.06.31-.3.62-.6.94-.9.15-.14.33-.23.53-.25.2-.02.41.03.59.14.35.2.55.62.46.99a.9.9 0 01-.16.3c-.12.16-.26.3-.42.46z" fill="#112D44"/>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <!-- Hospital Name -->
                            <div class="mb-1">
                                <h6 class="mb-0">{{ $selection && $selection->hospital ? $selection->hospital->name : 'No hospital selected' }}</h6>
                            </div>
                            <!-- View All -->
                            <div>
                                <a href="#" class="text-decoration-none text-primary d-flex align-items-center">
                                    View all <i class="ms-1 bi bi-arrow-right"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card custom-card">
                    <div class="card-body p-4">
                            <!-- Icon -->
                            <div class="mb-2">
                                <div class="rounded-circle bg-light p-3 d-inline-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M11.06 5.53c-.34.09-.56.27-.78.49-.33.33-.67.66-1 .99a1.44 1.44 0 00-.11.1c-.33-.32-.73-.4-1.16-.4-1.19.01-2.38.01-3.57 0-.46 0-.85.15-1.17.47-.15.15-.3.3-.44.46-.22-.42-.31-.84-.24-1.29.11-.73.44-1.37.85-1.97.36-.52.79-.97 1.25-1.42.06-.06.1-.13.12-.22.05-.32.3-.55.63-.55.71-.002 1.42 0 2.13.006.34.002.58.25.61.59.01.07.04.13.1.19.55.55 1.07 1.12 1.47 1.78.16.27.3.55.46.86z" fill="#112D44"/>
                                            <path d="M7.33 10.03c.02-1.34 1.17-2.44 2.52-2.42 1.34.02 2.45 1.13 2.43 2.43-.02 1.41-1.12 2.49-2.52 2.47-1.34-.02-2.44-1.15-2.43-2.48zm2.2.26c-.12-.13-.24-.26-.35-.39-.12-.11-.24-.11-.33-.02-.1.1-.09.22.02.33.16.16.31.32.47.47.13.13.24.13.38 0 .19-.18.37-.36.55-.54.16-.16.32-.33.48-.5.1-.1.1-.24 0-.34-.09-.09-.21-.09-.3 0a15.6 15.6 0 01-.63.63z" fill="#112D44"/>
                                            <path d="M7.03 10.9c-.35.05-.68.1-1.01.14-.04.01-.1-.03-.12-.06a2.42 2.42 0 00-.56-.63c-.7-.7-1.4-1.4-2.1-2.1-.04-.04-.08-.08-.12-.13.04-.04.07-.07.1-.1.3-.3.6-.6.9-.9.13-.13.28-.23.46-.3.17-.07.36-.1.55-.1.91.02 1.82.01 2.73.02.22 0 .43.06.61.21-.2.11-.4.2-.6.33-.31.2-.57.45-.77.75a.51.51 0 01-.2.1c-.22 0-.44.01-.67.01-.18 0-.28.08-.28.23s.1.23.25.23c.2 0 .4 0 .6.002-.24.61-.27 1.29-.08 1.92z" fill="#112D44"/>
                                            <path d="M5.59 11.35a.9.9 0 01-.15.27c-.25.26-.5.52-.75.78-.18.18-.41.18-.6 0a45.8 45.8 0 01-2.89-2.89c-.18-.18-.17-.41 0-.6.25-.25.5-.5.75-.74.18-.18.42-.18.6 0 .75.75 1.5 1.5 2.25 2.24.1.1.18.23.2.38z" fill="#112D44"/>
                                            <path d="M8.98 1.85a3.6 3.6 0 01-.66-.1c-.3-.1-.64-.07-.94-.06-.63.002-1.25-.007-1.88.006a3.1 3.1 0 01-.31.03c-.01-.02-.02-.04-.03-.06-.07-.3-.15-.6-.22-.89-.04-.18.05-.29.22-.3.31-.002.6.09.88.23.3.16.63.2.96.14.15-.03.3-.1.45-.14.23-.08.46-.15.69-.22.08-.02.16-.01.24 0 .17.02.25.1.22.26a8.5 8.5 0 01-.25.97z" fill="#112D44"/>
                                            <path d="M11.69 7.87c-.58-.46-1.22-.69-1.94-.68.01-.02.03-.04.05-.06.31-.3.62-.6.94-.9.15-.14.33-.23.53-.25.2-.02.41.03.59.14.35.2.55.62.46.99a.9.9 0 01-.16.3c-.12.16-.26.3-.42.46z" fill="#112D44"/>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <!-- gym Name -->
                            <div class="mb-1">
                                <h6 class="mb-0">{{ $selection && $selection->gym ? $selection->gym->name : 'No gym selected' }}</h6>
                            </div>
                            <!-- View All -->
                            <div>
                                <a href="#" class="text-decoration-none text-primary d-flex align-items-center">
                                    View all <i class="ms-1 bi bi-arrow-right"></i>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="card custom-card">
                    <div class="card-body p-4">
                            <!-- Icon -->
                            <div class="mb-2">
                                <div class="rounded-circle bg-light p-3 d-inline-flex align-items-center justify-content-center">
                                    <svg width="24" height="24" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M11.06 5.53c-.34.09-.56.27-.78.49-.33.33-.67.66-1 .99a1.44 1.44 0 00-.11.1c-.33-.32-.73-.4-1.16-.4-1.19.01-2.38.01-3.57 0-.46 0-.85.15-1.17.47-.15.15-.3.3-.44.46-.22-.42-.31-.84-.24-1.29.11-.73.44-1.37.85-1.97.36-.52.79-.97 1.25-1.42.06-.06.1-.13.12-.22.05-.32.3-.55.63-.55.71-.002 1.42 0 2.13.006.34.002.58.25.61.59.01.07.04.13.1.19.55.55 1.07 1.12 1.47 1.78.16.27.3.55.46.86z" fill="#112D44"/>
                                            <path d="M7.33 10.03c.02-1.34 1.17-2.44 2.52-2.42 1.34.02 2.45 1.13 2.43 2.43-.02 1.41-1.12 2.49-2.52 2.47-1.34-.02-2.44-1.15-2.43-2.48zm2.2.26c-.12-.13-.24-.26-.35-.39-.12-.11-.24-.11-.33-.02-.1.1-.09.22.02.33.16.16.31.32.47.47.13.13.24.13.38 0 .19-.18.37-.36.55-.54.16-.16.32-.33.48-.5.1-.1.1-.24 0-.34-.09-.09-.21-.09-.3 0a15.6 15.6 0 01-.63.63z" fill="#112D44"/>
                                            <path d="M7.03 10.9c-.35.05-.68.1-1.01.14-.04.01-.1-.03-.12-.06a2.42 2.42 0 00-.56-.63c-.7-.7-1.4-1.4-2.1-2.1-.04-.04-.08-.08-.12-.13.04-.04.07-.07.1-.1.3-.3.6-.6.9-.9.13-.13.28-.23.46-.3.17-.07.36-.1.55-.1.91.02 1.82.01 2.73.02.22 0 .43.06.61.21-.2.11-.4.2-.6.33-.31.2-.57.45-.77.75a.51.51 0 01-.2.1c-.22 0-.44.01-.67.01-.18 0-.28.08-.28.23s.1.23.25.23c.2 0 .4 0 .6.002-.24.61-.27 1.29-.08 1.92z" fill="#112D44"/>
                                            <path d="M5.59 11.35a.9.9 0 01-.15.27c-.25.26-.5.52-.75.78-.18.18-.41.18-.6 0a45.8 45.8 0 01-2.89-2.89c-.18-.18-.17-.41 0-.6.25-.25.5-.5.75-.74.18-.18.42-.18.6 0 .75.75 1.5 1.5 2.25 2.24.1.1.18.23.2.38z" fill="#112D44"/>
                                            <path d="M8.98 1.85a3.6 3.6 0 01-.66-.1c-.3-.1-.64-.07-.94-.06-.63.002-1.25-.007-1.88.006a3.1 3.1 0 01-.31.03c-.01-.02-.02-.04-.03-.06-.07-.3-.15-.6-.22-.89-.04-.18.05-.29.22-.3.31-.002.6.09.88.23.3.16.63.2.96.14.15-.03.3-.1.45-.14.23-.08.46-.15.69-.22.08-.02.16-.01.24 0 .17.02.25.1.22.26a8.5 8.5 0 01-.25.97z" fill="#112D44"/>
                                            <path d="M11.69 7.87c-.58-.46-1.22-.69-1.94-.68.01-.02.03-.04.05-.06.31-.3.62-.6.94-.9.15-.14.33-.23.53-.25.2-.02.41.03.59.14.35.2.55.62.46.99a.9.9 0 01-.16.3c-.12.16-.26.3-.42.46z" fill="#112D44"/>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <!-- benficiary Name -->
                            <div class="mb-1">
                                <h6 class="mb-0">Beneficiary</h6>
                            </div>
                            <!-- View All -->
                            <div>
                                <a href="#" class="text-decoration-none text-primary d-flex align-items-center">
                                    {{ sprintf('%02d', $beneficiaryCount) }}
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- HMO History -->

        <div class="row mb-3">
            <div class="col-md-3">
                <h4>HMO History</h4>
            </div>
            <div class="col-md-6">
                <input type="text" id="search" class="form-control" placeholder="Search by Plan, Status...">
            </div>
            <div class="col-md-3 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center w-100">
                    <span class="me-2">Sort:</span>
                    <select id="filter" class="form-control me-3 flex-grow-1">
                        <option value="all">All</option>
                        <option value="active">Active</option>
                        <option value="expired">Expired</option>
                        <option value="deactivated">Deactivated</option>
                    </select>
                </div>
                <a href="#" class="text-primary text-decoration-none ms-2">View All <i class="ms-2 bi bi-arrow-right"></i></a>
            </div>
        </div>
        <div class="mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Trans ID</th>
                        <th>Plan</th>
                        <th>Plan Status</th>
                        <th>Amount</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </tr>
                </thead>
                <tbody id="userPlanTable"></tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Sales Dashboard JS -->
    {{-- <script src="{{ asset('assets/js/sales-dashboard.js') }}"></script> --}}
    <script>
        function getGreeting(userName) {
            const currentHour = new Date().getHours();
            let timeOfDay;

            // Determine the time of day
            if (currentHour < 12) {
                timeOfDay = 'Morning'; // 12 AM to 11:59 AM
            } else if (currentHour < 18) {
                timeOfDay = 'Afternoon'; // 12 PM to 5:59 PM
            } else {
                timeOfDay = 'Evening'; // 6 PM to 11:59 PM
            }

            // Set greeting message
            document.getElementById('greeting').innerText = `Good ${timeOfDay}, ${userName}`;
        }

        function setCurrentDay() {
            const options = {
                weekday: 'long'
            };
            const currentDay = new Date().toLocaleDateString('en-US', options);
            document.getElementById('current-day').innerText = currentDay;
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Replace 'JO' with the variable that holds the user's name
            const userName = 'JO'; // This can be dynamically set based on your application logic
            getGreeting(userName);
            setCurrentDay();
        });
    </script>

@endsection
