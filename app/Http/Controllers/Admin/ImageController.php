<?php
namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use App\Http\Requests\CreateImageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $images = $product->images;

        return view('admin.images.index', compact('product', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        return view('admin.images.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateImageRequest $request, Product $product)
    {
        $validatedData = $request->validated();

        $image = new Image();
        $image->filename = $validatedData['filename'];
        $image->url = $validatedData['url'];
        $image->product_id = $product->id;
        $image->user_id = 1;
        $image->save();

        return redirect()->route('admin.products.images.index', $product)->with('success', 'Imagen creada correctamente');
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
