<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    // Show user's applications
    public function index()
    {
        $applications = JobApplication::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('job-applications.index', compact('applications'));
    }

    // Show create form
    public function create()
    {
        return view('job-applications.create');
    }

    // Store new application
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'salary' => 'nullable|numeric',
            'applied_date' => 'required|date',
            'status' => 'required|in:Applied,Interview,Selected,Rejected',
            'notes' => 'nullable|string',

            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'resume' => 'nullable|mimes:pdf,doc,docx|max:5120',
        ]);

        // Upload photo
        if ($request->hasFile('photo')) {
            $validated['photo'] = $request->file('photo')
                ->store('photos', 'public');
        }

        // Upload resume
        if ($request->hasFile('resume')) {
            $validated['resume'] = $request->file('resume')
                ->store('resumes', 'public');
        }

        // Attach logged-in user
        $validated['user_id'] = auth()->id();

        JobApplication::create($validated);

        return redirect()
            ->route('applications.index')
            ->with('success', 'Job application added successfully!');
    }

    // Show application details
    public function show($id)
    {
        $application = JobApplication::where('user_id', auth()->id())
            ->findOrFail($id);

        return view('job-applications.show', compact('application'));
    }

    // Show edit form
    public function edit($id)
    {
        $application = JobApplication::where('user_id', auth()->id())
            ->findOrFail($id);

        return view('job-applications.edit', compact('application'));
    }

    // Update application
    public function update(Request $request, $id)
    {
        $application = JobApplication::where('user_id', auth()->id())
            ->findOrFail($id);

        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'salary' => 'nullable|numeric',
            'applied_date' => 'required|date',
            'status' => 'required|in:Applied,Interview,Selected,Rejected',
            'notes' => 'nullable|string',

            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'resume' => 'nullable|mimes:pdf,doc,docx|max:5120',
        ]);

        // New photo uploaded
        if ($request->hasFile('photo')) {

            if ($application->photo) {
                Storage::disk('public')->delete($application->photo);
            }

            $validated['photo'] = $request->file('photo')
                ->store('photos', 'public');
        }

        // New resume uploaded
        if ($request->hasFile('resume')) {

            if ($application->resume) {
                Storage::disk('public')->delete($application->resume);
            }

            $validated['resume'] = $request->file('resume')
                ->store('resumes', 'public');
        }

        $application->update($validated);

        return redirect()
            ->route('applications.show', $application->id)
            ->with('success', 'Job application updated successfully!');
    }

    // Delete application
    public function destroy($id)
    {
        $application = JobApplication::where('user_id', auth()->id())
            ->findOrFail($id);

        // Delete photo
        if ($application->photo) {
            Storage::disk('public')->delete($application->photo);
        }

        // Delete resume
        if ($application->resume) {
            Storage::disk('public')->delete($application->resume);
        }

        // Delete database record
        $application->delete();

        return redirect()
            ->route('applications.index')
            ->with('success', 'Job application deleted successfully!');
    }
}