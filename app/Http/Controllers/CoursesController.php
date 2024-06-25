<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\UserCourse;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $userId = $id;
        
            $coursesId = UserCourse::where('users_id', $userId)->pluck('courses_id')->toArray();
        
            if (empty($coursesId)) {
                return response()->json(['error' => 'No courses found for the user'], 404);
            }
        
            $courses = Course::whereIn('id', $coursesId)->get();
        
            return response()->json($courses);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
