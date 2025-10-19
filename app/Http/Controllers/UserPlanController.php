<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPlan;
use Illuminate\Support\Facades\Auth;

class UserPlanController extends Controller
{
    // public function fetchHistory(Request $request)
    // {
    //     $query = UserPlan::where('user_id', Auth::id())->with('plan');

    //     // Apply search filter
    //     if ($request->has('search') && !empty($request->search)) {
    //         $query->whereHas('plan', function ($q) use ($request) {
    //             $q->where('name', 'like', "%" . $request->search . "%");
    //         });
    //     }

    //     // Apply status filter
    //     if ($request->has('filter') && $request->filter !== 'all') {
    //         $query->where('status', $request->filter);
    //     }

    //     $userPlans = $query->orderBy('start_date', 'desc')->get();

    //     return response()->json($userPlans);
    // }

    public function fetchHistory(Request $request)
    {
        $user = auth()->user();

        $plans = $user->userPlans()
            ->with('plan')
            ->when($request->search, function ($query, $search) {
                $query->whereHas('plan', function ($q) use ($search) {
                    $q->where('name', 'like', "%$search%");
                });
            })
            ->when($request->filter !== 'all', function ($query) use ($request) {
                $query->where('status', $request->filter);
            })
            ->orderBy('start_date', 'desc')
            ->get();

        return response()->json($plans);
    }
}
