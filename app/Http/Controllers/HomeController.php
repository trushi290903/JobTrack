<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;

class HomeController extends Controller
{
    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | Guest User
        |--------------------------------------------------------------------------
        */

        if (!auth()->check()) {

            $totalApplications = 0;
            $interviews = 0;
            $selected = 0;
            $applied = 0;

            $recentApplications = collect();

            return view('home', compact(
                'totalApplications',
                'interviews',
                'selected',
                'applied',
                'recentApplications'
            ));
        }


        /*
        |--------------------------------------------------------------------------
        | Current Logged-in User
        |--------------------------------------------------------------------------
        */

        $userId = auth()->id();


        /*
        |--------------------------------------------------------------------------
        | Total Applications
        |--------------------------------------------------------------------------
        */

        $totalApplications = JobApplication::where('user_id', $userId)
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Interview Applications
        |--------------------------------------------------------------------------
        */

        $interviews = JobApplication::where('user_id', $userId)
            ->where('status', 'Interview')
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Selected Applications
        |--------------------------------------------------------------------------
        */

        $selected = JobApplication::where('user_id', $userId)
            ->where('status', 'Selected')
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Applied / Pending Applications
        |--------------------------------------------------------------------------
        */

        $applied = JobApplication::where('user_id', $userId)
            ->where('status', 'Applied')
            ->count();


        /*
        |--------------------------------------------------------------------------
        | Latest 3 Applications
        |--------------------------------------------------------------------------
        */

        $recentApplications = JobApplication::where('user_id', $userId)
            ->latest()
            ->take(3)
            ->get();


        /*
        |--------------------------------------------------------------------------
        | Send Data To Home Page
        |--------------------------------------------------------------------------
        */

        return view('home', compact(
            'totalApplications',
            'interviews',
            'selected',
            'applied',
            'recentApplications'
        ));
    }
}