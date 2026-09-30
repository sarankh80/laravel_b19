@extends('layouts.front')
@section('content')
<!-- Hero Banner Section -->
    <section class="relative bg-slate-900 text-white overflow-hidden">
        <div class="absolute inset-0 opacity-30 bg-[radial-gradient(#4f46e5_1px,transparent_1px)] [background-size:16px_16px]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold bg-brand-500/20 text-brand-300 border border-brand-500/30">
                        <i class="fa-solid fa-sparkles"></i> New Season Arrivals 2026
                    </span>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                        Redefining Modern <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-300 via-indigo-200 to-rose-300">Everyday Luxury</span>
                    </h1>
                    <p class="text-slate-300 text-base sm:text-lg max-w-xl mx-auto lg:mx-0 font-light">
                        Discover curated tech, minimalist fashion, and minimalist home design crafted with sustainable materials and uncompromising quality.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#featured" class="w-full sm:w-auto px-8 py-4 bg-brand-600 hover:bg-brand-500 text-white font-semibold rounded-xl shadow-lg shadow-brand-600/30 hover:shadow-brand-600/50 transition transform hover:-translate-y-0.5 text-center">
                            Explore Collection
                        </a>
                        <a href="#sale" class="w-full sm:w-auto px-8 py-4 bg-slate-800 hover:bg-slate-700 text-white font-semibold rounded-xl border border-slate-700 transition text-center flex items-center justify-center gap-2">
                            <i class="fa-solid fa-play text-xs text-brand-400"></i> Watch Trailer
                        </a>
                    </div>

                    <!-- Value Highlights -->
                    <div class="pt-8 grid grid-cols-3 gap-4 border-t border-slate-800 text-xs sm:text-sm text-slate-400">
                        <div>
                            <p class="text-white font-bold text-lg">Free Delivery</p>
                            <p>On orders over $99</p>
                        </div>
                        <div>
                            <p class="text-white font-bold text-lg">2-Year Warranty</p>
                            <p>100% Guaranteed</p>
                        </div>
                        <div>
                            <p class="text-white font-bold text-lg">30-Day Returns</p>
                            <p>Hassle-free policy</p>
                        </div>
                    </div>
                </div>

                <!-- Hero Graphic Showcase -->
                <div class="lg:col-span-5 relative flex justify-center">
                    <div class="relative w-full max-w-md">
                        <!-- Decorative back circle -->
                        <div class="absolute -inset-4 rounded-3xl bg-gradient-to-tr from-brand-600 to-rose-500 opacity-30 blur-2xl float-animation"></div>
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-700/50 bg-slate-800">
                            <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=800&auto=format&fit=crop&q=80" alt="Featured Product" class="w-full h-80 sm:h-96 object-cover object-center">
                            <div class="absolute bottom-0 inset-x-0 p-6 bg-gradient-to-t from-slate-950/90 via-slate-950/50 to-transparent flex items-center justify-between">
                                <div>
                                    <p class="text-xs uppercase tracking-wider text-brand-300 font-bold">Featured Spotlight</p>
                                    <h3 class="text-lg font-bold text-white">Acoustics Pro Wireless</h3>
                                    <p class="text-sm text-slate-300">$299.00 USD</p>
                                </div>
                                <button onclick="openQuickView(1)" class="p-3 bg-white text-slate-900 rounded-full hover:bg-brand-500 hover:text-white transition shadow-lg">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Navigation Section -->
    <section class="py-12 bg-white border-b border-slate-200" id="categories">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Browse Categories</h2>
                    <p class="text-sm text-slate-500">Explore items tailored to your lifestyle</p>
                </div>
                <button onclick="filterCategory('all')" class="text-brand-600 hover:text-brand-700 text-sm font-semibold flex items-center gap-1">
                    View All Categories <i class="fa-solid fa-angle-right text-xs"></i>
                </button>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                <!-- Electronics Category Card -->
                <button onclick="filterCategory('electronics')" class="category-btn group p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-500/40 hover:bg-brand-50/50 hover:shadow-md transition text-left">
                    <div class="w-12 h-12 rounded-xl bg-indigo-100 text-brand-600 flex items-center justify-center text-xl mb-3 group-hover:scale-110 transition">
                        <i class="fa-solid fa-headphones"></i>
                    </div>
                    <h3 class="font-bold text-slate-800 group-hover:text-brand-600 transition">Electronics</h3>
                    <p class="text-xs text-slate-500 mt-1">12 Products</p>
                </button>

                <!-- Fashion Category Card -->
                <button onclick="filterCategory('fashion')" class="category-btn group p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-500/40 hover:bg-brand-50/50 hover:shadow-md transition text-left">
                    <div class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center text-xl mb-3 group-hover:scale-110 transition">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <h3 class="font-bold text-slate-800 group-hover:text-brand-600 transition">Apparel</h3>
                    <p class="text-xs text-slate-500 mt-1">24 Products</p>
                </button>

                <!-- Wearables Category Card -->
                <button onclick="filterCategory('wearables')" class="category-btn group p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-500/40 hover:bg-brand-50/50 hover:shadow-md transition text-left">
                    <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center text-xl mb-3 group-hover:scale-110 transition">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <h3 class="font-bold text-slate-800 group-hover:text-brand-600 transition">Wearables</h3>
                    <p class="text-xs text-slate-500 mt-1">8 Products</p>
                </button>

                <!-- Home & Office Card -->
                <button onclick="filterCategory('home')" class="category-btn group p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-500/40 hover:bg-brand-50/50 hover:shadow-md transition text-left">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center text-xl mb-3 group-hover:scale-110 transition">
                        <i class="fa-solid fa-couch"></i>
                    </div>
                    <h3 class="font-bold text-slate-800 group-hover:text-brand-600 transition">Home & Living</h3>
                    <p class="text-xs text-slate-500 mt-1">16 Products</p>
                </button>

                <!-- Accessories Card -->
                <button onclick="filterCategory('accessories')" class="category-btn group p-4 rounded-2xl bg-slate-50 border border-slate-100 hover:border-brand-500/40 hover:bg-brand-50/50 hover:shadow-md transition text-left col-span-2 sm:col-span-1">
                    <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-xl mb-3 group-hover:scale-110 transition">
                        <i class="fa-solid fa-glasses"></i>
                    </div>
                    <h3 class="font-bold text-slate-800 group-hover:text-brand-600 transition">Accessories</h3>
                    <p class="text-xs text-slate-500 mt-1">19 Products</p>
                </button>
            </div>
        </div>
    </section>

    <!-- Flash Deals Section -->
    <section class="py-12 bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 text-white" id="sale">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 bg-white/5 border border-white/10 rounded-3xl p-6 md:p-8 backdrop-blur-sm">
                <div class="space-y-2 text-center md:text-left">
                    <div class="inline-flex items-center gap-2 text-amber-400 font-bold uppercase tracking-widest text-xs">
                        <i class="fa-solid fa-fire text-rose-500 animate-bounce"></i> Limited Time Offer
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold">Flash Sale - Up to 40% Off</h2>
                    <p class="text-slate-300 text-sm">Grab premium tech and designer gear before timer expires.</p>
                </div>

                <!-- Timer Component -->
                <div class="flex items-center gap-3 text-center" id="countdownTimer">
                    <div class="bg-slate-800/80 border border-slate-700 px-4 py-3 rounded-2xl min-w-[70px]">
                        <span id="hours" class="text-2xl font-black text-amber-400">08</span>
                        <span class="block text-[10px] uppercase text-slate-400 font-bold">Hours</span>
                    </div>
                    <span class="text-2xl font-bold text-slate-600">:</span>
                    <div class="bg-slate-800/80 border border-slate-700 px-4 py-3 rounded-2xl min-w-[70px]">
                        <span id="minutes" class="text-2xl font-black text-amber-400">42</span>
                        <span class="block text-[10px] uppercase text-slate-400 font-bold">Mins</span>
                    </div>
                    <span class="text-2xl font-bold text-slate-600">:</span>
                    <div class="bg-slate-800/80 border border-slate-700 px-4 py-3 rounded-2xl min-w-[70px]">
                        <span id="seconds" class="text-2xl font-black text-rose-400">19</span>
                        <span class="block text-[10px] uppercase text-slate-400 font-bold">Secs</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Shopping Catalog -->
    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex-1 w-full" id="featured">
        
        <!-- Controls & Filter Toolbar -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-8 border-b border-slate-200">
            <div>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Our Catalog</h2>
                <p class="text-slate-500 text-sm mt-1">Showing <span id="productCount" class="font-bold text-slate-800">8</span> items</p>
            </div>

            <!-- Sorting & View Controls -->
            <div class="flex flex-wrap items-center gap-3">
                
                <!-- Category Filter Pill Buttons -->
                <div class="hidden md:flex items-center bg-slate-100 p-1 rounded-xl text-xs font-semibold">
                    <button onclick="filterCategory('all')" id="btn-cat-all" class="cat-pill px-3 py-2 rounded-lg bg-white text-slate-900 shadow-sm transition">All</button>
                    <button onclick="filterCategory('electronics')" id="btn-cat-electronics" class="cat-pill px-3 py-2 rounded-lg text-slate-600 hover:text-slate-900 transition">Electronics</button>
                    <button onclick="filterCategory('fashion')" id="btn-cat-fashion" class="cat-pill px-3 py-2 rounded-lg text-slate-600 hover:text-slate-900 transition">Fashion</button>
                    <button onclick="filterCategory('wearables')" id="btn-cat-wearables" class="cat-pill px-3 py-2 rounded-lg text-slate-600 hover:text-slate-900 transition">Wearables</button>
                    <button onclick="filterCategory('home')" id="btn-cat-home" class="cat-pill px-3 py-2 rounded-lg text-slate-600 hover:text-slate-900 transition">Home</button>
                </div>

                <!-- Sort Dropdown -->
                <div class="relative min-w-[160px]">
                    <select id="sortSelect" onchange="sortProducts()" class="w-full bg-white border border-slate-200 text-slate-700 text-sm rounded-xl py-2.5 px-3 pr-8 focus:outline-none focus:border-brand-500 font-medium cursor-pointer shadow-sm">
                        <option value="featured">Sort: Featured</option>
                        <option value="low">Price: Low to High</option>
                        <option value="high">Price: High to Low</option>
                        <option value="rating">Highest Rated</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Product Grid Container -->
        <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 pt-8">
            <!-- Dynamic products rendered via JavaScript -->
        </div>

        <!-- Empty State (hidden by default) -->
        <div id="emptyState" class="hidden text-center py-16">
            <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto text-slate-400 text-3xl mb-4">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-800">No products found</h3>
            <p class="text-slate-500 text-sm mt-1 max-w-sm mx-auto">Try adjusting your search terms or filter selections to find what you're looking for.</p>
            <button onclick="resetFilters()" class="mt-6 px-6 py-2.5 bg-brand-600 text-white rounded-xl text-sm font-semibold hover:bg-brand-700 transition">
                Reset Filters
            </button>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-slate-100/70 border-t border-slate-200" id="reviews">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-600">Loved by Thousands</span>
                <h2 class="text-3xl font-extrabold text-slate-900 mt-1">What Our Customers Say</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Review 1 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm gap-1 mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed italic">"The build quality of the Acoustics Pro is phenomenal. Shipping was shockingly fast too — arrived in 2 days in flawless packaging."</p>
                    </div>
                    <div class="flex items-center gap-3 mt-6 pt-4 border-t border-slate-100">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&auto=format&fit=crop&q=80" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-sm text-slate-900">Marcus Vance</h4>
                            <p class="text-xs text-slate-400">Verified Buyer</p>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm gap-1 mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed italic">"AURA has officially become my go-to store. Minimalist design, fantastic customer support, and seamless return policies."</p>
                    </div>
                    <div class="flex items-center gap-3 mt-6 pt-4 border-t border-slate-100">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&auto=format&fit=crop&q=80" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-sm text-slate-900">Elena Rostova</h4>
                            <p class="text-xs text-slate-400">Verified Buyer</p>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-200/80 flex flex-col justify-between">
                    <div>
                        <div class="flex text-amber-400 text-sm gap-1 mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed italic">"Ordered the minimal mechanical keyboard. The tactile feel is incredible for long typing sessions. Highly recommend!"</p>
                    </div>
                    <div class="flex items-center gap-3 mt-6 pt-4 border-t border-slate-100">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&auto=format&fit=crop&q=80" alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        <div>
                            <h4 class="font-bold text-sm text-slate-900">David Chen</h4>
                            <p class="text-xs text-slate-400">Verified Buyer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-brand-600 text-white relative overflow-hidden" id="newsletter">
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10 space-y-6">
            <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center mx-auto text-2xl backdrop-blur-md">
                <i class="fa-regular fa-envelope"></i>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Stay in the Loop</h2>
            <p class="text-brand-100 text-sm sm:text-base max-w-xl mx-auto font-light">
                Subscribe to our insider newsletter to receive exclusive discounts, secret product launches, and editorial design articles.
            </p>
            <form onsubmit="handleSubscribe(event)" class="max-w-md mx-auto flex flex-col sm:flex-row gap-3">
                <input type="email" required placeholder="Enter your email address" 
                    class="flex-1 px-5 py-3.5 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-4 focus:ring-white/30">
                <button type="submit" class="px-8 py-3.5 bg-slate-900 hover:bg-slate-950 text-white font-semibold rounded-xl text-sm transition shadow-lg">
                    Join AURA
                </button>
            </form>
            <p class="text-xs text-brand-200">No spam ever. Unsubscribe anytime with one click.</p>
        </div>
    </section>
@endsection