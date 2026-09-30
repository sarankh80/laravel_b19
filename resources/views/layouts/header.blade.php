 <!-- Top Announcement Bar -->
    <div class="bg-slate-900 text-white text-xs py-2 px-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <p class="truncate flex items-center gap-2">
                <span class="bg-brand-500 text-white px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider">New</span>
                <span>Summer Collection is live! Enjoy <strong>20% OFF</strong> with code <code class="bg-slate-800 px-1.5 py-0.5 rounded text-amber-300 font-mono">SUMMER20</code></span>
            </p>
            <div class="hidden md:flex items-center gap-6 text-slate-300">
                <a href="#sale" class="hover:text-white transition">Flash Deals</a>
                <a href="#reviews" class="hover:text-white transition">Reviews</a>
                <a href="#newsletter" class="hover:text-white transition">Support</a>
                <div class="border-l border-slate-700 h-3"></div>
                <div class="flex items-center gap-2 cursor-pointer hover:text-white">
                    <i class="fa-solid me-1 fa-globe"></i> USD ($)
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Navigation Header -->
    <header class="sticky top-0 z-40 glass border-b border-slate-200/80 transition-all duration-300" id="mainHeader">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 gap-4">
                
                <!-- Logo -->
                <div class="flex items-center gap-8">
                    <a href="#" class="flex items-center gap-2 text-2xl font-black tracking-tight text-slate-900 group">
                        <div class="w-10 h-10 rounded-xl bg-brand-600 flex items-center justify-center text-white shadow-md shadow-brand-500/30 group-hover:scale-105 transition">
                            <i class="fa-solid fa-gem text-lg"></i>
                        </div>
                        <span>AURA<span class="text-brand-600">.</span></span>
                    </a>

                    <!-- Desktop Nav Links -->
                    <nav class="hidden lg:flex items-center gap-8 font-medium text-sm text-slate-600">
                        <a href="#featured" class="hover:text-brand-600 transition">Shop All</a>
                        <a href="#categories" class="hover:text-brand-600 transition">Categories</a>
                        <a href="#sale" class="hover:text-brand-600 transition text-rose-600 font-semibold flex items-center gap-1.5">
                            <i class="fa-solid fa-bolt text-xs"></i> Flash Sale
                        </a>
                        <a href="{{ route('about') }}" class="hover:text-brand-600 transition">Our Story</a>
                    </nav>
                </div>

                <!-- Search Input Bar -->
                <div class="flex-1 max-w-md hidden md:block">
                    <div class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="text" id="searchInput" onkeyup="filterProducts()" placeholder="Search luxury goods, electronics, fashion..." 
                            class="w-full pl-11 pr-10 py-2.5 text-sm bg-slate-100/80 border border-transparent rounded-full focus:bg-white focus:border-brand-500 focus:outline-none focus:ring-4 focus:ring-brand-500/10 transition">
                        <button id="clearSearchBtn" onclick="clearSearch()" class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                </div>

                <!-- Header Action Buttons -->
                <div class="flex items-center gap-3 sm:gap-4">
                    
                    <!-- Search button for mobile -->
                    <button class="md:hidden p-2.5 rounded-full hover:bg-slate-100 text-slate-700" onclick="toggleMobileSearch()">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>

                    <!-- Wishlist Button -->
                    <button onclick="toggleWishlistDrawer()" class="relative p-2.5 rounded-full hover:bg-slate-100 text-slate-700 transition" title="Wishlist">
                        <i class="fa-regular fa-heart text-xl"></i>
                        <span id="wishlistBadge" class="hidden absolute top-1 right-1 bg-rose-500 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center border-2 border-white">0</span>
                    </button>

                    <!-- Cart Button -->
                    <button onclick="toggleCartDrawer()" class="relative p-2.5 rounded-full hover:bg-slate-100 text-slate-700 transition" title="Shopping Cart">
                        <i class="fa-solid fa-bag-shopping text-xl"></i>
                        <span id="cartBadge" class="absolute top-1 right-1 bg-brand-600 text-white text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center border-2 border-white">0</span>
                    </button>

                    <div class="hidden sm:block border-l border-slate-200 h-6"></div>

                    <!-- User Account -->
                    <button class="hidden sm:flex items-center gap-2 p-1.5 pl-2 pr-3 rounded-full border border-slate-200 hover:border-slate-300 transition text-sm font-medium text-slate-700">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&auto=format&fit=crop&q=80" alt="User avatar" class="w-7 h-7 rounded-full object-cover">
                        <span>Alex M.</span>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button onclick="toggleMobileMenu()" class="lg:hidden p-2 rounded-lg text-slate-700 hover:bg-slate-100">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile Search Bar Expanded -->
            <div id="mobileSearchBar" class="hidden pb-4 md:hidden">
                <div class="relative">
                    <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                    <input type="text" id="mobileSearchInput" onkeyup="syncMobileSearch()" placeholder="Search products..." 
                        class="w-full pl-11 pr-4 py-2.5 text-sm bg-slate-100 border border-transparent rounded-full focus:bg-white focus:border-brand-500 focus:outline-none">
                </div>
            </div>
        </div>
    </header>
