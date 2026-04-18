<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ReportController;
<<<<<<< HEAD
use App\Http\Controllers\StudentController;
=======
use App\Http\Controllers\StudentController; // Ensure this is imported
>>>>>>> 3789cedb9a592f7d3901a78aaeb1ba123778b451

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

<<<<<<< HEAD
// Public routes (no authentication required)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    
    // ========== AUTHENTICATION ==========
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    // ========== USER MANAGEMENT ==========
    Route::apiResource('users', UserController::class);
    
    // ========== STUDENT MANAGEMENT ==========
    Route::apiResource('students', StudentController::class);
    
    // ========== APPLICANT MANAGEMENT ==========
    // Standard CRUD operations
    Route::apiResource('applicants', ApplicantController::class);
    
    // ========== ADMIN ONLY - APPROVE/REJECT ROUTES ==========
    Route::prefix('admin')->group(function () {
        // Get all applicants with filters (admin only)
        Route::get('/applicants', [ApplicantController::class, 'adminIndex']);
        
        // Approve an applicant
        Route::put('/applicants/{id}/approve', [ApplicantController::class, 'approve']);
        
        // Reject an applicant
        Route::put('/applicants/{id}/reject', [ApplicantController::class, 'reject']);
        
        // Bulk approve multiple applicants
        Route::post('/applicants/bulk-approve', [ApplicantController::class, 'bulkApprove']);
        
        // Bulk reject multiple applicants
        Route::post('/applicants/bulk-reject', [ApplicantController::class, 'bulkReject']);
        
        // Get statistics dashboard
        Route::get('/statistics', [ApplicantController::class, 'statistics']);
    });
    
    // ========== STUDENT ONLY - MY APPLICANTS ==========
    // Students can view their own applications
    Route::get('/my-applicants', [ApplicantController::class, 'myApplicants']);
    Route::get('/my-applicants/{id}', [ApplicantController::class, 'showMyApplicant']);
    Route::put('/my-applicants/{id}', [ApplicantController::class, 'updateMyApplicant']);
    Route::delete('/my-applicants/{id}', [ApplicantController::class, 'deleteMyApplicant']);
    
    // ========== SCHOLARSHIP MANAGEMENT ==========
    Route::apiResource('scholarships', ScholarshipController::class);
    
    // Additional scholarship routes
    Route::get('/scholarships/available', [ScholarshipController::class, 'available']);
    Route::get('/scholarships/statistics', [ScholarshipController::class, 'statistics']);
    Route::get('/scholarships/{id}/applicants', [ScholarshipController::class, 'getApplicants']);
    Route::get('/scholarships/{id}/applicants/{status}', [ScholarshipController::class, 'getApplicantsByStatus']);
    Route::put('/scholarships/{id}/applicants/{applicantId}/status', [ScholarshipController::class, 'updateApplicantStatus']);
    
    // ========== REQUIREMENT MANAGEMENT ==========
    Route::apiResource('requirements', RequirementController::class);
    
    // ========== APPLICATION MANAGEMENT ==========
    Route::apiResource('applications', ApplicationController::class);
    
    // ========== DOCUMENT MANAGEMENT ==========
    Route::apiResource('documents', DocumentController::class);
    
    // ========== REPORTS ==========
=======
// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Fixed the typo here: removed the stray 'a' after AuthController::class, 'user'
    Route::get('/user', [AuthController::class, 'user']);

    // Resource routes
    Route::apiResource('users', UserController::class);
    Route::apiResource('students', StudentController::class); // ADDED THIS
    Route::apiResource('applicants', ApplicantController::class);
    Route::apiResource('scholarships', ScholarshipController::class);
    Route::apiResource('requirements', RequirementController::class);
    Route::apiResource('applications', ApplicationController::class);
    Route::apiResource('documents', DocumentController::class);

    // Reports
>>>>>>> 3789cedb9a592f7d3901a78aaeb1ba123778b451
    Route::get('/reports/applicants', [ReportController::class, 'applicantReport']);
    Route::get('/reports/scholarships', [ReportController::class, 'scholarshipReport']);
    Route::get('/reports/approved', [ReportController::class, 'approvedScholars']);
});