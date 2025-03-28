@extends('layouts.slave')
@section('title', 'Gym and SPA | ' . env('APP_NAME', 'Aroko Health'))

@section('content')
    <div class="container-fluid">
        <!-- Pricing Section -->
        <div class="p-4 mb-4 border row rounded-3" style="border: 1px solid #dcdcdc;">
            <h2 class="mb-4 text-start" style="font-weight: bold; font-size: 2rem;">Current Gym and SPA</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card custom-card text-start" style="height: 100%;">
                        <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                            <span class="me-2" style="font-size: 2rem;"><i class="ri-file-text-line"></i></span>
                            <div class="fw-bold fs-16">Plan</div>
                        </div>
                        <div class="pt-1 card-body">
                            <p class="text-muted fs-11">Basic Plan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom-card text-start" style="height: 100%;">
                        <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                            <span class="me-2" style="font-size: 2rem;"><i class="ri-money-dollar-circle-line"></i></span>
                            <div class="fw-bold fs-16">Cost</div>
                        </div>
                        <div class="pt-1 card-body">
                            <p class="text-muted fs-11">$29.99/month</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom-card text-start" style="height: 100%;">
                        <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                            <span class="me-2" style="font-size: 2rem;"><i class="ri-timer-line"></i></span>
                            <div class="fw-bold fs-16">Limit</div>
                        </div>
                        <div class="pt-1 card-body">
                            <p class="text-muted fs-11">50 Users</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card custom-card text-start" style="height: 100%;">
                        <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                            <span class="me-2" style="font-size: 2rem;"><i class="ri-calendar-line"></i></span>
                            <div class="fw-bold fs-16">Renewal Dates</div>
                        </div>
                        <div class="pt-1 card-body">
                            <p class="text-muted fs-11">Next: Jan 15, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search and Filter Section -->
<div class="container py-4">
    <div class="mb-3 row">
        <div class="col-md-4">
            <select class="form-select" id="locationFilter">
                <option value="">Location</option>
                <option value="Lagos">Lagos</option>
                <option value="Port Harcourt">Port Harcourt</option>
                <option value="Abuja">Abuja</option>
            </select>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" id="searchInput" placeholder="Search gym and spa centers...">
        </div>
        <!-- Filter Options Dropdown -->
        <div class="col-md-2">
            <div class="dropdown">
                {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Filter Options
                </button> --}}
                <input type="text" class="form-control dropdown-toggle" id="filterDropdown" placeholder="filter" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="p-3 dropdown-menu" aria-labelledby="filterDropdown">
                    <!-- Service Type Checkboxes -->
                    <div class="mb-3">
                        <h6>Service:</h6>
                        <div>
                            <input type="checkbox" id="serviceGym" value="Gym">
                            <label for="serviceGym"> Gym</label>
                        </div>
                        <div>
                            <input type="checkbox" id="serviceSpa" value="Spa">
                            <label for="serviceSpa"> Spa</label>
                        </div>
                    </div>

                    <!-- Plan Type Dropdown -->
                    <div class="mb-3">
                        <label for="planTypeFilter">Plan Type:</label>
                        <select class="form-select" id="planTypeFilter">
                            <option value="">Select Plan</option>
                            <option value="Aroko Essential">Aroko Essential</option>
                            <option value="Premium">Premium</option>
                            <option value="Family">Family</option>
                            <option value="Momcare">Momcare</option>
                        </select>
                    </div>

                    <!-- Distance Slider -->
                    <div class="mb-3">
                        <label for="distanceSlider">Distance: <span id="distanceValue">0</span> KM</label>
                        <input type="range" class="form-range" id="distanceSlider" min="0" max="30" value="0" oninput="document.getElementById('distanceValue').innerText = this.value;">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-2 d-flex justify-content">
            <button class="btn btn-outline-secondary me-2" id="listViewBtn" style="margin-top: 13px;">
                <i class="ri-list-view"></i> <!-- Font Awesome icon for list view -->
            </button>
            <button class="btn btn-outline-secondary" id="gridViewBtn" style="margin-top: 13px;">
                <i class="ri-gallery-view-2"></i> <!-- Font Awesome icon for grid view -->
            </button>
        </div>
    </div>
</div>

            <!-- Gym List -->
            <div id="gymList" class="list-view">
                <div class="mb-3 card custom-card" data-location="Lagos">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <img src="https://images.unsplash.com/photo-1516585714082-fe3beef4567d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8MTYzNjU2NTI2Nw&ixlib=rb-1.2.1&q=80&w=80" alt="Gym Court" style="width: 20%; height: auto; border-radius: 10px;">
                        <div>
                            <h5 class="mb-1">Gym Court</h5>
                            <p class="mb-0 text-muted">Ikoyi, Lagos State</p>
                        </div>
                        <span class="badge bg-primary">Aroko Essential</span>
                        <a href="#" class="text-decoration-none">Learn More →</a>
                        <button class="btn btn-select" style="background-color: #ff4f9a; color: white; border-radius: 20px;">Select</button>
                    </div>
                </div>
                <div class="mb-3 card custom-card" data-location="Port Harcourt">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <img src="https://images.unsplash.com/photo-1579896964237-b9c70aa9deea?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8MTYzNjU2NTI3OA&ixlib=rb-1.2.1&q=80&w=80" alt="Gym House Ikoyi" style="width: 20%; height: auto; border-radius: 10px;">
                        <div>
                            <h5 class="mb-1">Gym House Ikoyi</h5>
                            <p class="mb-0 text-muted">Ikoyi, Lagos State</p>
                        </div>
                        <span class="badge bg-primary">Aroko Essential</span>
                        <a href="#" class="text-decoration-none">Learn More →</a>
                        <button class="btn btn-select" style="background-color: #ff4f9a; color: white; border-radius: 20px;">Select</button>
                    </div>
                </div>
                <div class="mb-3 card custom-card" data-location="Port Harcourt">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <img src="https://images.unsplash.com/photo-1579896964237-b9c70aa9deea?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8MTYzNjU2NTI3OA&ixlib=rb-1.2.1&q=80&w=80" alt="Gym House Ikoyi" style="width: 20%; height: auto; border-radius: 10px;">
                        <div>
                            <h5 class="mb-1">Gym House Ikoyi</h5>
                            <p class="mb-0 text-muted">Ikoyi, Lagos State</p>
                        </div>
                        <span class="badge bg-primary">Aroko Essential</span>
                        <a href="#" class="text-decoration-none">Learn More →</a>
                        <button class="btn btn-select" style="background-color: #ff4f9a; color: white; border-radius: 20px;">Select</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Toggle View Button Script -->
        <script>
            document.getElementById('listViewBtn').addEventListener('click', function() {
                const view = document.getElementById('gymList');
                view.classList.remove('grid-view');
                view.classList.add('list-view');
            });

            document.getElementById('gridViewBtn').addEventListener('click', function() {
                const view = document.getElementById('gymList');
                view.classList.remove('list-view');
                view.classList.add('grid-view');
            });

            // Search Input Script
            $(document).ready(function () {
                $('#searchInput').on('keyup', function () {
                    let value = $(this).val().toLowerCase();
                    $('#gymList .card').filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                    });
                });

                // Location Filter Script
                $('#locationFilter').on('change', function () {
                    let location = $(this).val();
                    if (location) {
                        $('#gymList .card').hide();
                        $('#gymList .card[data-location="' + location + '"]').show();
                    } else {
                        $('#gymList .card').show();
                    }
                });
            });
        </script>

        <style>
            .custom-card {
                border-radius: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .btn-select {
                background-color: #ff4f9a;
                color: white;
                border-radius: 20px;
            }

            .list-view .card {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .list-view img {
                width: 20%;
                height: auto;
                border-radius: 10px;
                margin-right: 15px;
            }

            .grid-view .card {
                text-align: center;
            }

            .grid-view img {
                width: 100%;
                height: auto;
                border-radius: 10px;
            }

            /* Dropdown Filter Option */
            .dropdown-menu {
                min-width: 300px;
                /* Set a minimum width for the dropdown */
            }

            .dropdown-toggle {
                width: 100%;
                /* Make dropdown button full width */
            }
        </style>
@endsection