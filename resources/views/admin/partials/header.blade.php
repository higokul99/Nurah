<header class="bg-white border-b border-gray-200 h-14 flex items-center justify-between px-4 sm:px-6 lg:px-8 shrink-0">
    <div class="flex items-center flex-1 max-w-2xl">
        <div class="relative w-full max-w-md">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-gray-400">
                <i class="fas fa-search text-sm"></i>
            </span>
            <input type="text" class="block w-full pl-10 pr-3 py-1.5 border border-gray-300 rounded-md leading-5 bg-gray-50 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 sm:text-sm transition duration-150 ease-in-out" placeholder="Search">
        </div>
    </div>
    <div class="flex items-center gap-4">
        <button class="text-gray-400 hover:text-gray-600 p-1 relative">
            <i class="fas fa-bell"></i>
            <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
        </button>
        <div class="flex items-center gap-2 cursor-pointer">
            <div class="w-8 h-8 rounded bg-green-700 text-white flex items-center justify-center text-sm font-medium">SA</div>
            <span class="text-sm font-medium text-gray-700 hidden sm:block">Admin</span>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST" class="ml-2">
            @csrf
            <button type="submit" class="text-gray-400 hover:text-red-600 p-1" title="Logout">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div>
</header>
