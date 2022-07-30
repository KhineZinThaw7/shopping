<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->only('name', 'price', 'description'));

        // upload multiple image
        foreach($request->file('images') as $file) {
            $filename = time() . '_' . $file->getClientOriginalName();
            $dir = '/upload/images';
            $path = $file->storeAs($dir, $filename);

            $product->images()->create([
                'path' => $path,
            ]);
        }
    
        $product->categories()->attach($request->categories);

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->only(['name', 'price', 'description']));

        // upload multiple image
        if ($request->hasFile('images')) {
            foreach ($request->images as $file) {
                // delete old image
                if ($product->images) {
                    foreach ($product->images as $image) {
                        Storage::delete($image->path);
                        $product->images()->delete();
                    }
                }

                $filename = time() . '_' . $file->getClientOriginalName();
                $dir = '/upload/images';
                $path = $file->storeAs($dir, $filename);

                $product->images()->create([
                'path' => $path,
                    ]);
            }
        }

        $product->categories()->sync($request->categories);

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        // delete product's image
        if ($product->images) {
            foreach ($product->images as $image) {
                Storage::delete($image->path);
                $product->images()->delete();
            }
        }

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully!');
    }
}
