@extends('layouts.master')
{{-- <title>Empty | {{ env('APP_NAME', 'XINUI_STARTE_KIT') }}</title> --}}
@section('title', 'Trust | ' . env('APP_NAME', 'Framework'))
@section('content')
<div class="container-fluid">

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

<!-- Apex Charts JS -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Jobs Dashboard -->
<script src="{{ asset('assets/js/jobs-dashboard.js') }}"></script>

@endsection