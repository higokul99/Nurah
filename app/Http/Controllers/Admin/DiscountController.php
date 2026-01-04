<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::latest()->paginate(10);
        return view('admin.discounts.index', compact('discounts'));
    }

    public function create()
    {
        $products = Product::where('status', 'active')->get();
        return view('admin.discounts.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:discounts,code|max:255',
            'type' => 'required|in:percentage,fixed',
            'value' => 'required|numeric|min:0',
            'status' => 'required|in:active,draft,archived',
            'starts_at' => 'required|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
            'products' => 'nullable|array',
            'products.*' => 'exists:products,id',
        ]);

        $discount = Discount::create($request->only([
            'code', 'type', 'value', 'status', 'starts_at', 'ends_at', 'usage_limit'
        ]));

        if ($request->has('products')) {
            $discount->products()->attach($request->products);
        }

        return redirect()->route('admin.discounts')->with('success', 'Discount created successfully.');
    }

    public function edit($id)
    {
        $discount = Discount::with('products')->findOrFail($id);
        $products = Product::where('status', 'active')->get();
        return view('admin.discounts.edit', compact('discount', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'code' => 'required|string|max:255|unique:discounts,code,' . $id,
            'type' => 'required|in:percentage,fixed',
            'value' => 'required|numeric|min:0',
            'status' => 'required|in:active,draft,archived',
            'starts_at' => 'required|date',
            'ends_at' => 'nullable|date|after_or_equal:starts_at',
            'products' => 'nullable|array',
            'products.*' => 'exists:products,id',
        ]);

        $discount = Discount::findOrFail($id);
        $discount->update($request->only([
            'code', 'type', 'value', 'status', 'starts_at', 'ends_at', 'usage_limit'
        ]));

        if ($request->has('products')) {
            $discount->products()->sync($request->products);
        } else {
            $discount->products()->detach();
        }

        return redirect()->route('admin.discounts')->with('success', 'Discount updated successfully.');
    }

    public function destroy($id)
    {
        $discount = Discount::findOrFail($id);
        $discount->delete();
        return redirect()->route('admin.discounts')->with('success', 'Discount deleted successfully.');
    }
}
