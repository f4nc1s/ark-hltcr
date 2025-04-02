<div>
    <div class="mb-3">
        <label for="idType" class="form-label">ID Type</label>
        <select class="form-control" id="idType" name="document_type" required>
            <option value="">Select ID Type</option>
            <option value="passport">Passport</option>
            <option value="national_id">National ID</option>
            <option value="driver_license">Driver License</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="idNumber" class="form-label">ID Number</label>
        <input type="text" class="form-control" id="idNumber" name="document_number" placeholder="Enter your ID number" required>
    </div>
    <div class="mb-3">
        <label for="expiryDate" class="form-label">Expiry Date</label>
        <input type="date" class="form-control" id="expiryDate" name="expiry_date" required>
    </div>
    <div class="mb-3">
        <label for="idUpload" class="form-label">Upload ID Document</label>
        <input type="file" class="form-control" id="idUpload" name="id_document" accept="image/*,.pdf" required>
        <small class="form-text text-muted">Upload a clear image of your ID document (JPEG, PNG, or PDF).</small>
    </div>
</div>