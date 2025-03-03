<div class="p-4 card">
    <h4>Sign Up with Phone</h4>
    <p class="text-muted">Enter your phone number to continue.</p>

    <!-- Country Code Selector -->
    <div class="mb-3 input-group">
        <select class="form-select" id="country-code" aria-label="Country Code">
            <option value="+1">+1 (USA)</option>
            <option value="+44">+44 (UK)</option>
            <option value="+91">+91 (India)</option>
            <option value="+61">+61 (Australia)</option>
            <option value="+81">+81 (Japan)</option>
            <!-- Add more country codes as needed -->
        </select>
        <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone-number" maxlength="15">
    </div>

    <p class="mt-2 text-center cursor-pointer text-primary" x-on:click="method = 'email'">Use Email Instead</p>

    <!-- Checkbox for agreeing to terms -->
    <div class="mt-3 form-check">
        <input class="form-check-input" type="checkbox" id="agree-terms">
        <label class="form-check-label" for="agree-terms">
            I agree to the <a href="#" class="text-primary">Terms and Conditions</a>
        </label>
    </div>

    <!-- Next button, initially hidden -->
    <button class="mt-3 btn btn-primary w-100" id="next-button" disabled>Next</button>
</div>

<script>
    const phoneInput = document.getElementById('phone-number');
    const agreeTerms = document.getElementById('agree-terms');
    const nextButton = document.getElementById('next-button');

    function updateButtonState() {
        // Check if input has the right number of digits and if the checkbox is checked
        const phoneIsValid = phoneInput.value.length >= 10; // Adjust digit requirement as needed
        const termsChecked = agreeTerms.checked;

        // Enable the button if both conditions are met
        nextButton.disabled = !(phoneIsValid && termsChecked);
    }

    phoneInput.addEventListener('input', updateButtonState);
    agreeTerms.addEventListener('change', updateButtonState);
</script>