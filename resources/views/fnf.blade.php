@extends('layouts.slave')
@section('title', 'Beneficiaries | ' . env('APP_NAME', 'Aroko Healthcare'))
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

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <!-- Updated tabs structure -->
                <ul class="mb-3 nav nav-tabs tab-style-6" id="myTab3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="beneficiaries-tab" data-bs-toggle="tab" data-bs-target="#beneficiaries-vertical" type="button" role="tab" aria-controls="beneficiaries-vertical" aria-selected="true">
                            <i class="align-middle ri-gift-line me-1 d-inline-block"></i>Beneficiaries</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="someone-else-tab" data-bs-toggle="tab" data-bs-target="#someone-else-vertical" type="button" role="tab" aria-controls="someone-else-vertical" aria-selected="false" tabindex="-1">
                            <i class="align-middle ri-bill-line me-1 d-inline-block"></i>Someone Else</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="tab-content">
                    <div class="tab-pane text-muted active show" id="beneficiaries-vertical" role="tabpanel" aria-labelledby="beneficiaries-tab">
                        <ul class="mb-0 list-group">
                            <!-- Serialized list of beneficiaries -->
                            <li class="list-group-item">Isha Bella <span class="float-end"><img src="https://php.spruko.com/xintra/xintra/assets/images/faces/1.jpg" alt="img" class="avatar avatar-sm"></span></li>
                            <li class="list-group-item">Elsa Urena <span class="float-end"><img src="https://php.spruko.com/xintra/xintra/assets/images/faces/3.jpg" alt="img" class="avatar avatar-sm"></span></li>
                            <li class="list-group-item">Flora Mary <span class="float-end"><img src="https://php.spruko.com/xintra/xintra/assets/images/faces/6.jpg" alt="img" class="avatar avatar-sm"></span></li>
                            <li class="list-group-item">Gatin Leo <span class="float-end"><img src="https://php.spruko.com/xintra/xintra/assets/images/faces/15.jpg" alt="img" class="avatar avatar-sm"></span></li>
                            <li class="list-group-item">Raja Ryder <span class="float-end"><img src="https://php.spruko.com/xintra/xintra/assets/images/faces/13.jpg" alt="img" class="avatar avatar-sm"></span></li>
                        </ul>
                    </div>
                    <div class="tab-pane text-muted" id="someone-else-vertical" role="tabpanel" aria-labelledby="someone-else-tab">
                        <!-- Empty for now -->
                        <p class="text-center">This tab is currently empty.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<!-- Ensure Bootstrap JS is included -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
