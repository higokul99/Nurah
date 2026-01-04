<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Collection;
use App\Models\Attribute;
use App\Models\ProductVariant;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['variants', 'images'])->latest()->paginate(10);
        return view('admin.products', compact('products'));
    }

    public function create()
    {
        $collections = Collection::all();
        $families = Attribute::where('type', 'family')->get();
        $notes = Attribute::where('type', 'note')->get();
        return view('admin.products.create', compact('collections', 'families', 'notes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|in:active,draft',
            'variants' => 'array',
            'media.*' => 'mimes:webp',
        ]);

        $product = Product::create($request->only([
            'title', 'description', 'status', 'type', 'vendor', 
            'collection_id', 'gender', 'olfactory_family', 
            'intensity', 'oil_concentration', 'notes_top', 'notes_heart', 'notes_base'
        ]));

        // Handle Variants
        if ($request->has('variant_data')) {
            foreach ($request->variant_data as $size => $data) {
                if (isset($data['enabled'])) {
                    $product->variants()->create([
                        'size' => $size,
                        'stock' => $data['stock'] ?? 0,
                        'price' => $data['price'],
                        'compare_at_price' => $data['compare_at_price'],
                    ]);
                }
            }
        }

        // Handle Media Uploads
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('products', 'public');
                $product->images()->create([
                    'path' => $path,
                    'type' => 'image', // simplified for now
                    'order' => 0
                ]);
            }
        }
        
        // Handle Media URLs (if any, implemented later via generic input)

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::with(['variants', 'images' => function($query) {
            $query->orderBy('order', 'asc');
        }])->findOrFail($id);
        $collections = Collection::all();
        $families = Attribute::where('type', 'family')->get();
        $notes = Attribute::where('type', 'note')->get();
        return view('admin.products.edit', compact('product', 'collections', 'families', 'notes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
             'media.*' => 'mimes:webp',
        ]);

        $product = Product::findOrFail($id);
        
        $product->update($request->only([
            'title', 'description', 'status', 'type', 'vendor', 
            'collection_id', 'gender', 'olfactory_family', 
            'intensity', 'oil_concentration', 'notes_top', 'notes_heart', 'notes_base'
        ]));

        // Sync Variants
        $existingSizes = [];
        if ($request->has('variant_data')) {
            foreach ($request->variant_data as $size => $data) {
                if (isset($data['enabled'])) {
                    $existingSizes[] = $size;
                    $product->variants()->updateOrCreate(
                        ['size' => $size],
                        [
                            'stock' => $data['stock'] ?? 0,
                            'price' => $data['price'],
                            'compare_at_price' => $data['compare_at_price'],
                        ]
                    );
                }
            }
        }
        // Delete variants not in the submitted list
        $product->variants()->whereNotIn('size', $existingSizes)->delete();

        // Handle Deleted Media
        if ($request->has('deleted_images')) {
            foreach ($request->deleted_images as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image && $image->product_id == $product->id) {
                    Storage::disk('public')->delete($image->path);
                    $image->delete();
                }
            }
        }

        // Handle New Media
        if ($request->hasFile('media')) {
            foreach ($request->file('media') as $file) {
                $path = $file->store('products', 'public');
                $product->images()->create([
                    'path' => $path,
                    'type' => 'image',
                    'order' => 0
                ]);
            }
        }

        return redirect()->route('admin.products')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        // Delete images from storage
        foreach($product->images as $image) {
            Storage::disk('public')->delete($image->path);
        }
        $product->delete();
        return redirect()->route('admin.products')->with('success', 'Product deleted successfully.');
    }
}
