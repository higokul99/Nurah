@extends('layouts.admin')

@section('title', 'Reviews')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Product Reviews</h1>
            <p class="text-sm text-gray-500 mt-1">Manage, approve, and reply to customer reviews.</p>
        </div>
        <!-- Tabs -->
        <div class="flex bg-white rounded-lg p-1 border border-gray-200 shadow-sm">
            <button class="px-4 py-1.5 text-sm font-medium rounded-md bg-gray-100 text-gray-800 shadow-sm">All</button>
            <button class="px-4 py-1.5 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50">Pending <span class="ml-1 bg-yellow-100 text-yellow-800 px-1.5 rounded-full text-xs">2</span></button>
            <button class="px-4 py-1.5 text-sm font-medium rounded-md text-gray-600 hover:bg-gray-50">Published</button>
        </div>
    </div>

    <!-- Reviews List -->
    <div class="bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
        <div class="divide-y divide-gray-200">
            
            <!-- Review 1 (Pending) -->
            <div class="p-6 transition-colors hover:bg-gray-50">
                <div class="flex gap-4 items-start">
                    <!-- Product Image -->
                    <div class="w-12 h-12 bg-gray-100 rounded border border-gray-200 flex-shrink-0">
                        <img src="https://myop.in/cdn/shop/files/White_Oud_copy_2.png?v=1728469796&width=300" class="w-full h-full object-cover rounded">
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900">White Oud</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">by <span class="font-medium text-gray-700">Ravi Kumar</span></span>
                                    <span class="text-xs text-gray-400">• 2 hours ago</span>
                                </div>
                            </div>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                                Pending
                            </span>
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            "Absolutely love the fragrance. Lasts all day and feels very premium. Highly recommended for daily wear!"
                        </p>

                        <!-- Actions -->
                        <div class="flex items-center gap-3 mt-4 pt-4 border-t border-dashed border-gray-200">
                            <button class="text-xs font-semibold text-green-700 hover:text-green-800 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-check"></i> Approve
                            </button>
                            <button class="text-xs font-semibold text-gray-500 hover:text-gray-700 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-eye-slash"></i> Hide
                            </button>
                            <button class="text-xs font-semibold text-red-600 hover:text-red-800 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review 2 (Published) -->
             <div class="p-6 transition-colors hover:bg-gray-50">
                <div class="flex gap-4 items-start">
                    <!-- Product Image -->
                    <div class="w-12 h-12 bg-gray-100 rounded border border-gray-200 flex-shrink-0">
                         <img src="https://myop.in/cdn/shop/files/sea_breeze.webp?v=1723701659&width=300" class="w-full h-full object-cover rounded">
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900">Sea Breeze</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">by <span class="font-medium text-gray-700">Sarah J.</span></span>
                                    <span class="text-xs text-gray-400">• Yesterday</span>
                                </div>
                            </div>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                Published
                            </span>
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            "Refreshing scent, perfect for summer. Taking one star off because the delivery was slightly delayed."
                        </p>

                         <!-- Actions -->
                        <div class="flex items-center gap-3 mt-4 pt-4 border-t border-dashed border-gray-200">
                            <button class="text-xs font-semibold text-gray-500 hover:text-gray-700 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-eye-slash"></i> Hide
                            </button>
                            <button onclick="toggleReply('reply-2')" class="text-xs font-semibold text-blue-600 hover:text-blue-800 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-reply"></i> Reply
                            </button>
                        </div>

                         <!-- Reply Box -->
                        <div id="reply-2" class="hidden mt-4 bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-green-500 focus:border-green-500" placeholder="Write a reply to the customer..."></textarea>
                            <div class="flex justify-end gap-2 mt-3">
                                <button onclick="toggleReply('reply-2')" class="px-3 py-1.5 bg-white border border-gray-300 text-gray-700 rounded text-xs font-medium hover:bg-gray-100">Cancel</button>
                                <button class="px-3 py-1.5 bg-green-700 text-white rounded text-xs font-medium hover:bg-green-800">Send Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Review 3 (Pending) -->
            <div class="p-6 transition-colors hover:bg-gray-50">
                <div class="flex gap-4 items-start">
                    <!-- Product Image -->
                    <div class="w-12 h-12 bg-gray-100 rounded border border-gray-200 flex-shrink-0">
                       <img src="https://myop.in/cdn/shop/files/Oud_Al_Arab_2.png?v=1731580214&width=300" class="w-full h-full object-cover rounded">
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-900">Oud Al Arab</h3>
                                <div class="flex items-center gap-2 mt-1">
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i> <!-- Empty Start -->
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-xs text-gray-500">by <span class="font-medium text-gray-700">Anonymous</span></span>
                                    <span class="text-xs text-gray-400">• 3 hours ago</span>
                                </div>
                            </div>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                                Pending
                            </span>
                        </div>
                        
                        <p class="mt-3 text-sm text-gray-600 leading-relaxed">
                            "Too strong for my taste. Not what I expected based on the description."
                        </p>

                        <!-- Actions -->
                        <div class="flex items-center gap-3 mt-4 pt-4 border-t border-dashed border-gray-200">
                            <button class="text-xs font-semibold text-green-700 hover:text-green-800 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-check"></i> Approve
                            </button>
                             <button class="text-xs font-semibold text-gray-500 hover:text-gray-700 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-eye-slash"></i> Hide
                            </button>
                             <button onclick="toggleReply('reply-3')" class="text-xs font-semibold text-blue-600 hover:text-blue-800 uppercase tracking-wide flex items-center gap-1">
                                <i class="fas fa-reply"></i> Reply
                            </button>
                        </div>
                        
                        <!-- Reply Box -->
                        <div id="reply-3" class="hidden mt-4 bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-green-500 focus:border-green-500" placeholder="Write a reply to the customer..."></textarea>
                            <div class="flex justify-end gap-2 mt-3">
                                <button onclick="toggleReply('reply-3')" class="px-3 py-1.5 bg-white border border-gray-300 text-gray-700 rounded text-xs font-medium hover:bg-gray-100">Cancel</button>
                                <button class="px-3 py-1.5 bg-green-700 text-white rounded text-xs font-medium hover:bg-green-800">Send Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    function toggleReply(id) {
        const el = document.getElementById(id);
        if (el.classList.contains('hidden')) {
            el.classList.remove('hidden');
        } else {
            el.classList.add('hidden');
        }
    }
</script>
@endsection
