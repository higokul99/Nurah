@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<!-- Welcome Section -->
<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Dashboard</h1>
        <p class="text-sm text-gray-500 mt-1"> Overview of your store's performance.</p>
    </div>
    <div class="flex items-center gap-3">
        <span class="text-sm text-gray-500 bg-white border border-gray-200 px-3 py-1.5 rounded-md shadow-sm">
            <i class="far fa-calendar-alt mr-2 text-gray-400"></i> Today, {{ date('M d, Y') }}
        </span>
    </div>
</div>

<!-- Metrics Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Sales -->
    <div class="card bg-white rounded-lg p-6 border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-green-50 rounded-lg">
                <i class="fas fa-coins text-green-600"></i>
            </div>
            <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full flex items-center">
                <i class="fas fa-arrow-up mr-1"></i> 12%
            </span>
        </div>
        <h3 class="text-sm font-medium text-gray-500 mb-1">Total Sales</h3>
        <span class="text-2xl font-bold text-gray-900">₹45,231.00</span>
        <p class="text-xs text-gray-400 mt-2">vs. ₹40,100 last period</p>
    </div>

    <!-- Total Orders -->
    <div class="card bg-white rounded-lg p-6 border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div class="p-2 bg-blue-50 rounded-lg">
                <i class="fas fa-shopping-bag text-blue-600"></i>
            </div>
            <span class="text-xs font-medium text-blue-600 bg-blue-100 px-2 py-1 rounded-full flex items-center">
                <i class="fas fa-arrow-up mr-1"></i> 8%
            </span>
        </div>
        <h3 class="text-sm font-medium text-gray-500 mb-1">Total Orders</h3>
        <span class="text-2xl font-bold text-gray-900">124</span>
        <p class="text-xs text-gray-400 mt-2">vs. 112 last period</p>
    </div>

    <!-- Customers -->
    <div class="card bg-white rounded-lg p-6 border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
             <div class="p-2 bg-purple-50 rounded-lg">
                <i class="fas fa-users text-purple-600"></i>
            </div>
            <span class="text-xs font-medium text-green-600 bg-green-100 px-2 py-1 rounded-full flex items-center">
                <i class="fas fa-arrow-up mr-1"></i> 4%
            </span>
        </div>
        <h3 class="text-sm font-medium text-gray-500 mb-1">New Customers</h3>
        <span class="text-2xl font-bold text-gray-900">45</span>
        <p class="text-xs text-gray-400 mt-2">vs. 41 last period</p>
    </div>

    <!-- AOV -->
     <div class="card bg-white rounded-lg p-6 border border-gray-200 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
             <div class="p-2 bg-orange-50 rounded-lg">
                <i class="fas fa-chart-line text-orange-600"></i>
            </div>
             <span class="text-xs font-medium text-red-600 bg-red-100 px-2 py-1 rounded-full flex items-center">
                <i class="fas fa-arrow-down mr-1"></i> 2%
            </span>
        </div>
        <h3 class="text-sm font-medium text-gray-500 mb-1">Avg. Order Value</h3>
        <span class="text-2xl font-bold text-gray-900">₹364.00</span>
        <p class="text-xs text-gray-400 mt-2">vs. ₹371.00 last period</p>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- Recent Orders -->
    <div class="lg:col-span-2 card bg-white rounded-lg border border-gray-200 shadow-sm">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center">
            <h2 class="text-base font-semibold text-gray-800">Recent Orders</h2>
            <a href="{{ route('admin.orders') }}" class="text-sm text-green-700 hover:text-green-800 font-medium">View all</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-600">
                <thead class="bg-gray-50 text-xs uppercase font-medium text-gray-500">
                    <tr>
                        <th class="px-5 py-3">Order</th>
                        <th class="px-5 py-3">Customer</th>
                        <th class="px-5 py-3">Total</th>
                        <th class="px-5 py-3">Status</th>
                        <th class="px-5 py-3 text-right">Items</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-4 font-semibold text-gray-800">#1024</td>
                        <td class="px-5 py-4">
                            <div class="flex flex-col">
                                <span class="font-medium text-gray-900">Sarah Jenkins</span>
                                <span class="text-xs text-gray-400">sarah@example.com</span>
                            </div>
                        </td>
                        <td class="px-5 py-4 text-gray-800">₹8,400</td>
                        <td class="px-5 py-4"><span class="px-2.5 py-0.5 rounded-full bg-yellow-100 text-yellow-800 text-xs font-medium">Pending</span></td>
                        <td class="px-5 py-4 text-right">3</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-4 font-semibold text-gray-800">#1023</td>
                        <td class="px-5 py-4">
                             <div class="flex flex-col">
                                <span class="font-medium text-gray-900">Mike Ross</span>
                                <span class="text-xs text-gray-400">mike.r@example.com</span>
                            </div>
                        </td>
                        <td class="px-5 py-4 text-gray-800">₹2,100</td>
                        <td class="px-5 py-4"><span class="px-2.5 py-0.5 rounded-full bg-green-100 text-green-800 text-xs font-medium">Paid</span></td>
                        <td class="px-5 py-4 text-right">1</td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-5 py-4 font-semibold text-gray-800">#1022</td>
                        <td class="px-5 py-4">
                             <div class="flex flex-col">
                                <span class="font-medium text-gray-900">Emma Watson</span>
                                <span class="text-xs text-gray-400">emma.w@example.com</span>
                            </div>
                        </td>
                        <td class="px-5 py-4 text-gray-800">₹12,500</td>
                        <td class="px-5 py-4"><span class="px-2.5 py-0.5 rounded-full bg-green-100 text-green-800 text-xs font-medium">Paid</span></td>
                        <td class="px-5 py-4 text-right">4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Top Products -->
    <div class="card bg-white rounded-lg border border-gray-200 shadow-sm">
        <div class="p-5 border-b border-gray-100">
            <h2 class="text-base font-semibold text-gray-800">Top Products</h2>
        </div>
        <div class="p-5 space-y-5">
            <div class="flex items-center gap-4">
                <div class="h-12 w-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 shadow-sm border border-gray-200">
                    <i class="fas fa-image"></i>
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-medium text-gray-900">Midnight Oud</h4>
                    <p class="text-xs text-gray-500">24 sold this week</p>
                </div>
                <span class="text-sm font-semibold text-gray-800">₹12.5k</span>
            </div>
             <div class="flex items-center gap-4">
                <div class="h-12 w-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 shadow-sm border border-gray-200">
                    <i class="fas fa-image"></i>
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-medium text-gray-900">Rose & Amber</h4>
                    <p class="text-xs text-gray-500">18 sold this week</p>
                </div>
                <span class="text-sm font-semibold text-gray-800">₹8.1k</span>
            </div>
             <div class="flex items-center gap-4">
                <div class="h-12 w-12 bg-gray-100 rounded-lg flex items-center justify-center text-gray-400 shadow-sm border border-gray-200">
                    <i class="fas fa-image"></i>
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-medium text-gray-900">Musk Oil</h4>
                    <p class="text-xs text-gray-500">12 sold this week</p>
                </div>
                <span class="text-sm font-semibold text-gray-800">₹4.2k</span>
            </div>
            <button class="w-full mt-2 py-2 text-sm text-gray-600 border border-gray-200 rounded-md hover:bg-gray-50 transition-colors">View Report</button>
        </div>
    </div>
</div>
@endsection
