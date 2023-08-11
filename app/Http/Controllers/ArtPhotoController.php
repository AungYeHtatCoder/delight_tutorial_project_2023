<?php

namespace App\Http\Controllers;

use App\Models\ArtPhoto;
use App\Models\Plan;
use Illuminate\Http\Request;
use App\Http\Requests\ArtPhotoRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ArtPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tr_codes = 'BASIC';
    $art_photos = ArtPhoto::whereHas('plans', function ($query) use ($tr_codes) {
    $query->where('code', $tr_codes);
})->get();


    return view('admin.art_photo.index', compact('art_photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plans = Plan::all()->pluck('plan_name', 'id');
        return view('admin.art_photo.create', compact('plans'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArtPhotoRequest $request)
    {
        $data = $request->validated();
        $data['created_by'] = $request->user()->id;
        $data['updated_by'] = $request->user()->id;

        /** @var \Illuminate\Http\UploadedFile $image */
        $image = $data['photo'] ?? null;
    if ($image) {
        $relativePath = $this->saveImage($image);
        $data['photo'] = URL::to(Storage::url($relativePath));
        $data['photo_mime'] = $image->getClientMimeType();
        $data['photo_size'] = $image->getSize();
    }

    $art_photo = ArtPhoto::create($data);
    $art_photo->plans()->sync($request->input('plans', []));

    return redirect()->route('admin.artphotos.index')->with('toast_success', 'New ArtPhoto created successfully');
}



    /**
     * Display the specified resource.
     */
    public function show(ArtPhoto $artPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArtPhoto $artPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArtPhoto $artPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArtPhoto $artPhoto)
    {
        //
    }


    public function saveImage(UploadedFile $image)
    {
        $path = 'images/' . Str::random();
        //$path = 'images/product_image';

        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 0755, true);
        }
        if (!Storage::putFileAS('public/' . $path, $image, $image->getClientOriginalName())) {
            throw new \Exception("Unable to save file \"{$image->getClientOriginalName()}\"");
        }

        return $path . '/' . $image->getClientOriginalName();
    }
}