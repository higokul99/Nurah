@extends('layouts.admin')

@section('title', 'Bundles')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-xl font-semibold text-gray-800">Bundles</h1>
    <button class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-800 transition-colors shadow-sm">Create bundle</button>
</div>

<div class="card bg-white rounded-lg border border-gray-200 shadow-sm min-h-[400px] flex flex-col items-center justify-center p-8 text-center text-gray-500">
    <div class="bg-gray-100 p-4 rounded-full mb-4">
        <i class="fas fa-boxes text-3xl text-gray-400"></i>
    </div>
    <h3 class="text-lg font-medium text-gray-900 mb-1">Manage your bundles</h3>
    <p class="max-w-sm mb-6">Group products together to sell them as a single unit or offer volume discounts.</p>
    <button class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-800 transition-colors shadow-sm">Create bundle</button>
</div>
@endsection
