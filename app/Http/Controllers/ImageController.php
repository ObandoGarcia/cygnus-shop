<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\CreateImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::paginate(10);

        return view('image.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateImageRequest $request)
    {
        $validatedData = $request->validated();

        $image = new Image();
        $image->filename = $validatedData['filename'];
        $image->url = $validatedData['url'];
        $image->user_id = 1;
        $image->save();

        return redirect()->route('image.index')->with('success', 'Imagen creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        //
    }
}
