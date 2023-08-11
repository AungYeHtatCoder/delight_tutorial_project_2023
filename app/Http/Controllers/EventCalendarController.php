<?php

namespace App\Http\Controllers;

use App\Models\EventCalendar;
use Illuminate\Http\Request;

class EventCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //     $events = EventCalendar::all(['id', 'title', 'start_date', 'end_date', 'description', 'location']);
    // return response()->json($events);
    $events = EventCalendar::all();

    $formattedEvents = [];

    foreach ($events as $event) {
        $formattedEvents[] = [
            'title' => $event->title,
            'start' => $event->start_date,
            'end' => $event->end_date,
            'description' => $event->description,
            // Add other fields you want to display in the calendar
        ];
    }

    //return response()->json($formattedEvents);
    return view('admin.event.new', compact('formattedEvents'));
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
        $event = new EventCalendar();
    $event->title = $request->title;
    $event->start_date = $request->start_date;
    $event->end_date = $request->end_date;
    $event->description = $request->description;
    $event->location = $request->location;
    $event->save();

    return response()->json(['message' => 'Event created successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(EventCalendar $eventCalendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EventCalendar $eventCalendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EventCalendar $eventCalendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EventCalendar $eventCalendar)
    {
        //
    }
}