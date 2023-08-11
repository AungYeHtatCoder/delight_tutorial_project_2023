<?php

namespace App\Http\Controllers;

use App\Models\MotionVideo;
use Illuminate\Http\Request;

class MotionVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.motion_video.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.motion_video.create');
        
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
    public function show(MotionVideo $motionVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MotionVideo $motionVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MotionVideo $motionVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MotionVideo $motionVideo)
    {
        //
    }
}