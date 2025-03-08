<div>
    <div class="mb-3">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number (optional)</label>
        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
    </div>
    <button class="btn btn-secondary w-100" @click="step = 2">Next</button>
</div>