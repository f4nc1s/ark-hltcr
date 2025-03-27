@extends('layouts.slave')
@section('title', 'Subscription | ' . env('APP_NAME', 'Aroko Health'))

@section('content')
<div class="container-fluid">
    <br />
    <br /><br>

    <!-- Subscription Summary -->
    <div class="p-4 mb-4 border row rounded-3" style="border: 1px solid #dcdcdc;">
        <h2 class="mb-4 text-start" style="font-weight: bold; font-size: 2rem;">My Subscription</h2>

        <div class="col-xl-3">
            <div class="card custom-card text-start h-100">
                <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                    <span class="me-2" style="font-size: 2rem;"><i class="ri-shield-user-line"></i></span>
                    <div class="fw-bold fs-16">Aroko Essential Plan</div>
                </div>
                <div class="pt-1 card-body">
                    <p class="text-muted fs-11">Basic Plan</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card custom-card text-start h-100">
                <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                    <span class="me-2" style="font-size: 2rem;"><i class="ri-money-naira-circle-line"></i></span>
                    <div class="fw-bold fs-16">Aroko Essential Cost</div>
                </div>
                <div class="pt-1 card-body">
                    <p class="text-muted fs-11">₦500</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card custom-card text-start h-100">
                <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                    <span class="me-2" style="font-size: 2rem;"><i class="ri-timer-line"></i></span>
                    <div class="fw-bold fs-16">Aroko Essential Limit</div>
                </div>
                <div class="pt-1 card-body">
                    <p class="text-muted fs-11">1 Year</p>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="card custom-card text-start h-100">
                <div class="pb-0 card-header border-bottom-0 d-flex align-items-center">
                    <span class="me-2" style="font-size: 2rem;"><i class="ri-calendar-line"></i></span>
                    <div class="fw-bold fs-16">Renewal Date</div>
                </div>
                <div class="pt-1 card-body">
                    <p class="text-muted fs-11">22-09-2024</p>
                </div>
            </div>
        </div>
    </div>

 <!-- Pricing Plans -->
 <div class="row d-flex align-items-start justify-content-center">

    @php
        $plans = [
            [
                'title' => 'Aroko Essential Plan',
                'price' => '₦12,000 / Year',
                'is_current' => true,
                'btn_class' => 'btn-light',
                'card_class' => 'border border-primary',
                'features' => [
                    'Specialist consultation',
                    'Basic telemedicine',
                    'Emergency room visits',
                    'Basic diagnostic imaging',
                    'Blood tests',
                    'Hospital admission',
                    'Annual wellness checks'
                ]
            ],
            [
                'title' => 'Aroko Advantage Plan',
                'price' => '₦24,000 / Year',
                'is_current' => false,
                'btn_class' => 'btn-purple',
                'card_class' => 'border border-primary',
                'features' => [
                    'All Essential Plan features',
                    'Enhanced telemedicine',
                    'Advanced imaging & diagnostics',
                    'Private/semi-private rooms',
                    'Basic surgical procedures',
                    'Cancer care'
                ]
            ],
            [
                'title' => 'Aroko Premier Plan',
                'price' => '₦48,000 / Year',
                'is_current' => false,
                'btn_class' => 'btn-purple',
                'card_class' => 'border border-primary',
                'features' => [
                    'All Advantage Plan features',
                    'Renal & critical care',
                    'Annual executive checkups',
                    'Dedicated health advisor',
                    'Medical evacuation cover'
                ]
            ],
        ];
    @endphp

    @foreach($plans as $index => $plan)
    <div class="col-lg-6 col-xl-3 col-md-10 col-sm-12 mb-4">
        <div class="card custom-card pricing-card h-100 {{ $plan['card_class'] }}">
            <div class="p-4 card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0 fw-semibold">{{ $plan['title'] }}</h6>
                    <span class="fs-3 fw-bold text-muted">{{ $index + 1 }}</span>
                </div>
                <h2 class="mb-2 fw-semibold text-dark">{{ $plan['price'] }}</h2>
                <p class="text-muted fs-11 mb-3">Inpatient, Outpatient, Pharmacy</p>
                <button type="button" data-bs-toggle="modal" data-bs-target="#upgradePaymentModal"
                    class="btn {{ $plan['btn_class'] }} d-grid w-100 mb-4 fw-medium"
                    {{ $plan['is_current'] ? 'disabled' : '' }}>
                    {{ $plan['is_current'] ? 'Current Plan' : 'Upgrade Plan' }}
                </button>
                <ul class="list-unstyled pricing-body">
                    @foreach($plan['features'] as $feature)
                    <li class="mb-2 d-flex align-items-center">
                        <i class="ri-check-line text-primary me-2 fs-16"></i>
                        <span class="fs-13 text-muted">{{ $feature }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Coming Soon Plan -->
    <div class="col-lg-6 col-xl-3 col-md-10 col-sm-12 mb-4">
        <div class="card custom-card pricing-card h-100 bg-light text-muted border border-1">
            <div class="p-4 card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="mb-0 fw-semibold">Aroko Global Plan</h6>
                    <span class="fs-3
fw-bold text-muted">4</span>
                </div>
                <h2 class="mb-2 fw-semibold text-muted">Coming Soon</h2>
                <p class="fs-11 mb-3">Worldwide inpatient & specialist access</p>
                <button type="button" class="btn btn-secondary d-grid w-100 mb-4 fw-medium" disabled>Coming Soon</button>
                <ul class="list-unstyled pricing-body">
                    <li class="mb-2 d-flex align-items-center">
                        <i class="ri-check-line me-2 fs-16"></i>
                        <span class="fs-13">International medical access</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="ri-check-line me-2 fs-16"></i>
                        <span class="fs-13">Priority overseas referral</span>
                    </li>
                    <li class="mb-2 d-flex align-items-center">
                        <i class="ri-check-line me-2 fs-16"></i>
                        <span class="fs-13">Advanced global insurance cover</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Payment Upgrade Modal -->
<div class="modal fade" id="upgradePaymentModal" tabindex="-1" aria-labelledby="upgradePaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-body p-0">
                <div class="row g-0">

                    <!-- Left: Payment Form -->
                    <div class="col-md-6 p-5">
                        <div class="mb-4">
                            <img src="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}"" alt="Aroko Logo" class="img-fluid" style="height: 28px;">
                        </div>

                        <h5 class="fw-bold mb-4">Payment</h5>

                        <form>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" name="payment_method" id="cardOption" checked>
                                <label class="form-check-label" for="cardOption">
                                    Card
                                </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Card Number</label>
                                <input type="text" class="form-control" placeholder="Enter Card Number">
                            </div>

                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label">Expiry Date</label>
                                    <input type="text" class="form-control" placeholder="MM/YY">
                                </div>
                                <div class="col-6">
                                    <label class="form-label">CVC</label>
                                    <input type="text" class="form-control" placeholder="***">
                                </div>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="saveCardCheck">
                                <label class="form-check-label" for="saveCardCheck">
                                    Save card for later purchase
                                </label>
                            </div>

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-pink text-white fw-semibold">
                                    Subscribe with ₦12,300.00 <i class="ri-arrow-right-line ms-1"></i>
                                </button>
                                <button type="button" class="btn btn-light text-dark fw-semibold" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                            </div>

                            <p class="text-muted mt-4 small">
                                Your personal data will be used to process your order, support your experience throughout this website,
                                and for other purposes described in our privacy policy.
                            </p>
                        </form>
                    </div>

                    <!-- Right: Plan Summary -->
                    <div class="col-md-6 bg-light p-5 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold">Basic Plan</h6>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" alt="Aroko Logo" style="height: 30px;" class="me-2">
                                <span class="fw-semibold">Aroko Essential</span>
                            </div>

                            <div class="border rounded-3 p-3 mb-3">
                                <div class="d-flex justify-content-between
align-items-center">
                                    <span><span class="badge rounded-circle bg-primary text-white me-2">1</span> Yearly</span>
                                    <span class="fw-semibold">₦12,000.00</span>
                                </div>
                            </div>

                            <ul class="list-unstyled small text-dark mb-4">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Subtotal</span><span>₦12,000.00</span>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>NHIS Fee</span><span>₦300.00</span>
                                </li>
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Payment Method</span><span class="fw-medium">Master Card</span>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex justify-content-between align-items-center fw-bold">
                            <span>Total</span>
                            <span>₦12,300/<span class="fw-normal"> Year</span></span>
                        </div>

                        <div class="mt-auto text-end pt-5">
                            <img src="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" alt="Aroko Logo Design" style="height: 120px;" class="opacity-10">
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

@section('scripts')

@endsection
