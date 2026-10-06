<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - JobTrack</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f8fafc;
            color: #0f172a;
        }

        a {
            text-decoration: none;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            background: white;
            border-bottom: 1px solid #e2e8f0;
        }

        .navbar-inner {
            max-width: 1250px;
            margin: auto;
            padding: 17px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 23px;
            font-weight: 800;
            color: #2563eb;
        }

        .logo-icon {
            width: 38px;
            height: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #2563eb;
            color: white;

            border-radius: 9px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-links a {
            color: #64748b;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        .nav-links .active {
            color: #2563eb;
        }

        .add-btn {
            padding: 10px 17px;

            background: #2563eb;
            color: white !important;

            border-radius: 8px;
        }

        .add-btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 1250px;
            margin: auto;

            padding: 40px 25px 70px;
        }

        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 30px;
        }

        .page-header h1 {
            font-size: 32px;
            margin-bottom: 8px;
        }

        .page-header p {
            color: #64748b;
            font-size: 15px;
        }

        .header-btn {
            padding: 12px 18px;

            background: #2563eb;
            color: white;

            border-radius: 8px;

            font-size: 14px;
            font-weight: 700;
        }

        .header-btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           STAT CARDS
        ========================= */

        .stats-grid {
            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 20px;

            margin-bottom: 30px;
        }

        .stat-card {
            background: white;

            border: 1px solid #e2e8f0;

            border-radius: 13px;

            padding: 23px;

            transition: 0.25s;
        }

        .stat-card:hover {
            transform: translateY(-3px);

            box-shadow:
                0 12px 25px rgba(15, 23, 42, 0.06);
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 18px;
        }

        .stat-title {
            color: #64748b;

            font-size: 14px;
            font-weight: 600;
        }

        .stat-icon {
            width: 42px;
            height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #eff6ff;
            color: #2563eb;

            border-radius: 10px;

            font-size: 19px;
        }

        .stat-number {
            font-size: 32px;
            font-weight: 800;

            color: #0f172a;
        }

        .stat-info {
            margin-top: 6px;

            color: #94a3b8;

            font-size: 12px;
        }

        /* =========================
           CONTENT GRID
        ========================= */

        .content-grid {
            display: grid;

            grid-template-columns:
                2fr 1fr;

            gap: 25px;
        }

        .panel {
            background: white;

            border: 1px solid #e2e8f0;

            border-radius: 13px;

            overflow: hidden;
        }

        .panel-header {
            padding: 20px 22px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid #e2e8f0;
        }

        .panel-header h2 {
            font-size: 18px;
        }

        .view-all {
            color: #2563eb;

            font-size: 13px;
            font-weight: 700;
        }

        /* =========================
           TABLE
        ========================= */

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 600px;
        }

        th {
            text-align: left;

            padding: 14px 20px;

            background: #f8fafc;

            color: #64748b;

            font-size: 12px;
            font-weight: 700;

            text-transform: uppercase;
        }

        td {
            padding: 17px 20px;

            border-top: 1px solid #f1f5f9;

            color: #475569;

            font-size: 13px;
        }

        td:first-child {
            color: #0f172a;
            font-weight: 700;
        }

        .status {
            display: inline-block;

            padding: 6px 10px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;

            background: #eff6ff;
            color: #2563eb;
        }

        .status.interview {
            background: #fef3c7;
            color: #b45309;
        }

        .status.selected {
            background: #dcfce7;
            color: #15803d;
        }

        .status.rejected {
            background: #fee2e2;
            color: #dc2626;
        }

        /* =========================
           QUICK ACTIONS
        ========================= */

        .quick-actions {
            padding: 20px;
        }

        .action {
            display: flex;
            align-items: center;

            gap: 13px;

            padding: 14px;

            margin-bottom: 12px;

            background: #f8fafc;

            border: 1px solid #e2e8f0;

            border-radius: 9px;

            transition: 0.2s;
        }

        .action:last-child {
            margin-bottom: 0;
        }

        .action:hover {
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .action-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: white;

            border-radius: 8px;

            font-size: 18px;
        }

        .action-content strong {
            display: block;

            color: #0f172a;

            font-size: 14px;

            margin-bottom: 3px;
        }

        .action-content span {
            color: #94a3b8;

            font-size: 12px;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty {
            padding: 50px 20px;

            text-align: center;

            color: #64748b;
        }

        .empty-icon {
            font-size: 40px;

            margin-bottom: 15px;
        }

        .empty h3 {
            color: #0f172a;

            margin-bottom: 8px;
        }

        .empty a {
            display: inline-block;

            margin-top: 18px;

            padding: 10px 16px;

            background: #2563eb;
            color: white;

            border-radius: 7px;

            font-size: 13px;
            font-weight: 700;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 1000px) {

            .stats-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {

            .navbar-inner {
                padding: 14px 15px;
            }

            .nav-links {
                gap: 10px;
            }

            .nav-links a {
                font-size: 12px;
            }

            .nav-links a:first-child {
                display: none;
            }

            .add-btn {
                padding: 8px 10px;
            }

            .container {
                padding: 30px 15px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .page-header h1 {
                font-size: 27px;
            }
        }
    </style>

</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->

    <!-- =========================
     NAVBAR
========================== -->

<nav class="navbar">

    <div class="navbar-inner">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">

            <span class="logo-icon">
                ✓
            </span>

            JobTrack

        </a>


        <div class="nav-links">

            <!-- Home -->
            <a href="{{ url('/') }}">
                Home
            </a>


            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}"
               class="active">
                Dashboard
            </a>


            <!-- Jobs -->
            <a href="{{ route('applications.index') }}">
                Jobs
            </a>


            <!-- Add Job -->
            <a href="{{ route('applications.create') }}"
               class="add-btn">
                + Add Job
            </a>


            <!-- Logout -->
            @auth
                <form method="POST"
                      action="{{ route('logout') }}"
                      style="display: inline; margin: 0;">

                    @csrf

                    <button type="submit"
                            style="
                                border: none;
                                background: transparent;
                                color: #dc2626;
                                font-size: 14px;
                                font-weight: 600;
                                cursor: pointer;
                                padding: 10px 5px;
                            ">
                        Logout
                    </button>

                </form>
            @endauth

        </div>

    </div>

</nav>


    <!-- =========================
         MAIN
    ========================== -->

    <main class="container">

        <!-- Header -->

        <div class="page-header">

            <div>

                <h1>
                    Dashboard
                </h1>

                <p>
                    Here's an overview of your job applications.
                </p>

            </div>

            <a href="{{ route('applications.create') }}"
               class="header-btn">

                + Add New Application

            </a>

        </div>


        <!-- =========================
             STATISTICS
        ========================== -->

        <div class="stats-grid">

            <!-- Total -->

            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Total Applications
                    </span>

                    <div class="stat-icon">
                        💼
                    </div>

                </div>

                <div class="stat-number">
                    {{ $totalApplications }}
                </div>

                <div class="stat-info">
                    All applications
                </div>

            </div>


            <!-- Applied -->

            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Applied
                    </span>

                    <div class="stat-icon">
                        📤
                    </div>

                </div>

                <div class="stat-number">
                    {{ $applied }}
                </div>

                <div class="stat-info">
                    Applications submitted
                </div>

            </div>


            <!-- Interview -->

            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Interviews
                    </span>

                    <div class="stat-icon">
                        🎯
                    </div>

                </div>

                <div class="stat-number">
                    {{ $interviews }}
                </div>

                <div class="stat-info">
                    Interview stage
                </div>

            </div>


            <!-- Selected -->

            <div class="stat-card">

                <div class="stat-top">

                    <span class="stat-title">
                        Selected
                    </span>

                    <div class="stat-icon">
                        ✓
                    </div>

                </div>

                <div class="stat-number">
                    {{ $selected }}
                </div>

                <div class="stat-info">
                    Successful applications
                </div>

            </div>

        </div>


        <!-- =========================
             CONTENT
        ========================== -->

        <div class="content-grid">


            <!-- Recent Applications -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Recent Applications
                    </h2>

                    <a href="{{ route('applications.index') }}"
                       class="view-all">

                        View All →

                    </a>

                </div>


                @if($recentApplications->count())

                    <div class="table-wrapper">

                        <table>

                            <thead>

                                <tr>

                                    <th>
                                        Company
                                    </th>

                                    <th>
                                        Position
                                    </th>

                                    <th>
                                        Location
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        Date
                                    </th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach($recentApplications as $application)

                                    <tr>

                                        <td>
                                            {{ $application->company_name }}
                                        </td>

                                        <td>
                                            {{ $application->job_title }}
                                        </td>

                                        <td>
                                            {{ $application->location ?? 'N/A' }}
                                        </td>

                                        <td>

                                            @php
                                                $statusClass = strtolower($application->status);
                                            @endphp

                                            <span class="status {{ $statusClass }}">
                                                {{ $application->status }}
                                            </span>

                                        </td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($application->applied_date)->format('d M Y') }}
                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <div class="empty">

                        <div class="empty-icon">
                            💼
                        </div>

                        <h3>
                            No applications yet
                        </h3>

                        <p>
                            Start tracking your job applications.
                        </p>

                        <a href="{{ route('applications.create') }}">
                            Add First Application
                        </a>

                    </div>

                @endif

            </div>


            <!-- Quick Actions -->

            <div class="panel">

                <div class="panel-header">

                    <h2>
                        Quick Actions
                    </h2>

                </div>


                <div class="quick-actions">

                    <a href="{{ route('applications.create') }}"
                       class="action">

                        <div class="action-icon">
                            ➕
                        </div>

                        <div class="action-content">

                            <strong>
                                Add Job Application
                            </strong>

                            <span>
                                Track a new opportunity
                            </span>

                        </div>

                    </a>


                    <a href="{{ route('applications.index') }}"
                       class="action">

                        <div class="action-icon">
                            📋
                        </div>

                        <div class="action-content">

                            <strong>
                                View All Jobs
                            </strong>

                            <span>
                                Manage applications
                            </span>

                        </div>

                    </a>


                    <a href="{{ url('/') }}"
                       class="action">

                        <div class="action-icon">
                            🏠
                        </div>

                        <div class="action-content">

                            <strong>
                                Back to Home
                            </strong>

                            <span>
                                Visit JobTrack home
                            </span>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </main>

</body>

</html>