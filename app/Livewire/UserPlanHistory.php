<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\UserPlan;
use Illuminate\Support\Facades\Auth;

class UserPlanHistory extends Component
{
    public $search = '';
    public $filter = 'all';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingFilter()
    {
        $this->resetPage();
    }

    public function render()
    {
        // Get user plans with plan details
        $query = UserPlan::where('user_id', Auth::id())->with('plan');

        // Apply search query
        if (!empty($this->search)) {
            $query->whereHas('plan', function ($q) {
                $q->where('name', 'like', "%{$this->search}%");
            });
        }

        // Apply filter
        if ($this->filter !== 'all') {
            $query->where('status', $this->filter);
        }

        $userPlans = $query->orderBy('start_date', 'desc')->get();

        return view('livewire.user-plan-history', compact('userPlans'));
    }
}
