<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $sliders = \App\Models\Slider::where('status', true)
            ->orderBy('order', 'asc')
            ->get();

        $bestsellers = \App\Models\HomeProduct::with(['product.variants', 'product.images'])
            ->orderBy('sort_order', 'asc')
            ->get();
            
        return view('nurah.home', compact('sliders', 'bestsellers'));
    }

    public function collection(Request $request)
    {
        $title = 'Fresh Perfumes';

        if ($request->has('category')) {
            $category = $request->query('category');
            if ($category == 'fresh') $title = 'Fresh Collection';
            elseif ($category == 'oriental-woody') $title = 'Oriental & Woody Collection';
            elseif ($category == 'floral') $title = 'Floral Collection';
        } elseif ($request->has('gender')) {
            $gender = $request->query('gender');
            if ($gender == 'for-him') $title = 'Perfumes For Him';
            elseif ($gender == 'for-her') $title = 'Perfumes For Her';
            elseif ($gender == 'unisex') $title = 'Unisex Collection';
        }

        return view('nurah.collection', ['title' => $title]);
    }

    public function allProducts()
    {
        $products = \App\Models\Product::where('status', 'active')
            ->with(['variants', 'images'])
            ->latest()
            ->paginate(12);

        return view('nurah.all-products', [
            'title' => 'All Products',
            'products' => $products
        ]);
    }

    public function cosmopolitan()
    {
        return view('nurah.collection', ['title' => 'Cosmopolitan Collection']);
    }

    public function product()
    {
        return view('nurah.product-main');
    }
}
