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
    @if(session('success'))
    <div class="alert alert-success">
        <strong>{{ session('success') }}</strong>
    </div>
    @endif
 <!-- Pricing Plans -->
 <div class="row d-flex align-items-start justify-content-center">
    <div class="row d-flex align-items-start justify-content-center">
        @foreach($plansWithFeatures as $index => $plan)
            <div class="col-lg-6 col-xl-4 col-md-10 col-sm-12 mb-4">
                <div class="card custom-card pricing-card h-100 {{ $plan->card_class ?? '' }}">
                    <div class="p-4 card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0 fw-semibold">{{ $plan->name }}</h6>
                            <span class="fs-3 fw-bold text-muted">{{ $index + 1 }}</span>
                        </div>
                        <h2 class="mb-2 fw-semibold text-dark">₦{{ number_format($plan->price, 2) }}</h2>
                        <p class="text-muted fs-11 mb-3">{{ $plan->description ?? 'No details available' }}</p>

                        <button type="button" class="btn {{ $plan->btn_class ?? 'btn-secondary' }} d-grid w-100 mb-4 fw-medium"
                            data-bs-toggle="modal"
                            data-bs-target="#upgradePaymentModal"
                            data-plan-id="{{ $plan->id }}"
                            {{-- data-user-email="{{ auth()->user()->email ?? '' }}" --}}
                            data-plan-name="{{ $plan->name }}"
                            data-plan-price="{{ $plan->price }}"
                            data-plan-description="{{ $plan->description }}"
                            {{ $currentPlan == $plan->id ? 'disabled' : '' }}>
                            {{ $currentPlan == $plan->id ? 'Current Plan' : 'Upgrade Plan' }}
                        </button>


                        <ul class="list-unstyled pricing-body">
                            @foreach($plan->features as $feature)
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
                            <img src="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" alt="Aroko Logo" class="img-fluid" style="height: 28px;">
                        </div>

                        <h5 class="fw-bold mb-4">Make Payment</h5>

                        <form method="POST" action="{{ route('pay') }}">
                            @csrf
                            <input type="hidden" name="plan_id" id="selectedPlanId">
                            <input type="hidden" name="email" id="email" value="{{ auth()->user()->email ?? '' }}">
                            <input type="hidden" name="reference" id="paystackReferenceInput">

                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-secondary text-white fw-semibold">
                                    Pay with Paystack (<span id="paystackAmount">0.00</span>) <i class="ri-arrow-right-line ms-1"></i>
                                </button>
                                <button type="button" class="btn btn-light text-dark fw-semibold" data-bs-dismiss="modal">
                                    Cancel
                                </button>
                            </div>
                        </form>




                    </div>

                    <!-- Right: Plan Summary -->
                    <div class="col-md-6 bg-light p-5 d-flex flex-column justify-content-between">
                        <div>
                            <h6 class="fw-bold" id="modalPlanName">Selected Plan</h6>
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{ asset('assets/images/ark-imgs/aroko-head-logo.png') }}" alt="Aroko Logo" style="height: 30px;" class="me-2">
                                <span class="fw-semibold" id="modalPlanDescription">Plan Description</span>
                            </div>

                            <div class="border rounded-3 p-3 mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span><span class="badge rounded-circle bg-primary text-white me-2">1</span> Yearly</span>
                                    <span class="fw-semibold" id="modalPlanPrice">₦0.00</span>
                                </div>
                            </div>

                            <ul class="list-unstyled small text-dark mb-4">
                                <li class="d-flex justify-content-between mb-2">
                                    <span>Subtotal</span><span id="modalSubtotal">₦0.00</span>
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
                            <span><span id="modalTotalPrice">0.00</span>/ <span class="fw-normal">Year</span></span>
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
<script>
document.addEventListener("DOMContentLoaded", function () {
    var upgradeButtons = document.querySelectorAll("[data-bs-target='#upgradePaymentModal']");

    upgradeButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            let planId = this.getAttribute("data-plan-id");
            let planName = this.getAttribute("data-plan-name");
            let planPrice = parseFloat(this.getAttribute("data-plan-price")) || 0;
            let planDescription = this.getAttribute("data-plan-description");
            let nhisFee = 300.00; // Fixed NHIS Fee
            let totalPrice1 = planPrice + nhisFee;
            let totalPrice = totalPrice1 * 100;
            let userEmailElement = document.getElementById("authUserEmail");
            let userEmail = userEmailElement ? userEmailElement.value : "";
            let randomNumber = Math.floor(100000 + Math.random() * 900000); // 6-digit number
            let referenceCode = "AHC" + randomNumber.toString(); // Ensuring max 10 chars
            document.getElementById("modalPlanName").textContent = planName;
            document.getElementById("modalPlanPrice").textContent = "₦" + planPrice.toLocaleString();
            document.getElementById("modalSubtotal").textContent = "₦" + planPrice.toLocaleString();
            document.getElementById("modalTotalPrice").textContent = "₦" + totalPrice1.toLocaleString();
            document.getElementById("paystackAmount").textContent = "₦" + totalPrice1.toLocaleString();
            document.getElementById("modalPlanDescription").textContent = planDescription;
            document.getElementById("selectedPlanId").value = planId;
            document.getElementById("paystackAmountInput").value = totalPrice;
            document.getElementById("paystackEmailInput").value = userEmail;
            document.getElementById("paystackReferenceInput").value = referenceCode;
        });
    });
});
</script>
@endsection
