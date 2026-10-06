<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JobTrack - Smart Job Application Tracker</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
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
            width: 100%;
            position: sticky;
            top: 0;
            z-index: 1000;

            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);

            border-bottom: 1px solid #e2e8f0;
        }

        .navbar-inner {
            max-width: 1200px;
            margin: auto;

            padding: 18px 25px;

            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 24px;
            font-weight: 800;

            color: #2563eb;
        }

        .logo-icon {
            width: 40px;
            height: 40px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #2563eb;
            color: white;

            border-radius: 10px;

            font-size: 20px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            color: #475569;
            font-size: 15px;
            font-weight: 600;

            transition: 0.2s;
        }

        .nav-links a:hover {
            color: #2563eb;
        }

        .nav-dashboard {
            padding: 10px 18px;

            color: white !important;
            background: #2563eb;

            border-radius: 8px;
        }

        .nav-dashboard:hover {
            background: #1d4ed8;
        }

        /* =========================
           HERO
        ========================= */

        .hero {
            position: relative;
            overflow: hidden;

            padding: 110px 25px 100px;

            background:
                radial-gradient(
                    circle at 20% 20%,
                    rgba(37, 99, 235, 0.12),
                    transparent 35%
                ),
                radial-gradient(
                    circle at 80% 10%,
                    rgba(59, 130, 246, 0.10),
                    transparent 30%
                ),
                #f8fafc;
        }

        .hero-container {
            max-width: 1200px;
            margin: auto;

            display: grid;
            grid-template-columns: 1.1fr 0.9fr;

            align-items: center;
            gap: 70px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 8px 14px;

            background: #eff6ff;
            color: #2563eb;

            border: 1px solid #dbeafe;
            border-radius: 30px;

            font-size: 14px;
            font-weight: 700;

            margin-bottom: 22px;
        }

        .badge-dot {
            width: 8px;
            height: 8px;

            background: #22c55e;
            border-radius: 50%;
        }

        .hero h1 {
            font-size: clamp(42px, 5vw, 68px);
            line-height: 1.08;

            letter-spacing: -2px;

            margin-bottom: 24px;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero-description {
            max-width: 620px;

            color: #64748b;

            font-size: 18px;
            line-height: 1.8;

            margin-bottom: 32px;
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            gap: 14px;

            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 14px 23px;

            background: #2563eb;
            color: white;

            border-radius: 9px;

            font-weight: 700;
            font-size: 15px;

            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.20);

            transition: 0.25s;
        }

        .btn-primary:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            justify-content: center;

            padding: 14px 23px;

            background: white;
            color: #334155;

            border: 1px solid #cbd5e1;
            border-radius: 9px;

            font-weight: 700;
            font-size: 15px;

            transition: 0.25s;
        }

        .btn-secondary:hover {
            border-color: #2563eb;
            color: #2563eb;
            transform: translateY(-2px);
        }

        /* =========================
           DASHBOARD PREVIEW
        ========================= */

        .hero-preview {
            position: relative;
        }

        .dashboard-card {
            background: white;

            border: 1px solid #e2e8f0;
            border-radius: 18px;

            padding: 20px;

            box-shadow:
                0 25px 60px rgba(15, 23, 42, 0.10),
                0 5px 15px rgba(15, 23, 42, 0.04);

            transform: rotate(1deg);
        }

        .preview-top {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding-bottom: 18px;
            margin-bottom: 18px;

            border-bottom: 1px solid #e2e8f0;
        }

        .preview-title {
            font-size: 18px;
            font-weight: 800;
        }

        .preview-menu {
            display: flex;
            gap: 5px;
        }

        .preview-menu span {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #cbd5e1;
        }

        .preview-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;

            margin-bottom: 18px;
        }

        .preview-stat {
            padding: 15px;

            background: #f8fafc;

            border: 1px solid #e2e8f0;
            border-radius: 10px;
        }

        .preview-stat small {
            color: #64748b;
            font-size: 12px;
        }

        .preview-stat strong {
            display: block;

            font-size: 25px;

            margin-top: 5px;
        }

        .preview-table {
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            overflow: hidden;
        }

        .preview-row {
            display: grid;
            grid-template-columns: 1.5fr 1fr 0.8fr;

            align-items: center;

            padding: 14px;

            border-bottom: 1px solid #e2e8f0;

            font-size: 13px;
        }

        .preview-row:last-child {
            border-bottom: none;
        }

        .company {
            font-weight: 700;
        }

        .status {
            display: inline-block;

            padding: 5px 9px;

            border-radius: 20px;

            font-size: 11px;
            font-weight: 700;

            background: #dcfce7;
            color: #15803d;
        }

        .status.interview {
            background: #dbeafe;
            color: #1d4ed8;
        }

        /* =========================
           TRUST BAR
        ========================= */

        .trust {
            padding: 25px;

            background: white;

            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        .trust-inner {
            max-width: 1000px;
            margin: auto;

            display: flex;
            justify-content: center;
            align-items: center;

            gap: 45px;
            flex-wrap: wrap;
        }

        .trust-item {
            color: #64748b;
            font-size: 14px;
            font-weight: 600;
        }

        /* =========================
           FEATURES
        ========================= */

        .features {
            padding: 100px 25px;
            background: white;
        }

        .section-container {
            max-width: 1200px;
            margin: auto;
        }

        .section-heading {
            max-width: 650px;
            margin: 0 auto 55px;

            text-align: center;
        }

        .section-label {
            color: #2563eb;

            font-size: 13px;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: 1.5px;

            margin-bottom: 12px;
        }

        .section-heading h2 {
            font-size: 40px;
            line-height: 1.2;

            margin-bottom: 15px;
        }

        .section-heading p {
            color: #64748b;
            line-height: 1.7;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .feature-card {
            padding: 32px;

            background: #f8fafc;

            border: 1px solid #e2e8f0;
            border-radius: 15px;

            transition: 0.25s;
        }

        .feature-card:hover {
            transform: translateY(-6px);

            border-color: #bfdbfe;

            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.07);
        }

        .feature-icon {
            width: 52px;
            height: 52px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #eff6ff;
            color: #2563eb;

            border-radius: 12px;

            font-size: 25px;

            margin-bottom: 22px;
        }

        .feature-card h3 {
            font-size: 19px;
            margin-bottom: 12px;
        }

        .feature-card p {
            color: #64748b;
            line-height: 1.7;
            font-size: 15px;
        }

        /* =========================
           HOW IT WORKS
        ========================= */

        .how-it-works {
            padding: 100px 25px;

            background: #f8fafc;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 30px;
        }

        .step {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 55px;
            height: 55px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 20px;

            background: #2563eb;
            color: white;

            border-radius: 50%;

            font-size: 18px;
            font-weight: 800;
        }

        .step h3 {
            margin-bottom: 10px;
        }

        .step p {
            color: #64748b;
            line-height: 1.6;
        }

        /* =========================
           CTA
        ========================= */

        .cta {
            padding: 100px 25px;

            background: #0f172a;

            text-align: center;

            color: white;
        }

        .cta-container {
            max-width: 700px;
            margin: auto;
        }

        .cta h2 {
            font-size: 42px;
            margin-bottom: 18px;
        }

        .cta p {
            color: #94a3b8;
            font-size: 17px;
            line-height: 1.7;

            margin-bottom: 30px;
        }

        .cta .btn-primary {
            box-shadow: none;
        }

        /* =========================
           FOOTER
        ========================= */

        footer {
            background: #020617;
            color: #94a3b8;

            padding: 28px 25px;

            text-align: center;

            font-size: 14px;
        }

        footer strong {
            color: white;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-preview {
                max-width: 600px;
                width: 100%;
                margin: auto;
            }

            .feature-grid,
            .steps {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 650px) {

            .navbar-inner {
                padding: 15px;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .nav-dashboard {
                padding: 8px 12px;
            }

            .hero {
                padding: 75px 20px;
            }

            .hero h1 {
                font-size: 42px;
            }

            .section-heading h2 {
                font-size: 32px;
            }

            .cta h2 {
                font-size: 32px;
            }

            .preview-row {
                grid-template-columns: 1.2fr 1fr 0.8fr;
                font-size: 11px;
            }
        }

        @media (max-width: 450px) {

            .logo {
                font-size: 20px;
            }

            .logo-icon {
                width: 35px;
                height: 35px;
            }

            .nav-links a:nth-child(1) {
                display: none;
            }

            .hero h1 {
                font-size: 36px;
            }

            .hero-description {
                font-size: 16px;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
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
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>


                    <!-- Jobs -->
                    <a href="{{ route('applications.index') }}">
                        Jobs
                    </a>


                    <!-- Add Job -->
                    <a href="{{ route('applications.create') }}"
                    class="nav-dashboard">
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
                                        font-size: 15px;
                                        font-weight: 600;
                                        cursor: pointer;
                                        padding: 10px 5px;
                                    ">
                                Logout
                            </button>

                        </form>
                    @endauth

                     <div class="user-details">

                        <div class="welcome-text">
                            Welcome, {{ auth()->user()->name }}
                        </div>

                        <div class="user-email">
                            {{ auth()->user()->email }}
                        </div>

                    </div>

                </div>

            </div>

        </nav>  


    <!-- =========================
         HERO
    ========================== -->

    <section class="hero">

        <div class="hero-container">

            <div class="hero-content">

                <div class="badge">

                    <span class="badge-dot"></span>

                    Smart Job Application Tracker

                </div>

                <h1>
                    Take Control of Your
                    <span>Job Search</span>
                </h1>

                <p class="hero-description">

                    Keep every job application organized,
                    track your progress, manage interviews
                    and never lose track of your next career
                    opportunity.

                </p>

                <div class="hero-buttons">

                    <a href="{{ route('applications.create') }}"
                       class="btn-primary">

                        + Add Your First Application

                    </a>

                    <a href="{{ route('applications.index') }}"
                       class="btn-secondary">

                        View Applications →

                    </a>

                </div>

            </div>


            <!-- Dashboard Preview -->

            <div class="hero-preview">

                <div class="dashboard-card">

                    <div class="preview-top">

                        <div class="preview-title">
                            JobTrack Overview
                        </div>

                        <div class="preview-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>


                    <div class="preview-stats">

                        <div class="preview-stat">

                            <small>
                                Applications
                            </small>

                          <strong>{{ $totalApplications }}</strong>

                        </div>

                        <div class="preview-stat">

                            <small>
                                Interviews
                            </small>

                            <strong>{{ $interviews }}</strong>

                        </div>

                        <div class="preview-stat">

                            <small>
                                Selected
                            </small>

                           <strong>{{ $selected }}</strong>

                        </div>

                        <div class="preview-stat">

                            <small>
                                Pending
                            </small>

                            <strong>{{ $applied }}</strong>

                        </div>

                    </div>


                    {{-- <div class="preview-table">

                        <div class="preview-row">

                            <span class="company">
                                Google
                            </span>

                            <span>
                                Developer
                            </span>

                            <span>
                                <small class="status interview">
                                    Interview
                                </small>
                            </span>

                        </div>

                        <div class="preview-row">

                            <span class="company">
                                Microsoft
                            </span>

                            <span>
                                Software Engineer
                            </span>

                            <span>
                                <small class="status">
                                    Applied
                                </small>
                            </span>

                        </div>

                        <div class="preview-row">

                            <span class="company">
                                Infosys
                            </span>

                            <span>
                                Laravel Developer
                            </span>

                            <span>
                                <small class="status">
                                    Applied
                                </small>
                            </span>

                        </div>

                    </div> --}}

                    <div class="preview-table">

                            @forelse($recentApplications as $application)

                                <div class="preview-row">

                                    <span class="company">
                                        {{ $application->company_name }}
                                    </span>

                                    <span>
                                        {{ $application->job_title }}
                                    </span>

                                    <span>

                                        <small class="status
                                            {{ $application->status === 'Interview' ? 'interview' : '' }}
                                            {{ $application->status === 'Selected' ? 'selected' : '' }}
                                            {{ $application->status === 'Rejected' ? 'rejected' : '' }}
                                        ">

                                            {{ $application->status }}

                                        </small>

                                    </span>

                                </div>

                            @empty

                                <div style="
                                    padding: 25px;
                                    text-align: center;
                                    color: #64748b;
                                    font-size: 14px;
                                ">

                                    No applications yet.

                                </div>

                            @endforelse

                        </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         TRUST BAR
    ========================== -->

    <section class="trust">

        <div class="trust-inner">

            <div class="trust-item">
                ✓ Organize Applications
            </div>

            <div class="trust-item">
                ✓ Track Interviews
            </div>

            <div class="trust-item">
                ✓ Manage Resumes
            </div>

            <div class="trust-item">
                ✓ Monitor Progress
            </div>

        </div>

    </section>


    <!-- =========================
         FEATURES
    ========================== -->

    <section class="features">

        <div class="section-container">

            <div class="section-heading">

                <div class="section-label">
                    Features
                </div>

                <h2>
                    Everything You Need
                    to Manage Your Job Search
                </h2>

                <p>
                    JobTrack gives you a simple and organized
                    way to manage your entire job application
                    process.
                </p>

            </div>


            <div class="feature-grid">

                <div class="feature-card">

                    <div class="feature-icon">
                        💼
                    </div>

                    <h3>
                        Manage Applications
                    </h3>

                    <p>
                        Add company details, job titles,
                        locations, salary information and
                        application dates in one place.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        📊
                    </div>

                    <h3>
                        Track Your Progress
                    </h3>

                    <p>
                        Easily track applications through
                        Applied, Interview, Selected and
                        Rejected stages.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        📄
                    </div>

                    <h3>
                        Store Documents
                    </h3>

                    <p>
                        Keep resumes and other important
                        application documents connected
                        with your job records.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        🔎
                    </div>

                    <h3>
                        Find Applications
                    </h3>

                    <p>
                        Keep your job applications organized
                        so you can quickly find the information
                        you need.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        📅
                    </div>

                    <h3>
                        Track Application Dates
                    </h3>

                    <p>
                        Remember when you applied and keep
                        your job search timeline organized.
                    </p>

                </div>


                <div class="feature-card">

                    <div class="feature-icon">
                        ⚡
                    </div>

                    <h3>
                        Simple & Fast
                    </h3>

                    <p>
                        A clean interface designed to make
                        managing your job search quick and
                        straightforward.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         HOW IT WORKS
    ========================== -->

    <section class="how-it-works">

        <div class="section-container">

            <div class="section-heading">

                <div class="section-label">
                    How It Works
                </div>

                <h2>
                    Start Tracking in 3 Simple Steps
                </h2>

                <p>
                    Managing your applications doesn't
                    need to be complicated.
                </p>

            </div>


            <div class="steps">

                <div class="step">

                    <div class="step-number">
                        1
                    </div>

                    <h3>
                        Add Application
                    </h3>

                    <p>
                        Enter the company, job title,
                        location and other details.
                    </p>

                </div>


                <div class="step">

                    <div class="step-number">
                        2
                    </div>

                    <h3>
                        Track Progress
                    </h3>

                    <p>
                        Update the status as your
                        application moves forward.
                    </p>

                </div>


                <div class="step">

                    <div class="step-number">
                        3
                    </div>

                    <h3>
                        Get Organized
                    </h3>

                    <p>
                        Manage all your applications
                        from your JobTrack dashboard.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================
         CTA
    ========================== -->

    <section class="cta">

        <div class="cta-container">

            <h2>
                Ready to Organize Your Job Search?
            </h2>

            <p>
                Start tracking your applications today
                and keep every opportunity organized
                in one place.
            </p>

            <a href="{{ route('applications.create') }}"
               class="btn-primary">

                Start Tracking Jobs →

            </a>

        </div>

    </section>


    <!-- =========================
         FOOTER
    ========================== -->

    <footer>

        © {{ date('Y') }}

        <strong>JobTrack</strong>.

        Built with Laravel.

    </footer>

</body>
</html>