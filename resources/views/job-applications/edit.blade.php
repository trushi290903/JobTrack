<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Job - JobTrack</title>

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
            max-width: 1000px;
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

        .page-header {
            margin-bottom: 28px;
        }

        .page-header h1 {
            margin: 0 0 8px;
            font-size: 32px;
            font-weight: 800;
        }

        .page-header p {
            margin: 0;
            color: #687386;
            font-size: 15px;
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

        .error-summary {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            border-radius: 10px;
            padding: 14px 18px;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .form-card {
            background: white;
            border: 1px solid #e8ebf2;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 10px 30px rgba(20, 30, 60, 0.06);
        }

        .section-title {
            font-size: 18px;
            font-weight: 750;
            margin: 0 0 22px;
            color: #172033;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 22px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        label {
            margin-bottom: 8px;
            font-size: 14px;
            font-weight: 700;
            color: #374151;
        }

        label span {
            color: #ef4444;
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 1px solid #d9deea;
            border-radius: 10px;
            padding: 12px 14px;
            font-size: 14px;
            color: #172033;
            background: #fff;
            outline: none;
            transition: 0.2s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.10);
        }

        textarea {
            min-height: 130px;
            resize: vertical;
        }

        .current-file {
            margin-top: 10px;
            padding: 12px;
            border-radius: 10px;
            background: #f8fafc;
            border: 1px solid #edf0f5;
        }

        .current-file-title {
            display: block;
            font-size: 12px;
            color: #7b8494;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .current-photo {
            width: 120px;
            height: 90px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .file-link {
            color: #2563eb;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }

        .file-link:hover {
            text-decoration: underline;
        }

        .help-text {
            margin-top: 7px;
            color: #7a8495;
            font-size: 12px;
        }

        .error {
            margin-top: 6px;
            color: #dc2626;
            font-size: 13px;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid #edf0f5;
        }

        .action-right {
            display: flex;
            gap: 10px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
            border: none;
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

            .form-card {
                padding: 22px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: auto;
            }

            .page-header h1 {
                font-size: 27px;
            }

            .actions,
            .action-right {
                flex-direction: column;
            }

            .actions .btn,
            .action-right .btn {
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


    <!-- Main -->
    <main class="page">

        <a
            href="{{ route('applications.show', $application->id) }}"
            class="back-link"
        >
            ← Back to Job Details
        </a>


        <div class="page-header">

            <h1>Edit Job Application</h1>

            <p>
                Update the details of your
                <strong>{{ $application->company_name }}</strong>
                application.
            </p>

        </div>


        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif


        <div class="form-card">

            <h2 class="section-title">
                Application Details
            </h2>


            @if ($errors->any())

                <div class="error-summary">

                    <strong>Please fix the following errors:</strong>

                    <ul style="margin: 8px 0 0 18px;">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>

                </div>

            @endif


            <form
                action="{{ route('applications.update', $application->id) }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                <div class="form-grid">

                    <!-- Company -->
                    <div class="form-group">

                        <label for="company_name">
                            Company Name <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="company_name"
                            name="company_name"
                            value="{{ old('company_name', $application->company_name) }}"
                            placeholder="e.g. Google"
                            required
                        >

                        @error('company_name')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Job Title -->
                    <div class="form-group">

                        <label for="job_title">
                            Job Title <span>*</span>
                        </label>

                        <input
                            type="text"
                            id="job_title"
                            name="job_title"
                            value="{{ old('job_title', $application->job_title) }}"
                            placeholder="e.g. Laravel Developer"
                            required
                        >

                        @error('job_title')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Location -->
                    <div class="form-group">

                        <label for="location">
                            Location
                        </label>

                        <input
                            type="text"
                            id="location"
                            name="location"
                            value="{{ old('location', $application->location) }}"
                            placeholder="e.g. Ahmedabad / Remote"
                        >

                        @error('location')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Salary -->
                    <div class="form-group">

                        <label for="salary">
                            Salary
                        </label>

                        <input
                            type="number"
                            id="salary"
                            name="salary"
                            value="{{ old('salary', $application->salary) }}"
                            placeholder="e.g. 50000"
                            min="0"
                            step="0.01"
                        >

                        @error('salary')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Applied Date -->
                    <div class="form-group">

                        <label for="applied_date">
                            Applied Date <span>*</span>
                        </label>

                        <input
                            type="date"
                            id="applied_date"
                            name="applied_date"
                            value="{{ old('applied_date', $application->applied_date) }}"
                            required
                        >

                        @error('applied_date')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Status -->
                    <div class="form-group">

                        <label for="status">
                            Application Status <span>*</span>
                        </label>

                        <select
                            id="status"
                            name="status"
                            required
                        >

                            <option value="Applied"
                                {{ old('status', $application->status) == 'Applied' ? 'selected' : '' }}>
                                Applied
                            </option>

                            <option value="Interview"
                                {{ old('status', $application->status) == 'Interview' ? 'selected' : '' }}>
                                Interview
                            </option>

                            <option value="Selected"
                                {{ old('status', $application->status) == 'Selected' ? 'selected' : '' }}>
                                Selected
                            </option>

                            <option value="Rejected"
                                {{ old('status', $application->status) == 'Rejected' ? 'selected' : '' }}>
                                Rejected
                            </option>

                        </select>

                        @error('status')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Notes -->
                    <div class="form-group full-width">

                        <label for="notes">
                            Notes
                        </label>

                        <textarea
                            id="notes"
                            name="notes"
                            placeholder="Add interview details, recruiter information, follow-up notes, etc."
                        >{{ old('notes', $application->notes) }}</textarea>

                        @error('notes')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Photo -->
                    <div class="form-group">

                        <label for="photo">
                            Replace Photo
                        </label>

                        <input
                            type="file"
                            id="photo"
                            name="photo"
                            accept=".jpg,.jpeg,.png,.webp"
                        >

                        <div class="help-text">
                            Leave empty to keep the current photo.
                        </div>


                        @if ($application->photo)

                            <div class="current-file">

                                <span class="current-file-title">
                                    Current Photo
                                </span>

                                <img
                                    src="{{ asset('storage/' . $application->photo) }}"
                                    alt="Current Job Photo"
                                    class="current-photo"
                                >

                            </div>

                        @endif


                        @error('photo')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>


                    <!-- Resume -->
                    <div class="form-group">

                        <label for="resume">
                            Replace Resume
                        </label>

                        <input
                            type="file"
                            id="resume"
                            name="resume"
                            accept=".pdf,.doc,.docx"
                        >

                        <div class="help-text">
                            Leave empty to keep the current resume.
                        </div>


                        @if ($application->resume)

                            <div class="current-file">

                                <span class="current-file-title">
                                    Current Resume
                                </span>

                                <a
                                    href="{{ asset('storage/' . $application->resume) }}"
                                    target="_blank"
                                    class="file-link"
                                >
                                    View Current Resume
                                </a>

                            </div>

                        @endif


                        @error('resume')
                            <div class="error">{{ $message }}</div>
                        @enderror

                    </div>

                </div>


                <!-- Buttons -->
                <div class="actions">

                    <a
                        href="{{ route('applications.show', $application->id) }}"
                        class="btn btn-secondary"
                    >
                        Cancel
                    </a>


                    <div class="action-right">

                        <a
                            href="{{ route('applications.index') }}"
                            class="btn btn-secondary"
                        >
                            Back to Jobs
                        </a>

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            ✓ Update Job
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </main>

</body>
</html>