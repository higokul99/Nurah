@extends('layouts.admin')

@section('title', 'Collections')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
    <h1 class="text-xl font-semibold text-gray-800">Collections</h1>
    <a href="{{ route('admin.collections.create') }}" class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-800 transition-colors shadow-sm w-fit">Create collection</a>
</div>

<div class="card bg-white rounded-lg border border-gray-200 shadow-sm">
    <div class="p-0 overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-gray-50 text-xs uppercase font-medium text-gray-500 border-b border-gray-200">
                 <tr>
                    <th class="px-6 py-3 w-16"><input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500"></th>
                    <th class="px-6 py-3">Title</th>
                    <th class="px-6 py-3">Products</th>
                    <th class="px-6 py-3">Conditions</th>
                    <th class="px-6 py-3 w-20"></th>
                 </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition-colors cursor-pointer group" onclick="window.location='{{ route('admin.collections.show', 1) }}'">
                    <td class="px-6 py-4" onclick="event.stopPropagation()"><input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500"></td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center overflow-hidden">
                                <!-- Placeholder Image -->
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-800 hover:underline">Best Sellers</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">12 products</td>
                    <td class="px-6 py-4">Manual</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2" onclick="event.stopPropagation()">
                            <a href="{{ route('admin.collections.show', 1) }}" class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></a>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                 <tr class="hover:bg-gray-50 transition-colors cursor-pointer group" onclick="window.location='{{ route('admin.collections.show', 2) }}'">
                    <td class="px-6 py-4" onclick="event.stopPropagation()"><input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500"></td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center overflow-hidden">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-800 hover:underline">New Arrivals</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">8 products</td>
                    <td class="px-6 py-4">Automated</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2" onclick="event.stopPropagation()">
                            <a href="{{ route('admin.collections.show', 2) }}" class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></a>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
