@extends('layouts.slave')
@section('title', 'Hospital Management | ' . env('APP_NAME', 'Aroko Health'))</title>
@section('content')
    <div class="container-fluid">
        <div class="p-4 mb-4 border row rounded-3" style="border: 1px solid #dcdcdc;">
            <h2 class="mb-4 text-start" style="font-weight: bold; font-size: 2rem;">Current Hospital</h2>

            <div class="col-xl-3">
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

            <div class="col-xl-3">
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

            <div class="col-xl-3">
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

            <div class="col-xl-3">
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


        <!-- Filter row -->
        <div class="row">
            <div class="col-xl-12 mt-xl-3">
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
              <!-- Search and Sort -->
    <form method="GET" class="mb-3">
        <div class="d-flex gap-2">
            <input type="text" name="search" class="form-control w-50" placeholder="Search hospitals..."
                   value="{{ request('search') }}">

            <select name="sort_by" class="form-select">
                <option value="">Sort By</option>
                <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                <option value="location" {{ request('sort_by') == 'location' ? 'selected' : '' }}>Location</option>
            </select>

            <select name="sort_order" class="form-select">
                <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
            </select>

            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>

    <!-- Hospitals Table -->
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Hospital Name & Address</th>
                <th>Available Plans</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hospitals as $hospital)
            <tr>
                <td>
                    <img src="{{ $hospital->image_url ?? asset('images/default-hospital.jpg') }}"
                         class="img-fluid rounded" style="width: 100px; height: 60px;">
                </td>

                <td>
                    <strong>{{ $hospital->name }}</strong><br>
                    <small class="text-muted">{{ $hospital->location }}</small>
                </td>

                <td>
                    @if($hospital->plans->isNotEmpty())
                        @foreach($hospital->plans as $plan)
                            <span class="badge bg-primary">{{ $plan->name }}</span>
                        @endforeach
                    @else
                        <span class="badge bg-danger">No Plans Assigned</span>
                    @endif
                </td>

                <td>
                    <button class="btn btn-success select-hospital"
                            data-hospital-id="{{ $hospital->id }}"
                            data-hospital-name="{{ $hospital->name }}">
                        Select Hospital
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $hospitals->links('pagination::bootstrap-5') }}
    </div>

    </div>
<!-- Confirmation Modal -->
<div class="modal fade" id="confirmSelectionModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Selection</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to select <strong id="selectedHospitalName"></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="confirmSelectionForm" method="POST" action="{{ route('select.hospital') }}">
                    @csrf
                    <input type="hidden" name="hospital_id" id="selectedHospitalId">
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let selectedHospitalId = null;

            // Handle select button click
            document.querySelectorAll(".select-hospital").forEach(button => {
                button.addEventListener("click", function () {
                    selectedHospitalId = this.getAttribute("data-hospital-id");
                    let hospitalName = this.getAttribute("data-hospital-name");

                    document.getElementById("selectedHospitalName").textContent = hospitalName;
                    document.getElementById("selectedHospitalId").value = selectedHospitalId;
                    new bootstrap.Modal(document.getElementById("confirmSelectionModal")).show();
                });
            });
        });
    </script>
    {{-- <script>
        document.getElementById('gridViewBtn').addEventListener('click', function() {
            const view = document.getElementById('hospitalView');
            view.classList.remove('row');
            view.classList.add('d-flex', 'flex-wrap');
        });

        document.getElementById('listViewBtn').addEventListener('click', function() {
            const view = document.getElementById('hospitalView');
            view.classList.remove('d-flex', 'flex-wrap');
            view.classList.add('row');
        });
    </script> --}}

@endsection
