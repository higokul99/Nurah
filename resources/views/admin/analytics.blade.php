@extends('layouts.admin')

@section('title', 'Analytics')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-xl font-semibold text-gray-800">Analytics</h1>
    <div class="flex items-center gap-2 border border-gray-300 rounded-md bg-white px-3 py-1.5 shadow-sm text-sm cursor-pointer hover:bg-gray-50">
        <i class="far fa-calendar text-gray-400"></i>
        <span class="text-gray-700">Last 30 days</span>
        <i class="fas fa-chevron-down text-gray-400 text-xs ml-1"></i>
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <!-- Total Sales -->
    <div class="card bg-white rounded-lg p-6 border border-gray-200">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-xs font-semibold uppercase text-gray-500">Total Sales</h3>
            <span class="text-xs text-blue-600 hover:text-blue-800 cursor-pointer">View Report</span>
        </div>
        <div class="text-2xl font-bold text-gray-900 mb-1">₹45,231.00</div>
        <div class="text-sm text-green-600 font-medium">
             <i class="fas fa-arrow-up mr-1"></i> 12%
             <span class="text-gray-400 font-normal ml-1">vs previous period</span>
        </div>
        <!-- Dummy Chart Line -->
        <div class="h-12 mt-4 flex items-end gap-1">
             @foreach([30, 45, 35, 60, 50, 70, 55, 80, 65, 90, 75, 100] as $h)
             <div class="flex-1 bg-blue-50 hover:bg-blue-100 transition-colors h-full flex items-end rounded-sm group relative">
                 <div class="w-full bg-blue-500 rounded-sm" style="height: {{ $h }}%"></div>
                 <!-- Tooltip -->
                 <div class="absolute bottom-full left-1/2 -translate-x-1/2 mb-1 hidden group-hover:block bg-gray-800 text-white text-[10px] px-2 py-1 rounded">₹{{ $h * 100 }}</div>
             </div>
             @endforeach
        </div>
    </div>

    <!-- Online Store Sessions -->
    <div class="card bg-white rounded-lg p-6 border border-gray-200">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-xs font-semibold uppercase text-gray-500">Online Store Sessions</h3>
            <span class="text-xs text-blue-600 hover:text-blue-800 cursor-pointer">View Report</span>
        </div>
        <div class="text-2xl font-bold text-gray-900 mb-1">10,234</div>
        <div class="text-sm text-red-600 font-medium">
             <i class="fas fa-arrow-down mr-1"></i> 3%
             <span class="text-gray-400 font-normal ml-1">vs previous period</span>
        </div>
         <div class="h-12 mt-4 flex items-end gap-1">
             @foreach([60, 55, 70, 50, 45, 65, 60, 55, 50, 60, 70, 65] as $h)
             <div class="flex-1 bg-gray-50 hover:bg-gray-100 transition-colors h-full flex items-end rounded-sm">
                 <div class="w-full bg-indigo-400 rounded-sm" style="height: {{ $h }}%"></div>
             </div>
             @endforeach
        </div>
    </div>

    <!-- Conversion Rate -->
    <div class="card bg-white rounded-lg p-6 border border-gray-200">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-xs font-semibold uppercase text-gray-500">Returning Customer Rate</h3>
            <span class="text-xs text-blue-600 hover:text-blue-800 cursor-pointer">View Report</span>
        </div>
        <div class="text-2xl font-bold text-gray-900 mb-1">15.45%</div>
        <div class="text-sm text-green-600 font-medium">
             <i class="fas fa-arrow-up mr-1"></i> 5%
             <span class="text-gray-400 font-normal ml-1">vs previous period</span>
        </div>
        <div class="h-12 mt-4 flex items-end gap-1">
             @foreach([20, 25, 20, 30, 35, 30, 40, 45, 40, 50, 55, 60] as $h)
             <div class="flex-1 bg-gray-50 hover:bg-gray-100 transition-colors h-full flex items-end rounded-sm">
                 <div class="w-full bg-teal-400 rounded-sm" style="height: {{ $h }}%"></div>
             </div>
             @endforeach
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    
    <!-- Top Products -->
    <div class="card bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
        <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
            <h3 class="font-semibold text-gray-700 text-sm">Top Selling Products</h3>
            <span class="text-xs text-gray-500">Last 30 days</span>
        </div>
        <table class="w-full text-left text-sm">
            <thead class="bg-gray-50 text-xs uppercase font-medium text-gray-500 border-b border-gray-100">
                <tr>
                    <th class="px-4 py-3">Product</th>
                    <th class="px-4 py-3 text-right">Units Sold</th>
                    <th class="px-4 py-3 text-right">Revenue</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-900">Midnight Oud 50ml</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-right text-gray-600">45</td>
                    <td class="px-4 py-3 text-right font-medium text-gray-900">₹1,89,000</td>
                </tr>
                 <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-900">Jasmine Musk Oil</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-right text-gray-600">32</td>
                    <td class="px-4 py-3 text-right font-medium text-gray-900">₹44,800</td>
                </tr>
                 <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-4 py-3">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-900">Rose & Amber Gift Set</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-right text-gray-600">18</td>
                    <td class="px-4 py-3 text-right font-medium text-gray-900">₹1,53,000</td>
                </tr>
            </tbody>
        </table>
        <div class="p-3 border-t border-gray-100 text-center">
             <button class="text-xs text-blue-600 hover:underline">View all products</button>
        </div>
    </div>

    <!-- Sessions by Device -->
     <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
        <h3 class="font-semibold text-gray-700 text-sm mb-4">Sessions by Device</h3>
        <div class="flex items-center justify-center h-48 relative">
            <!-- Simple CSS Donut Chart -->
            <div class="w-32 h-32 rounded-full border-[12px] border-blue-500 relative" style="border-right-color: #3b82f6; border-top-color: #ef4444; border-bottom-color: #3b82f6; border-left-color: #10b981; transform: rotate(45deg);"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <span class="text-2xl font-bold text-gray-900">10.2k</span>
                <span class="text-xs text-gray-500">Total</span>
            </div>
        </div>
        <div class="flex justify-center gap-6 mt-4">
            <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-blue-500"></span>
                <span class="text-sm text-gray-600">Mobile (65%)</span>
            </div>
             <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                <span class="text-sm text-gray-600">Desktop (25%)</span>
            </div>
             <div class="flex items-center gap-2">
                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                <span class="text-sm text-gray-600">Tablet (10%)</span>
            </div>
        </div>
    </div>

</div>
@endsection
