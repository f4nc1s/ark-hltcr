@extends('layouts.slave')
{{-- <title>Empty | {{ env('APP_NAME', 'XINUI_STARTE_KIT') }}</title> --}}
@section('title', 'Trust | ' . env('APP_NAME', 'Framework'))
@section('content')
<div class="container-fluid">

    <div class="flex-wrap gap-2 d-flex align-items-center justify-content-between page-header-breadcrumb">
        <div>
            <h1 class="mb-0 page-title fw-medium fs-18">Reports and Insight</h1>
        </div>
        {{-- <div class="btn-list">
            <button class="btn btn-white btn-wave">
                <i class="align-middle ri-filter-3-line me-1 lh-1"></i> Filter
            </button>
            <button class="btn btn-primary btn-wave me-0">
                <i class="ri-share-forward-line me-1"></i> Share
            </button>
        </div> --}}
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between">
                    <div class="card-title">
                        Summary
                    </div>
                    <div class="flex-wrap gap-2 d-flex">
                        <div>
                            <input class="form-control" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="align-middle ri-arrow-down-s-line ms-1 d-inline-block"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-0 card-body">
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="row" class="text-center">S.No</th>
                                    <th scope="col">Patient ID</th>
                                    <th scope="col">Name</th>
                                    {{-- <th scope="col">Gender</th> --}}
                                    {{-- <th scope="col">Age</th> --}}
                                    <th scope="col">Assgined Doctor</th>
                                    <th scope="col">Disease</th>
                                    {{-- <th scope="col">Contact Number</th> --}}
                                    <th scope="col">Appointmented Date</th>
                                    {{-- <th scope="col">Room No</th> --}}
                                    {{-- <th scope="col">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">01</td>
                                    <td>PAC-9ABC</td>
                                    <td>
                                        <div class="gap-2 d-flex">
                                            {{-- <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/11.jpg" class="" alt="..."></span> --}}
                                            <div>
                                                <span class="mb-0 fw-medium d-flex align-items-center">Jhon Doe</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Dr.M.Smith</td>
                                    <td>
                                    <span class="badge bg-primary-transparent">Hypertension</span>
                                    </td>
                                    <td>
                                        2023-10-20
                                    </td>
                                    {{-- <td>101</td> --}}
                                </tr>
                                <tr>
                                    <td class="text-center">02</td>
                                    <td>PAC-3SFW</td>
                                    <td>
                                        <div class="gap-2 d-flex">
                                            {{-- <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/2.jpg" class="" alt="..."></span> --}}
                                            <div>
                                                <span class="mb-0 fw-medium d-flex align-items-center">Jane smith</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Dr. Johnson</td>
                                    <td>
                                    <span class="badge bg-secondary-transparent">Diabetes</span>
                                    </td>
                                    <td>
                                        2023-09-15
                                    </td>
                                    {{-- <td>102</td> --}}
                                </tr>
                                <tr>
                                    <td class="text-center">03</td>
                                    <td>PAC-6SKF</td>
                                    <td>
                                        <div class="gap-2 d-flex">
                                            {{-- <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/12.jpg" class="" alt="..."></span> --}}
                                            <div>
                                                <span class="mb-0 fw-medium d-flex align-items-center">Robert Jhonson</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Dr.M.Angle</td>
                                    <td>
                                    <span class="badge bg-success-transparent">Asthma</span>
                                    </td>
                                    <td>
                                        2023-11-05
                                    </td>
                                    {{-- <td>103</td> --}}
                                </tr>
                                <tr>
                                    <td class="text-center">04</td>
                                    <td>PAC-3ESD</td>
                                    <td>
                                        <div class="gap-2 d-flex">
                                            {{-- <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/5.jpg" class="" alt="..."></span> --}}
                                            <div>
                                                <span class="mb-0 fw-medium d-flex align-items-center">Emiley Davis</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Dr.S.Mary</td>
                                    <td>
                                    <span class="badge bg-orange-transparent">Allergies</span>
                                    </td>
                                    <td>
                                        2023-08-12
                                    </td>
                                    {{-- <td>104</td> --}}
                                </tr>
                                <tr>
                                    <td class="text-center">05</td>
                                    <td>PAC-3KSE</td>
                                    <td>
                                        <div class="gap-2 d-flex">
                                            {{-- <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/11.jpg" class="" alt="..."></span> --}}
                                            <div>
                                                <span class="mb-0 fw-medium d-flex align-items-center">William Martinez</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Dr.S.Mary</td>
                                    <td>
                                    <span class="badge bg-info-transparent">General Checkup</span>
                                    </td>
                                    <td>
                                        2023-12-08
                                    </td>
                                    {{-- <td>105</td> --}}
                                </tr>
                                <tr>
                                    <td class="text-center">06</td>
                                    <td>PAC-4DFS</td>
                                    <td>
                                        <div class="gap-2 d-flex">
                                            {{-- <span class="avatar avatar-xs avatar-rounded"><img src="../assets/images/faces/4.jpg" class="" alt="..."></span> --}}
                                            <div>
                                                <span class="mb-0 fw-medium d-flex align-items-center">Sarah Wilson</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Dr.T.Laytoya Thoma</td>
                                    <td>
                                    <span class="badge bg-warning-transparent">High Cholesterol</span>
                                    </td>
                                    <td>
                                        2023-07-25
                                    </td>
                                    {{-- <td>106</td> --}}
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer border-top-0">
                    <div class="d-flex align-items-center">
                        <div> Showing 6 Entries <i class="align-middle bi bi-arrow-right ms-2ld"></i> </div>
                        <div class="ms-auto">
                        <nav aria-label="Page navigation" class="pagination-style-4">
                            <ul class="mb-0 pagination">
                                <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                    <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li>
                                </ul>
                            </nav>
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
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="../assets/js/medical-dashboard.js"></script>

@endsection