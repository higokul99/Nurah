@extends('layouts.admin')

@section('title', 'Create Bundle')

@section('content')
<div class="max-w-4xl mx-auto pb-10">
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.bundles') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-xl font-bold text-gray-900">Create bundle</h1>
    </div>

    <form action="#" method="POST" class="space-y-6">
        
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Title -->
                 <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                     <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="e.g. Summer Essentials Bundle">
                        </div>
                         <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            <textarea rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                        </div>
                     </div>
                </div>

                <!-- Products -->
                <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                    <h2 class="font-semibold text-gray-700 text-sm mb-4">Products</h2>
                    <div class="space-y-4">
                        <div class="relative">
                            <i class="fas fa-search absolute left-3 top-2.5 text-gray-400 text-sm"></i>
                            <input type="text" class="w-full pl-9 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Search products...">
                        </div>
                        
                        <div class="border border-gray-200 rounded-lg divide-y divide-gray-100">
                             <div class="p-3 flex items-center gap-3">
                                <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                                <div class="flex-1">
                                    <span class="text-sm font-medium text-gray-900">Midnight Oud 50ml</span>
                                    <p class="text-xs text-gray-500">₹ 250.00</p>
                                </div>
                                <button type="button" class="text-gray-400 hover:text-red-500"><i class="fas fa-times"></i></button>
                            </div>
                             <div class="p-3 flex items-center gap-3">
                                <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                    <i class="fas fa-image text-gray-400"></i>
                                </div>
                                <div class="flex-1">
                                    <span class="text-sm font-medium text-gray-900">Rose & Amber Gift Set</span>
                                    <p class="text-xs text-gray-500">₹ 450.00</p>
                                </div>
                                <button type="button" class="text-gray-400 hover:text-red-500"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Right Column -->
            <div class="space-y-6">
                 <!-- Status -->
                <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                    <h2 class="font-semibold text-gray-700 text-sm mb-4">Status</h2>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        <option>Active</option>
                        <option>Draft</option>
                    </select>
                </div>

                 <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                     <h2 class="font-semibold text-gray-700 text-sm mb-4">Bundle Discount</h2>
                     <div class="grid grid-cols-1 gap-4">
                         <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Discount type</label>
                             <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                <option>Percentage</option>
                                <option>Fixed price</option>
                            </select>
                         </div>
                         <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Discount value</label>
                            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="10">
                         </div>
                     </div>
                </div>

                <!-- Summary -->
                 <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                    <h2 class="font-semibold text-gray-700 text-sm mb-4">Summary</h2>
                    <ul class="list-disc list-inside text-xs text-gray-600 space-y-1">
                        <li>2 products</li>
                        <li>Original price: ₹ 700.00</li>
                        <li>Discount: 10%</li>
                        <li class="font-bold text-gray-900 pt-1">Final Price: ₹ 630.00</li>
                    </ul>
                </div>
            </div>
         </div>
        
        <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
             <button type="button" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Discard</button>
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-green-800 transition-colors">Save bundle</button>
        </div>

    </form>
</div>
@endsection
