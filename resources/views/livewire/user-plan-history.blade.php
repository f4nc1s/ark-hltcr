<div>
    <div class="row mb-3">
        <!-- HMO History Sidebar -->
        <div class="col-md-3">
            <h4>HMO History</h4>
        </div>

        <!-- Search Box -->
        <div class="col-md-6">
            <input type="text" class="form-control" wire:model.debounce.500ms="search" placeholder="Search by Plan Name...">
        </div>

        <!-- Sort Dropdown -->
        <div class="col-md-3">
            <select class="form-control" wire:model="filter">
                <option value="all">All</option>
                <option value="active">Active</option>
                <option value="expired">Expired</option>
                <option value="deactivated">Deactivated</option>
            </select>
        </div>
    </div>

    <!-- History Table -->
    <div class="mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Trans ID</th>
                    <th>Plan</th>
                    <th>Plan Status</th>
                    <th>Amount</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userPlans as $userPlan)
                    <tr>
                        <td>#{{ $userPlan->id }}</td>
                        <td>{{ $userPlan->plan->name ?? 'N/A' }}</td>
                        <td>
                            <span class="badge bg-{{ $userPlan->status === 'active' ? 'success' : ($userPlan->status === 'expired' ? 'warning' : 'danger') }}">
                                {{ ucfirst($userPlan->status) }}
                            </span>
                        </td>
                        <td>${{ number_format($userPlan->plan->price ?? 0, 2) }}</td>
                        <td>{{ $userPlan->start_date ?? 'N/A' }}</td>
                        <td>{{ $userPlan->end_date ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
