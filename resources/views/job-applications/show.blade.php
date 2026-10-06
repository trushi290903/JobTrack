<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $application->job_title }} - JobTrack</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #172033;
        }

        .navbar {
            height: 72px;
            background: white;
            border-bottom: 1px solid #e8ebf2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
        }

        .brand {
            font-size: 24px;
            font-weight: 800;
            color: #2563eb;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 28px;
            align-items: center;
        }

        .nav-links a {
            color: #596273;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        .page {
            max-width: 1050px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .success {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #047857;
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 22px;
            font-size: 14px;
        }

        .main-card {
            background: white;
            border: 1px solid #e8ebf2;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(20, 30, 60, 0.06);
        }

        .hero {
            padding: 35px;
            background: linear-gradient(135deg, #eff6ff, #ffffff);
            border-bottom: 1px solid #e8ebf2;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 25px;
        }

        .hero h1 {
            margin: 0 0 8px;
            font-size: 32px;
            font-weight: 800;
        }

        .company {
            margin: 0;
            color: #64748b;
            font-size: 16px;
        }

        .status {
            display: inline-flex;
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 800;
            white-space: nowrap;
        }

        .status-applied {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .status-interview {
            background: #fef3c7;
            color: #92400e;
        }

        .status-selected {
            background: #dcfce7;
            color: #166534;
        }

        .status-rejected {
            background: #fee2e2;
            color: #b91c1c;
        }

        .content {
            padding: 35px;
        }

        .section {
            margin-bottom: 35px;
        }

        .section:last-child {
            margin-bottom: 0;
        }

        .section-title {
            margin: 0 0 20px;
            font-size: 19px;
            font-weight: 800;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .detail-box {
            padding: 18px;
            background: #f8fafc;
            border: 1px solid #edf0f5;
            border-radius: 12px;
        }

        .detail-label {
            display: block;
            color: #7b8494;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .5px;
            margin-bottom: 7px;
        }

        .detail-value {
            font-size: 15px;
            font-weight: 700;
            color: #1e293b;
        }

        .notes {
            background: #f8fafc;
            border: 1px solid #edf0f5;
            border-radius: 12px;
            padding: 20px;
            line-height: 1.7;
            color: #475569;
            white-space: pre-line;
        }

        .file-section {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .file-card {
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 20px;
            background: #fff;
        }

        .file-card h3 {
            margin: 0 0 8px;
            font-size: 15px;
        }

        .file-card p {
            margin: 0 0 15px;
            color: #7b8494;
            font-size: 13px;
        }

        .photo-preview {
            width: 100%;
            max-height: 300px;
            object-fit: contain;
            border-radius: 10px;
            background: #f8fafc;
            margin-bottom: 15px;
        }

        .file-link {
            display: inline-flex;
            padding: 10px 14px;
            border-radius: 9px;
            background: #eff6ff;
            color: #2563eb;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .file-link:hover {
            background: #dbeafe;
        }

        .no-file {
            color: #94a3b8;
            font-size: 14px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid #edf0f5;
        }

        .action-left,
        .action-right {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 18px;
            border-radius: 9px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            border: none;
            cursor: pointer;
        }

        .btn-secondary {
            background: #eef1f6;
            color: #465064;
        }

        .btn-secondary:hover {
            background: #e2e6ed;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-danger {
            background: #fee2e2;
            color: #b91c1c;
        }

        .btn-danger:hover {
            background: #fecaca;
        }

        .delete-form {
            margin: 0;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 0 20px;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 12px;
            }

            .page {
                margin: 30px auto;
            }

            .hero {
                padding: 25px;
                flex-direction: column;
            }

            .hero h1 {
                font-size: 27px;
            }

            .content {
                padding: 25px;
            }

            .details-grid,
            .file-section {
                grid-template-columns: 1fr;
            }

            .actions {
                flex-direction: column;
            }

            .action-left,
            .action-right {
                width: 100%;
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar">

        <a href="{{ route('home') }}" class="brand">
            JobTrack
        </a>

        <div class="nav-links">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('applications.index') }}">Jobs</a>
        </div>

    </nav>


    <!-- Page -->
    <main class="page">

        <a
            href="{{ route('applications.index') }}"
            class="back-link"
        >
            ← Back to Jobs
        </a>


        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif


        <div class="main-card">

            <!-- Header -->
            <div class="hero">

                <div>
                    <h1>{{ $application->job_title }}</h1>

                    <p class="company">
                        {{ $application->company_name }}

                        @if ($application->location)
                            • {{ $application->location }}
                        @endif
                    </p>
                </div>


                @if ($application->status === 'Applied')
                    <span class="status status-applied">
                        Applied
                    </span>
                @elseif ($application->status === 'Interview')
                    <span class="status status-interview">
                        Interview
                    </span>
                @elseif ($application->status === 'Selected')
                    <span class="status status-selected">
                        Selected
                    </span>
                @elseif ($application->status === 'Rejected')
                    <span class="status status-rejected">
                        Rejected
                    </span>
                @endif

            </div>


            <div class="content">

                <!-- Job Information -->
                <section class="section">

                    <h2 class="section-title">
                        Job Information
                    </h2>

                    <div class="details-grid">

                        <div class="detail-box">
                            <span class="detail-label">
                                Company
                            </span>

                            <div class="detail-value">
                                {{ $application->company_name }}
                            </div>
                        </div>


                        <div class="detail-box">
                            <span class="detail-label">
                                Job Title
                            </span>

                            <div class="detail-value">
                                {{ $application->job_title }}
                            </div>
                        </div>


                        <div class="detail-box">
                            <span class="detail-label">
                                Location
                            </span>

                            <div class="detail-value">
                                {{ $application->location ?: 'Not specified' }}
                            </div>
                        </div>


                        <div class="detail-box">
                            <span class="detail-label">
                                Salary
                            </span>

                            <div class="detail-value">
                                @if ($application->salary)
                                    ₹{{ number_format($application->salary) }}
                                @else
                                    Not specified
                                @endif
                            </div>
                        </div>


                        <div class="detail-box">
                            <span class="detail-label">
                                Applied Date
                            </span>

                            <div class="detail-value">
                                {{ \Carbon\Carbon::parse($application->applied_date)->format('d M Y') }}
                            </div>
                        </div>


                        <div class="detail-box">
                            <span class="detail-label">
                                Current Status
                            </span>

                            <div class="detail-value">
                                {{ $application->status }}
                            </div>
                        </div>

                    </div>

                </section>


                <!-- Notes -->
                <section class="section">

                    <h2 class="section-title">
                        Notes
                    </h2>

                    @if ($application->notes)

                        <div class="notes">
                            {{ $application->notes }}
                        </div>

                    @else

                        <div class="notes">
                            No notes added for this application.
                        </div>

                    @endif

                </section>


                <!-- Files -->
                <section class="section">

                    <h2 class="section-title">
                        Files & Documents
                    </h2>

                    <div class="file-section">

                        <!-- Photo -->
                        <div class="file-card">

                            <h3>Company / Job Photo</h3>

                            @if ($application->photo)

                                <img
                                    src="{{ asset('storage/' . $application->photo) }}"
                                    alt="Job Photo"
                                    class="photo-preview"
                                >

                                <a
                                    href="{{ asset('storage/' . $application->photo) }}"
                                    target="_blank"
                                    class="file-link"
                                >
                                    View Full Photo
                                </a>

                            @else

                                <p class="no-file">
                                    No photo uploaded.
                                </p>

                            @endif

                        </div>


                        <!-- Resume -->
                        <div class="file-card">

                            <h3>Resume</h3>

                            @if ($application->resume)

                                <p>
                                    Resume uploaded for this application.
                                </p>

                                <a
                                    href="{{ asset('storage/' . $application->resume) }}"
                                    target="_blank"
                                    class="file-link"
                                >
                                    View / Open Resume
                                </a>

                            @else

                                <p class="no-file">
                                    No resume uploaded.
                                </p>

                            @endif

                        </div>

                    </div>

                </section>


                <!-- Actions -->
                <div class="actions">

                    <div class="action-left">

                        <a
                            href="{{ route('applications.index') }}"
                            class="btn btn-secondary"
                        >
                            ← Back
                        </a>

                    </div>


                    <div class="action-right">

                        <a
                            href="{{ route('applications.edit', $application->id) }}"
                            class="btn btn-primary"
                        >
                            ✏️ Edit Job
                        </a>


                        <form
                            action="{{ route('applications.destroy', $application->id) }}"
                            method="POST"
                            class="delete-form"
                            onsubmit="return confirm('Are you sure you want to delete this job application?');"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger"
                            >
                                🗑 Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </main>

</body>
</html>