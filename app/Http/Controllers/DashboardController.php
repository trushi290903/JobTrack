<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $totalApplications = JobApplication::where('user_id', $userId)
            ->count();

        $applied = JobApplication::where('user_id', $userId)
            ->where('status', 'Applied')
            ->count();

        $interviews = JobApplication::where('user_id', $userId)
            ->where('status', 'Interview')
            ->count();

        $selected = JobApplication::where('user_id', $userId)
            ->where('status', 'Selected')
            ->count();

        $recentApplications = JobApplication::where('user_id', $userId)
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalApplications',
            'applied',
            'interviews',
            'selected',
            'recentApplications'
        ));
    }
}