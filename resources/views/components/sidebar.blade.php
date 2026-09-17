@props([
    'currentRoute' => null,
])

<aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-[#1E3A8A] text-[#C7D2EE] transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
    <div class="flex flex-col h-full">
        <!-- Logo & Close Button -->
        <div class="p-4 border-b border-[#2d4aa0] flex items-center justify-between">
            <div class="flex items-center">
                <!-- Logo Image - Replace src with your logo path -->
                <img src="/images/logo.png" alt="Smart Locker Logo" class="w-10 h-10 mr-3 rounded-lg" onerror="this.style.display='none'">
                <div>
                    <h1 class="text-lg font-bold text-white">Smart Locker</h1>
                    <p class="text-xs opacity-75">Admin Panel</p>
                </div>
            </div>
            <button id="sidebar-close" class="lg:hidden p-2 hover:bg-[#2d4aa0] rounded-lg transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Search -->
        <div class="p-4">
            <div class="relative">
                <input type="text" placeholder="Search..." class="w-full bg-[#2d4aa0] border border-transparent rounded-lg px-4 py-2 pl-10 text-sm placeholder-[#C7D2EE] focus:outline-none focus:border-[#4a6bba] transition-colors">
                <svg class="w-4 h-4 absolute left-3 top-1/2 transform -translate-y-1/2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 overflow-y-auto px-4">
            <p class="text-xs font-semibold text-[#C7D2EE] opacity-50 uppercase tracking-wider mb-3">Main Menu</p>
            <ul class="space-y-1">
                <li>
                    <a href="/dashboard" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-[#2d4aa0] transition-colors bg-[#2d4aa0] text-white shadow-sm">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="flex-1">Dashboard</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="/locations" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-[#2d4aa0] transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="flex-1">Locations</span>
                        <span class="bg-[#16A34A] text-white text-xs px-2 py-0.5 rounded-full">16</span>
                    </a>
                </li>
                <li>
                    <a href="/lockers" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-[#2d4aa0] transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                        </svg>
                        <span class="flex-1">Lockers</span>
                        <span class="bg-[#2d4aa0] text-white text-xs px-2 py-0.5 rounded-full">162</span>
                    </a>
                </li>
                <li>
                    <a href="/users" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-[#2d4aa0] transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <span class="flex-1">Users</span>
                        <span class="bg-[#2d4aa0] text-white text-xs px-2 py-0.5 rounded-full">1,204</span>
                    </a>
                </li>
            </ul>

            <p class="text-xs font-semibold text-[#C7D2EE] opacity-50 uppercase tracking-wider mb-3 mt-6">Management</p>
            <ul class="space-y-1">
                <li>
                    <a href="/maintenance" class="flex items-center px-4 py-2.5 rounded-lg hover:bg-[#2d4aa0] transition-colors">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="flex-1">Maintenance</span>
                        <span class="bg-[#EA580C] text-white text-xs px-2 py-0.5 rounded-full">42</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- User Info -->
        <div class="p-4 border-t border-[#2d4aa0]">
            <div class="flex items-center p-2 rounded-lg hover:bg-[#2d4aa0] transition-colors cursor-pointer">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-[#3b82f6] to-[#1E3A8A] flex items-center justify-center text-white font-semibold">
                    A
                </div>
                <div class="ml-3 flex-1">
                    <p class="text-sm font-medium text-white">Admin</p>
                    <p class="text-xs opacity-75">Administrator</p>
                </div>
                <svg class="w-4 h-4 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </div>
            <button class="w-full flex items-center justify-center px-4 py-2 rounded-lg hover:bg-[#2d4aa0] transition-colors text-sm text-[#C7D2EE] mt-2">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                </svg>
                Logout
            </button>
        </div>
    </div>
</aside>
