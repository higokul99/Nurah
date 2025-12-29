@extends('layouts.admin')

@section('title', 'Blog & Articles')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Blog & Articles</h1>
            <p class="text-sm text-gray-500 mt-1">Manage your blog posts and news articles.</p>
        </div>
        <a href="{{ route('admin.blog.create') }}" class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-800 transition-colors flex w-fit items-center">
            <i class="fas fa-plus mr-2"></i> Create New Post
        </a>
    </div>

    <div class="card bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-gray-50 border-b border-gray-100 text-xs uppercase text-gray-500 font-semibold">
                    <th class="p-4">Post Details</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Date</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <!-- Post 1 -->
                <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gray-200 rounded-md overflow-hidden flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1615634260167-c8cdede054de?w=150&q=80" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 text-sm mb-1">The Art of Layering Scents</h3>
                                <p class="text-xs text-gray-500">Expert tips on combining fragrances.</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span> Published
                        </span>
                    </td>
                    <td class="p-4 text-sm text-gray-600">
                        Oct 24, 2024
                    </td>
                    <td class="p-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.blog.edit', 1) }}" class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></a>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Post 2 -->
                 <tr class="hover:bg-gray-50 transition-colors group">
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gray-200 rounded-md overflow-hidden flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1595425235483-360e2ceb002c?w=150&q=80" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 text-sm mb-1">Top 5 Winter Fragrances for 2024</h3>
                                <p class="text-xs text-gray-500">Discover this season's most captivating scents.</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                         <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span> Published
                        </span>
                    </td>
                    <td class="p-4 text-sm text-gray-600">
                        Dec 15, 2024
                    </td>
                    <td class="p-4 text-right">
                        <div class="flex justify-end gap-2">
                            <a href="{{ route('admin.blog.edit', 1) }}" class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></a>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

                <!-- Post 3 (Draft) -->
                 <tr class="hover:bg-gray-50 transition-colors group bg-gray-50/50">
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-gray-100 rounded-md overflow-hidden flex-shrink-0 flex items-center justify-center border border-gray-200">
                                <i class="fas fa-image text-gray-300"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800 text-sm mb-1">Understanding Ouds: An Introduction</h3>
                                <p class="text-xs text-gray-500">A beginner's guide to the world of Oud.</p>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                            <span class="w-1.5 h-1.5 rounded-full bg-gray-500"></span> Draft
                        </span>
                    </td>
                    <td class="p-4 text-sm text-gray-600">
                        -
                    </td>
                    <td class="p-4 text-right">
                        <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></button>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection
