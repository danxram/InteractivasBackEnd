<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\UserCourse;
use App\Models\UserEvent;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
            $userId = $id;
        
            $eventsId = UserCourse::where('users_id', $userId)->pluck('courses_id')->toArray();
        
            if (empty($eventsId)) {
                return response()->json(['error' => 'No events found for the user'], 404);
            }
        
            $events = Event::whereIn('courses_id', $eventsId)->get();
            //primera conuslta


            $trafics= UserEvent::where('client_users_id', $userId)->pluck('events_id')->toArray();
        
            if (empty($trafics)) {
                return response()->json(['error' => 'No events found for the user'], 404);
            }
        
            $trafics = Event::whereIn('id', $trafics)
            ->orderBy('date', 'asc')->get();
            //segunda consulta

            


            return response()->json([
                'events' => $events,
                'trafics' => $trafics
            ]);
        
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
