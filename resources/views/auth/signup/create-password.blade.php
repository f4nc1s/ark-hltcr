<div>
    <div class="mb-3">
        <label for="password" class="form-label">Create Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password">
        <small class="form-text text-muted">Password must contain at least 8 characters, including 1 uppercase letter, 1 number, and 1 symbol.</small>
    </div>
    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
    </div>
    <button class="btn btn-secondary w-100" @click="step = 3">Next</button>
</div>