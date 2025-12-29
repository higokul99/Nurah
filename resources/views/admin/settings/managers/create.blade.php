@extends('layouts.admin')

@section('title', 'Add Site Manager')

@section('content')
<div class="max-w-2xl mx-auto">
    <!-- Header -->
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.settings.managers') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-2xl font-bold text-gray-800">Add Site Manager</h1>
    </div>

    <form class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6 space-y-6">
        
        <!-- Name -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="e.g. John Doe">
        </div>

        <!-- Email -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="e.g. john@example.com">
        </div>

        <!-- Password -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
            </div>
        </div>

        <!-- Permissions (Mock) -->
        <div>
            <span class="block text-sm font-medium text-gray-700 mb-3">Permissions</span>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <label class="flex items-center gap-2">
                    <input type="checkbox" checked class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Orders</span>
                </label>
                 <label class="flex items-center gap-2">
                    <input type="checkbox" checked class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Products</span>
                </label>
                 <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Collections</span>
                </label>
                 <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Bundles</span>
                </label>
                 <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Discounts</span>
                </label>
                 <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Hero Section</span>
                </label>
                 <label class="flex items-center gap-2">
                    <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                    <span class="text-sm text-gray-700">Manage Reviews</span>
                </label>
            </div>
        </div>

        <div class="pt-4 border-t border-gray-100 flex justify-end gap-3">
             <a href="{{ route('admin.settings.managers') }}" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Cancel</a>
            <button type="button" class="bg-green-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-green-800 transition-colors">Create Manager</button>
        </div>

    </form>
</div>
@endsection
