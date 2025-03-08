{{-- <div>
    <div class="mb-3">
        <p>A verification code has been sent to your email.</p>
        <label for="emailCode" class="form-label">Enter Email Verification Code</label>
        <input type="text" class="form-control" id="emailCode" maxlength="6" placeholder="Enter code">
        
        <p class="mt-4">A verification code has been sent to your phone number.</p>
        <label for="phoneCode" class="form-label">Enter Phone Verification Code</label>
        <input type="text" class="form-control" id="phoneCode" maxlength="6" placeholder="Enter code">
    </div>
    <button class="btn btn-secondary w-100" @click="step = 4">Next</button>
</div> --}}

<div class="p-4 card-body p-sm-5">
    <p class="mb-2 text-center h5">Verification Code</p>
    <p class="mb-4 text-center text-muted op-7 fw-normal fs-12">Enter the 4 digit code sent to the moble number ******850.</p>
    <div class="row gy-3">
        <div class="mb-2 col-xl-12">
            <div class="row">
                <div class="col-3">
                    <input type="text" class="text-center form-control" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                </div>
                <div class="col-3">
                    <input type="text" class="text-center form-control" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                </div>
                <div class="col-3">
                    <input type="text" class="text-center form-control" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                </div>
                <div class="col-3">
                    <input type="text" class="text-center form-control" id="four" maxlength="1">
                </div>
            </div>
            <div class="mt-2 form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label fs-14" for="defaultCheck1">
                    Didn't recieve a code ?<a href="" class="text-primary ms-2 d-inline-block">Resend</a>
                </label>
            </div>
        </div>
        {{-- <div class="mt-2 col-xl-12 d-grid">
            <a href="index.php" class="btn btn-primary">Verify</a>
        </div> --}}
        <button class="btn btn-secondary w-100" @click="step = 4">Verify</button>
    </div>
</div>


<!-- Internal Two Step Verification JS -->
<script src="../assets/js/two-step-verification.js"></script>
<!-- Authentication JS -->
<script src="../assets/js/authentication-main.js"></script>