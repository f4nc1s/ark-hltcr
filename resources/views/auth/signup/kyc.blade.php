<div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Enter your address">
    </div>
    <div class="mb-3">
        <label for="state" class="form-label">State</label>
        <input type="text" class="form-control" id="state" placeholder="Enter your state">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Gender</label>
        <select class="form-control" id="gender">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob">
    </div>
    <div class="mb-3">
        <label for="kinName" class="form-label">Next of Kin Name</label>
        <input type="text" class="form-control" id="kinName" placeholder="Enter name of next of kin">
    </div>
    <div class="mb-3">
        <label for="kinEmail" class="form-label">Next of Kin Email</label>
        <input type="email" class="form-control" id="kinEmail" placeholder="Enter next of kin's email">
    </div>
    <div class="mb-3">
        <label for="kinPhone" class="form-label">Next of Kin Phone</label>
        <input type="tel" class="form-control" id="kinPhone" placeholder="Enter next of kin's phone">
    </div>
    <div class="mb-3">
        <label for="relationship" class="form-label">Relationship</label>
        <select class="form-control" id="relationship">
            <option value="">Select Relationship</option>
            <option value="sister">Sister</option>
            <option value="brother">Brother</option>
            <option value="parent">Parent</option>
            <option value="spouse">Spouse</option>
            <option value="other">Other</option>
        </select>
    </div>
    <button class="btn btn-secondary w-100" @click="finishRegistration()">Finish Registration</button>
</div>