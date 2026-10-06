<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>My Applications - JobTrack</title>

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

            color: #2563eb;

            font-size: 23px;
            font-weight: 800;
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
           CONTAINER
        ========================= */

        .container {
            max-width: 1250px;
            margin: auto;

            padding: 40px 25px 70px;
        }

        /* =========================
           HEADER
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

        .new-job-btn {
            padding: 13px 19px;

            background: #2563eb;
            color: white;

            border-radius: 8px;

            font-size: 14px;
            font-weight: 700;
        }

        .new-job-btn:hover {
            background: #1d4ed8;
        }

        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success-message {
            margin-bottom: 25px;

            padding: 14px 18px;

            background: #f0fdf4;

            border: 1px solid #bbf7d0;

            color: #15803d;

            border-radius: 9px;

            font-size: 14px;
            font-weight: 600;
        }

        /* =========================
           APPLICATION CARD
        ========================= */

        .applications-card {
            background: white;

            border: 1px solid #e2e8f0;

            border-radius: 13px;

            overflow: hidden;
        }

        .card-header {
            padding: 20px 22px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            border-bottom: 1px solid #e2e8f0;
        }

        .card-header h2 {
            font-size: 18px;
        }

        .application-count {
            color: #64748b;

            font-size: 13px;
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

            min-width: 900px;
        }

        th {
            padding: 15px 20px;

            text-align: left;

            background: #f8fafc;

            color: #64748b;

            font-size: 11px;
            font-weight: 700;

            text-transform: uppercase;

            letter-spacing: 0.5px;
        }

        td {
            padding: 18px 20px;

            border-top: 1px solid #f1f5f9;

            color: #475569;

            font-size: 13px;
        }

        tbody tr {
            transition: 0.2s;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        /* =========================
           COMPANY
        ========================= */

        .company-name {
            color: #0f172a;

            font-size: 14px;
            font-weight: 700;
        }

        .job-title {
            color: #64748b;

            margin-top: 4px;

            font-size: 12px;
        }

        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-block;

            padding: 6px 11px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;
        }

        .status-applied {
            background: #eff6ff;
            color: #2563eb;
        }

        .status-interview {
            background: #fef3c7;
            color: #b45309;
        }

        .status-selected {
            background: #dcfce7;
            color: #15803d;
        }

        .status-rejected {
            background: #fee2e2;
            color: #dc2626;
        }

        /* =========================
           ACTIONS
        ========================= */

        .actions {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .action-btn {
            padding: 7px 10px;

            border-radius: 6px;

            font-size: 11px;
            font-weight: 700;
        }

        .view-btn {
            background: #eff6ff;
            color: #2563eb;
        }

        .edit-btn {
            background: #fef3c7;
            color: #b45309;
        }

        .delete-btn {
            border: none;

            background: #fee2e2;
            color: #dc2626;

            cursor: pointer;

            font-family: inherit;
        }

        .view-btn:hover {
            background: #dbeafe;
        }

        .edit-btn:hover {
            background: #fde68a;
        }

        .delete-btn:hover {
            background: #fecaca;
        }

        /* =========================
           EMPTY STATE
        ========================= */

        .empty-state {
            padding: 80px 25px;

            text-align: center;
        }

        .empty-icon {
            width: 70px;
            height: 70px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 20px;

            background: #eff6ff;

            border-radius: 50%;

            font-size: 30px;
        }

        .empty-state h3 {
            font-size: 20px;

            margin-bottom: 8px;
        }

        .empty-state p {
            color: #64748b;

            font-size: 14px;
        }

        .empty-state a {
            display: inline-block;

            margin-top: 20px;

            padding: 11px 18px;

            background: #2563eb;
            color: white;

            border-radius: 8px;

            font-size: 13px;
            font-weight: 700;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 700px) {

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
                padding: 8px 11px;
            }

            .container {
                padding: 30px 15px 50px;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .page-header h1 {
                font-size: 27px;
            }

            .new-job-btn {
                width: 100%;
                text-align: center;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

        <div class="navbar-inner">

            <a href="{{ url('/') }}" class="logo">

                <span class="logo-icon">
                    ✓
                </span>

                JobTrack

            </a>


            <div class="nav-links">

                <a href="{{ url('/') }}">
                    Home
                </a>

                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a href="{{ route('applications.index') }}"
                   class="active">

                    Jobs

                </a>

                <a href="{{ route('applications.create') }}"
                   class="add-btn">

                    + Add Job

                </a>

            </div>

        </div>

    </nav>


    <!-- =========================
         MAIN
    ========================= -->

    <main class="container">


        <!-- HEADER -->

        <div class="page-header">

            <div>

                <h1>
                    My Job Applications
                </h1>

                <p>
                    Manage and track all your job applications.
                </p>

            </div>


            <a href="{{ route('applications.create') }}"
               class="new-job-btn">

                + Add New Application

            </a>

        </div>


        <!-- SUCCESS MESSAGE -->

        @if(session('success'))

            <div class="success-message">

                ✓ {{ session('success') }}

            </div>

        @endif


        <!-- =========================
             APPLICATIONS
        ========================= -->

        <div class="applications-card">


            <div class="card-header">

                <h2>
                    All Applications
                </h2>

                <span class="application-count">

                    {{ $applications->count() }}

                    {{ $applications->count() == 1 ? 'Application' : 'Applications' }}

                </span>

            </div>


            @if($applications->count())


                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th>
                                    Company
                                </th>

                                <th>
                                    Location
                                </th>

                                <th>
                                    Salary
                                </th>

                                <th>
                                    Applied Date
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($applications as $application)

                                <tr>


                                    <!-- COMPANY -->

                                    <td>

                                        <div class="company-name">

                                            {{ $application->company_name }}

                                        </div>

                                        <div class="job-title">

                                            {{ $application->job_title }}

                                        </div>

                                    </td>


                                    <!-- LOCATION -->

                                    <td>

                                        {{ $application->location ?? 'N/A' }}

                                    </td>


                                    <!-- SALARY -->

                                    <td>

                                        @if($application->salary)

                                            ₹{{ number_format($application->salary) }}

                                        @else

                                            N/A

                                        @endif

                                    </td>


                                    <!-- DATE -->

                                    <td>

                                        {{ \Carbon\Carbon::parse($application->applied_date)->format('d M Y') }}

                                    </td>


                                    <!-- STATUS -->

                                    <td>

                                        @php

                                            $statusClass = match($application->status) {

                                                'Applied' => 'status-applied',

                                                'Interview' => 'status-interview',

                                                'Selected' => 'status-selected',

                                                'Rejected' => 'status-rejected',

                                                default => 'status-applied',

                                            };

                                        @endphp


                                        <span class="status {{ $statusClass }}">

                                            {{ $application->status }}

                                        </span>

                                    </td>


                                    <!-- ACTIONS -->

                                    <td>

                                        <div class="actions">


                                            <a href="{{ route('applications.show', $application->id) }}"
                                               class="action-btn view-btn">

                                                View

                                            </a>


                                            <a href="{{ route('applications.edit', $application->id) }}"
                                               class="action-btn edit-btn">

                                                Edit

                                            </a>


                                            <form action="{{ route('applications.destroy', $application->id) }}"
                                                  method="POST"
                                                  style="display:inline;"
                                                  onsubmit="return confirm('Are you sure you want to delete this application?');">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit"
                                                        class="action-btn delete-btn">

                                                    Delete

                                                </button>

                                            </form>


                                        </div>

                                    </td>


                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>


            @else


                <!-- EMPTY -->

                <div class="empty-state">

                    <div class="empty-icon">
                        💼
                    </div>

                    <h3>
                        No Job Applications Yet
                    </h3>

                    <p>
                        Start tracking your job search by
                        adding your first application.
                    </p>

                    <a href="{{ route('applications.create') }}">

                        + Add Your First Application

                    </a>

                </div>


            @endif


        </div>

    </main>


</body>

</html>