<!-- Cart Drawer Container -->
    <div id="cartOverlay" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300" onclick="toggleCartDrawer()"></div>
    <div id="cartDrawer" class="fixed inset-y-0 right-0 w-full sm:w-[420px] bg-white z-50 shadow-2xl transform translate-x-full transition-transform duration-300 flex flex-col">
        <!-- Cart Drawer Header -->
        <div class="p-6 border-b border-slate-200 flex items-center justify-between bg-slate-50">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-bag-shopping text-brand-600 text-xl"></i>
                <h2 class="text-lg font-bold text-slate-900">Your Shopping Cart</h2>
                <span id="cartDrawerBadge" class="bg-brand-100 text-brand-700 font-bold text-xs px-2 py-0.5 rounded-full">0</span>
            </div>
            <button onclick="toggleCartDrawer()" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-200/50 transition">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <!-- Shipping Progress Bar -->
        <div class="bg-indigo-50/80 px-6 py-3 border-b border-indigo-100 text-xs">
            <p id="freeShippingText" class="text-indigo-900 font-medium mb-1.5">Add <span class="font-bold">$99.00</span> more for FREE Shipping!</p>
            <div class="w-full bg-indigo-200 h-2 rounded-full overflow-hidden">
                <div id="freeShippingBar" class="bg-brand-600 h-full w-0 transition-all duration-500"></div>
            </div>
        </div>

        <!-- Cart Items List Container -->
        <div id="cartItemsList" class="flex-1 overflow-y-auto p-6 space-y-4">
            <!-- Dynamic items rendered via JS -->
        </div>

        <!-- Cart Drawer Footer / Checkout CTA -->
        <div class="p-6 border-t border-slate-200 bg-slate-50 space-y-4">
            <!-- Promo Code Input -->
            <div class="flex gap-2">
                <input type="text" id="couponCodeInput" placeholder="Promo code (e.g. SUMMER20)" class="flex-1 uppercase text-xs px-3 py-2 bg-white border border-slate-200 rounded-lg focus:outline-none focus:border-brand-500">
                <button onclick="applyCoupon()" class="px-4 py-2 bg-slate-800 text-white text-xs font-semibold rounded-lg hover:bg-slate-900 transition">Apply</button>
            </div>

            <!-- Summary Calculations -->
            <div class="space-y-2 text-sm text-slate-600">
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span id="cartSubtotal" class="font-semibold text-slate-900">$0.00</span>
                </div>
                <div class="flex justify-between text-xs">
                    <span>Discount</span>
                    <span id="cartDiscount" class="text-emerald-600 font-medium">-$0.00</span>
                </div>
                <div class="flex justify-between text-xs">
                    <span>Estimated Shipping</span>
                    <span id="cartShipping" class="font-medium text-slate-800">FREE</span>
                </div>
                <div class="border-t border-slate-200 pt-2 flex justify-between text-base font-extrabold text-slate-900">
                    <span>Total Amount</span>
                    <span id="cartTotal" class="text-brand-600">$0.00</span>
                </div>
            </div>

            <button onclick="openCheckoutModal()" class="w-full py-3.5 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-lg shadow-brand-600/30 transition flex items-center justify-center gap-2">
                <span>Proceed to Checkout</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
        </div>
    </div>

    <!-- Wishlist Drawer Container -->
    <div id="wishlistOverlay" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden opacity-0 transition-opacity duration-300" onclick="toggleWishlistDrawer()"></div>
    <div id="wishlistDrawer" class="fixed inset-y-0 right-0 w-full sm:w-[400px] bg-white z-50 shadow-2xl transform translate-x-full transition-transform duration-300 flex flex-col">
        <div class="p-6 border-b border-slate-200 flex items-center justify-between bg-slate-50">
            <div class="flex items-center gap-2">
                <i class="fa-solid fa-heart text-rose-500 text-xl"></i>
                <h2 class="text-lg font-bold text-slate-900">Saved Items</h2>
            </div>
            <button onclick="toggleWishlistDrawer()" class="p-2 text-slate-400 hover:text-slate-600 rounded-lg">
                <i class="fa-solid fa-xmark text-lg"></i>
            </button>
        </div>

        <div id="wishlistItemsList" class="flex-1 overflow-y-auto p-6 space-y-4">
            <!-- Dynamic Wishlist Items rendered via JS -->
        </div>
    </div>

    <!-- Quick View Product Modal -->
    <div id="quickViewOverlay" class="fixed inset-0 bg-slate-900/70 backdrop-blur-md z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-3xl w-full overflow-hidden shadow-2xl relative border border-slate-100 flex flex-col md:flex-row max-h-[90vh] overflow-y-auto">
            <button onclick="closeQuickView()" class="absolute top-4 right-4 z-10 w-9 h-9 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 hover:bg-slate-200 transition">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>

            <!-- Modal Product Image Gallery -->
            <div class="md:w-1/2 bg-slate-100 p-6 flex flex-col justify-center items-center relative">
                <img id="qvImage" src="" alt="Product Image" class="w-full h-72 object-contain rounded-2xl">
                <span id="qvBadge" class="absolute top-4 left-4 bg-brand-600 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
                    New
                </span>
            </div>

            <!-- Modal Product Details -->
            <div class="md:w-1/2 p-6 sm:p-8 flex flex-col justify-between space-y-6">
                <div>
                    <span id="qvCategory" class="text-xs uppercase font-bold text-brand-600 tracking-wider">Category</span>
                    <h2 id="qvTitle" class="text-2xl font-bold text-slate-900 mt-1">Product Title</h2>
                    
                    <div class="flex items-center gap-3 mt-2">
                        <div class="flex text-amber-400 text-xs">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span id="qvRating" class="text-xs font-semibold text-slate-600">4.9 (128 reviews)</span>
                    </div>

                    <div class="mt-4 flex items-baseline gap-3">
                        <span id="qvPrice" class="text-2xl font-extrabold text-slate-900">$0.00</span>
                        <span id="qvOldPrice" class="text-sm text-slate-400 line-through font-medium">$0.00</span>
                    </div>

                    <p id="qvDescription" class="text-xs text-slate-500 mt-4 leading-relaxed">
                        Detailed product overview description goes here. Made with precision engineering and high grade materials.
                    </p>

                    <!-- Color Selectors -->
                    <div class="mt-6">
                        <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Select Color</label>
                        <div class="flex items-center gap-2">
                            <button class="w-7 h-7 rounded-full bg-slate-900 border-2 border-brand-500 ring-2 ring-slate-900/20"></button>
                            <button class="w-7 h-7 rounded-full bg-indigo-600 border-2 border-transparent hover:border-slate-300"></button>
                            <button class="w-7 h-7 rounded-full bg-rose-500 border-2 border-transparent hover:border-slate-300"></button>
                        </div>
                    </div>
                </div>

                <!-- Add To Cart & Quantity Actions -->
                <div class="space-y-3 pt-4 border-t border-slate-100">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center border border-slate-200 rounded-xl bg-slate-50">
                            <button onclick="adjustQvQty(-1)" class="w-10 h-10 flex items-center justify-center text-slate-600 hover:text-slate-900 font-bold">-</button>
                            <span id="qvQty" class="w-8 text-center text-sm font-bold text-slate-800">1</span>
                            <button onclick="adjustQvQty(1)" class="w-10 h-10 flex items-center justify-center text-slate-600 hover:text-slate-900 font-bold">+</button>
                        </div>
                        <button id="qvAddToCartBtn" class="flex-1 py-3 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-md transition flex items-center justify-center gap-2 text-sm">
                            <i class="fa-solid fa-bag-shopping"></i> Add To Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout Process Modal -->
    <div id="checkoutOverlay" class="fixed inset-0 bg-slate-900/70 backdrop-blur-md z-50 hidden items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl relative border border-slate-100">
            <button onclick="closeCheckoutModal()" class="absolute top-4 right-4 w-9 h-9 bg-slate-100 rounded-full flex items-center justify-center text-slate-500 hover:bg-slate-200 transition">
                <i class="fa-solid fa-xmark text-base"></i>
            </button>

            <div id="checkoutStep1">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center font-bold">
                        1
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-900">Shipping Details</h3>
                        <p class="text-xs text-slate-500">Enter where you'd like us to send your package.</p>
                    </div>
                </div>

                <form onsubmit="handleCheckoutSubmit(event)" class="space-y-4 text-xs">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block font-bold text-slate-700 mb-1">First Name</label>
                            <input type="text" required value="Alex" class="w-full px-3 py-2.5 border border-slate-200 rounded-xl focus:border-brand-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Last Name</label>
                            <input type="text" required value="Morgan" class="w-full px-3 py-2.5 border border-slate-200 rounded-xl focus:border-brand-500 focus:outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block font-bold text-slate-700 mb-1">Shipping Address</label>
                        <input type="text" required value="742 Evergreen Terrace" class="w-full px-3 py-2.5 border border-slate-200 rounded-xl focus:border-brand-500 focus:outline-none">
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block font-bold text-slate-700 mb-1">City</label>
                            <input type="text" required value="Springfield" class="w-full px-3 py-2.5 border border-slate-200 rounded-xl focus:border-brand-500 focus:outline-none">
                        </div>
                        <div>
                            <label class="block font-bold text-slate-700 mb-1">Postal Code</label>
                            <input type="text" required value="97477" class="w-full px-3 py-2.5 border border-slate-200 rounded-xl focus:border-brand-500 focus:outline-none">
                        </div>
                    </div>

                    <div class="pt-4 border-t border-slate-100">
                        <label class="block font-bold text-slate-700 mb-2">Payment Demo Method</label>
                        <div class="grid grid-cols-2 gap-3">
                            <label class="border border-brand-500 bg-brand-50/50 p-3 rounded-xl flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="payment" checked class="text-brand-600">
                                <span class="font-bold text-slate-800">Credit Card</span>
                            </label>
                            <label class="border border-slate-200 p-3 rounded-xl flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="payment" class="text-brand-600">
                                <span class="font-bold text-slate-800">Apple Pay</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3.5 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-lg transition mt-4 text-sm flex items-center justify-center gap-2">
                        <i class="fa-solid fa-lock text-xs"></i> Complete Order ($<span id="checkoutTotalBtn">0.00</span>)
                    </button>
                </form>
            </div>

            <!-- Checkout Step 2: Order Confirmation -->
            <div id="checkoutSuccess" class="hidden text-center py-8 space-y-4">
                <div class="w-20 h-20 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto text-3xl animate-bounce">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h3 class="text-2xl font-extrabold text-slate-900">Order Confirmed!</h3>
                <p class="text-xs text-slate-500 max-w-xs mx-auto">
                    Thank you for shopping with AURA. Your order <span class="font-bold text-slate-800">#AUR-88203</span> has been placed successfully.
                </p>
                <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 text-left text-xs space-y-2 max-w-sm mx-auto">
                    <div class="flex justify-between text-slate-500">
                        <span>Estimated Delivery:</span>
                        <span class="font-bold text-slate-800">3-5 Business Days</span>
                    </div>
                    <div class="flex justify-between text-slate-500">
                        <span>Tracking Code:</span>
                        <span class="font-mono font-bold text-brand-600">TRK-991283-X</span>
                    </div>
                </div>
                <button onclick="closeCheckoutModal()" class="px-8 py-3 bg-slate-900 text-white font-bold rounded-xl text-xs hover:bg-slate-800 transition">
                    Continue Shopping
                </button>
            </div>
        </div>
    </div>

    <!-- Notification Toast Container -->
    <div id="toastContainer" class="fixed bottom-6 right-6 z-50 flex flex-col gap-2 pointer-events-none"></div>

    <script>
        // Sample Product Database
        const products = [
            {
                id: 1,
                title: "Acoustics Pro Wireless Headphones",
                category: "electronics",
                price: 299.00,
                oldPrice: 349.00,
                rating: 4.9,
                reviewsCount: 128,
                image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=600&auto=format&fit=crop&q=80",
                badge: "Hot",
                description: "Experience spatial noise cancellation with ultra-low latency wireless audio and up to 40 hours battery backup."
            },
            {
                id: 2,
                title: "Minimalist Chrono Stainless Watch",
                category: "wearables",
                price: 185.00,
                oldPrice: 220.00,
                rating: 4.8,
                reviewsCount: 94,
                image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=600&auto=format&fit=crop&q=80",
                badge: "Popular",
                description: "Sleek japanese quartz movement watch with scratch-resistant sapphire glass crystal and premium leather strap."
            },
            {
                id: 3,
                title: "Ergonomic Bamboo Desk Lamp",
                category: "home",
                price: 75.00,
                oldPrice: 95.00,
                rating: 4.7,
                reviewsCount: 62,
                image: "https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=600&auto=format&fit=crop&q=80",
                badge: "Eco",
                description: "Smart dimmable warm LED lamp built with sustainably harvested natural bamboo and touch sensor base."
            },
            {
                id: 4,
                title: "Italian Leather Travel Backpack",
                category: "fashion",
                price: 210.00,
                oldPrice: 260.00,
                rating: 5.0,
                reviewsCount: 45,
                image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&auto=format&fit=crop&q=80",
                badge: "Sale",
                description: "Handcrafted full-grain Italian leather carry-on backpack featuring padded laptop compartment and weather resistance."
            },
            {
                id: 5,
                title: "AURA Smart Health Fitness Band",
                category: "wearables",
                price: 129.00,
                oldPrice: 159.00,
                rating: 4.6,
                reviewsCount: 88,
                image: "https://images.unsplash.com/photo-1575311373937-040b8e1fd5b6?w=600&auto=format&fit=crop&q=80",
                badge: "New",
                description: "Track heart rate, oxygen levels, sleep quality, and 50+ athletic workout modes in real time."
            },
            {
                id: 6,
                title: "Tactile Mechanical Keyboard",
                category: "electronics",
                price: 145.00,
                oldPrice: 175.00,
                rating: 4.9,
                reviewsCount: 210,
                image: "https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=600&auto=format&fit=crop&q=80",
                badge: "Best Seller",
                description: "Low profile wireless mechanical keyboard with custom lubricant switches and RGB per-key backlighting."
            },
            {
                id: 7,
                title: "Organic Cotton Relaxed Hoodie",
                category: "fashion",
                price: 88.00,
                oldPrice: 110.00,
                rating: 4.7,
                reviewsCount: 73,
                image: "https://images.unsplash.com/photo-1556905055-8f358a7a47b2?w=600&auto=format&fit=crop&q=80",
                badge: "Eco",
                description: "Ultra soft heavyweight 100% organic cotton hoodie with custom tailored fit and durable flatlock stitching."
            },
            {
                id: 8,
                title: "Ceramic Minimalist Pour-Over Set",
                category: "home",
                price: 52.00,
                oldPrice: 65.00,
                rating: 4.8,
                reviewsCount: 39,
                image: "https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600&auto=format&fit=crop&q=80",
                badge: "Craft",
                description: "Artisanal ceramic coffee dripper and glass carafe set designed for optimal thermal stability and rich extraction."
            }
        ];

        // Global State Variables
        let cart = [];
        let wishlist = [];
        let currentCategory = 'all';
        let currentSearchQuery = '';
        let discountPercentage = 0;
        let selectedQvQty = 1;
        let currentQvProductId = null;

        // Initialize Store on DOM Load
        window.onload = function() {
            renderProducts();
            startCountdown();
        };

        // Render Product Cards Grid
        function renderProducts() {
            const grid = document.getElementById('productGrid');
            const emptyState = document.getElementById('emptyState');
            const productCount = document.getElementById('productCount');

            // Apply category filter and search filter
            let filtered = products.filter(p => {
                const matchesCat = (currentCategory === 'all' || p.category === currentCategory);
                const matchesSearch = p.title.toLowerCase().includes(currentSearchQuery.toLowerCase()) || 
                                      p.description.toLowerCase().includes(currentSearchQuery.toLowerCase());
                return matchesCat && matchesSearch;
            });

            // Update item counter display
            productCount.innerText = filtered.length;

            if (filtered.length === 0) {
                grid.innerHTML = '';
                emptyState.classList.remove('hidden');
                return;
            } else {
                emptyState.classList.add('hidden');
            }

            // Generate HTML for each product card
            grid.innerHTML = filtered.map(product => {
                const isWishlisted = wishlist.includes(product.id);
                return `
                <div class="group bg-white rounded-2xl border border-slate-200/80 hover:border-brand-500/30 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col justify-between">
                    <div class="relative overflow-hidden bg-slate-100 aspect-square">
                        <img src="${product.image}" alt="${product.title}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500">
                        
                        <!-- Badge -->
                        <span class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
                            ${product.badge}
                        </span>

                        <!-- Floating Action Buttons -->
                        <div class="absolute top-3 right-3 flex flex-col gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                            <button onclick="toggleWishlist(${product.id})" class="w-9 h-9 bg-white text-slate-700 rounded-full flex items-center justify-center shadow-md hover:bg-rose-50 hover:text-rose-500 transition">
                                <i class="${isWishlisted ? 'fa-solid text-rose-500' : 'fa-regular'} fa-heart"></i>
                            </button>
                            <button onclick="openQuickView(${product.id})" class="w-9 h-9 bg-white text-slate-700 rounded-full flex items-center justify-center shadow-md hover:bg-brand-50 hover:text-brand-600 transition" title="Quick View">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Card Information -->
                    <div class="p-5 flex-1 flex flex-col justify-between space-y-3">
                        <div>
                            <div class="flex items-center justify-between text-xs text-slate-400 mb-1">
                                <span class="uppercase font-bold text-brand-600 tracking-wider">${product.category}</span>
                                <div class="flex items-center gap-1 text-amber-400">
                                    <i class="fa-solid fa-star text-[10px]"></i>
                                    <span class="font-bold text-slate-700">${product.rating}</span>
                                </div>
                            </div>
                            <h3 class="font-bold text-slate-900 text-base leading-snug group-hover:text-brand-600 transition line-clamp-1">${product.title}</h3>
                        </div>

                        <div class="flex items-center justify-between pt-2 border-t border-slate-100">
                            <div>
                                <span class="text-lg font-extrabold text-slate-900">$${product.price.toFixed(2)}</span>
                                ${product.oldPrice ? `<span class="text-xs text-slate-400 line-through font-medium ml-1.5">$${product.oldPrice.toFixed(2)}</span>` : ''}
                            </div>
                            <button onclick="addToCart(${product.id})" class="px-3.5 py-2 bg-slate-900 hover:bg-brand-600 text-white text-xs font-semibold rounded-xl transition flex items-center gap-1.5 shadow-sm">
                                <i class="fa-solid fa-plus"></i> Add
                            </button>
                        </div>
                    </div>
                </div>
                `;
            }).join('');
        }

        function filterCategory(category) {
            currentCategory = category;
            
            // Update button UI states
            document.querySelectorAll('.cat-pill').forEach(btn => {
                btn.classList.remove('bg-white', 'text-slate-900', 'shadow-sm');
                btn.classList.add('text-slate-600');
            });
            const activeBtn = document.getElementById(`btn-cat-${category}`);
            if(activeBtn) {
                activeBtn.classList.add('bg-white', 'text-slate-900', 'shadow-sm');
                activeBtn.classList.remove('text-slate-600');
            }

            renderProducts();
        }

        function filterProducts() {
            const input = document.getElementById('searchInput');
            currentSearchQuery = input.value;
            
            const clearBtn = document.getElementById('clearSearchBtn');
            if (currentSearchQuery.length > 0) {
                clearBtn.classList.remove('hidden');
            } else {
                clearBtn.classList.add('hidden');
            }

            renderProducts();
        }

        function clearSearch() {
            document.getElementById('searchInput').value = '';
            document.getElementById('mobileSearchInput').value = '';
            currentSearchQuery = '';
            document.getElementById('clearSearchBtn').classList.add('hidden');
            renderProducts();
        }

        function syncMobileSearch() {
            const val = document.getElementById('mobileSearchInput').value;
            document.getElementById('searchInput').value = val;
            filterProducts();
        }

        function toggleMobileSearch() {
            const bar = document.getElementById('mobileSearchBar');
            bar.classList.toggle('hidden');
        }

        function sortProducts() {
            const val = document.getElementById('sortSelect').value;
            if (val === 'low') {
                products.sort((a, b) => a.price - b.price);
            } else if (val === 'high') {
                products.sort((a, b) => b.price - a.price);
            } else if (val === 'rating') {
                products.sort((a, b) => b.rating - a.rating);
            } else {
                products.sort((a, b) => a.id - b.id);
            }
            renderProducts();
        }

        function resetFilters() {
            clearSearch();
            filterCategory('all');
        }

        function addToCart(productId, quantity = 1) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity += quantity;
            } else {
                cart.push({ ...product, quantity: quantity });
            }

            updateCartUI();
            showToast(`Added <strong>${product.title}</strong> to cart!`, 'success');
        }

        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
            showToast('Item removed from cart', 'info');
        }

        function adjustQuantity(productId, delta) {
            const item = cart.find(i => i.id === productId);
            if (item) {
                item.quantity += delta;
                if (item.quantity <= 0) {
                    removeFromCart(productId);
                } else {
                    updateCartUI();
                }
            }
        }

        function updateCartUI() {
            const totalCount = cart.reduce((sum, item) => sum + item.quantity, 0);
            const subtotal = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
            const discount = subtotal * discountPercentage;
            const finalTotal = subtotal - discount;

            // Badges
            document.getElementById('cartBadge').innerText = totalCount;
            document.getElementById('cartDrawerBadge').innerText = totalCount;

            // Free shipping bar ($99 threshold)
            const shippingBar = document.getElementById('freeShippingBar');
            const shippingText = document.getElementById('freeShippingText');
            if (subtotal >= 99) {
                shippingBar.style.width = '100%';
                shippingText.innerHTML = '🎉 You unlocked <strong class="text-emerald-700">FREE Shipping!</strong>';
            } else {
                const diff = (99 - subtotal).toFixed(2);
                const percent = Math.min((subtotal / 99) * 100, 100);
                shippingBar.style.width = `${percent}%`;
                shippingText.innerHTML = `Add <span class="font-bold">$${diff}</span> more for FREE Shipping!`;
            }

            // Calculations
            document.getElementById('cartSubtotal').innerText = `$${subtotal.toFixed(2)}`;
            document.getElementById('cartDiscount').innerText = `-$${discount.toFixed(2)}`;
            document.getElementById('cartTotal').innerText = `$${finalTotal.toFixed(2)}`;
            document.getElementById('checkoutTotalBtn').innerText = finalTotal.toFixed(2);

            // Render list items
            const cartItemsList = document.getElementById('cartItemsList');
            if (cart.length === 0) {
                cartItemsList.innerHTML = `
                    <div class="text-center py-12 text-slate-400">
                        <i class="fa-solid fa-bag-shopping text-4xl mb-3"></i>
                        <p class="font-semibold text-slate-700">Your cart is empty</p>
                        <p class="text-xs text-slate-400 mt-1">Explore our catalog and add items!</p>
                    </div>
                `;
            } else {
                cartItemsList.innerHTML = cart.map(item => `
                    <div class="flex items-center gap-4 p-3 bg-slate-50 rounded-2xl border border-slate-100">
                        <img src="${item.image}" alt="${item.title}" class="w-16 h-16 object-cover rounded-xl bg-white">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-xs text-slate-800 truncate">${item.title}</h4>
                            <p class="text-xs text-slate-500 font-semibold mt-0.5">$${item.price.toFixed(2)}</p>
                            
                            <div class="flex items-center gap-2 mt-2">
                                <div class="flex items-center border border-slate-200 rounded-lg bg-white">
                                    <button onclick="adjustQuantity(${item.id}, -1)" class="w-6 h-6 flex items-center justify-center text-xs font-bold text-slate-600 hover:bg-slate-100">-</button>
                                    <span class="px-2 text-xs font-bold text-slate-800">${item.quantity}</span>
                                    <button onclick="adjustQuantity(${item.id}, 1)" class="w-6 h-6 flex items-center justify-center text-xs font-bold text-slate-600 hover:bg-slate-100">+</button>
                                </div>
                            </div>
                        </div>
                        <button onclick="removeFromCart(${item.id})" class="text-slate-400 hover:text-rose-500 p-2 transition">
                            <i class="fa-solid fa-trash-can text-sm"></i>
                        </button>
                    </div>
                `).join('');
            }
        }

        function applyCoupon() {
            const code = document.getElementById('couponCodeInput').value.trim().toUpperCase();
            if (code === 'SUMMER20') {
                discountPercentage = 0.20;
                showToast('Coupon code applied: 20% OFF!', 'success');
                updateCartUI();
            } else if (code === '') {
                showToast('Please enter a coupon code', 'info');
            } else {
                showToast('Invalid coupon code', 'error');
            }
        }

        function toggleWishlist(productId) {
            const index = wishlist.indexOf(productId);
            if (index > -1) {
                wishlist.splice(index, 1);
                showToast('Removed from wishlist', 'info');
            } else {
                wishlist.push(productId);
                showToast('Saved to wishlist!', 'success');
            }
            updateWishlistUI();
            renderProducts();
        }

        function updateWishlistUI() {
            const badge = document.getElementById('wishlistBadge');
            badge.innerText = wishlist.length;
            if (wishlist.length > 0) {
                badge.classList.remove('hidden');
            } else {
                badge.classList.add('hidden');
            }

            const list = document.getElementById('wishlistItemsList');
            if (wishlist.length === 0) {
                list.innerHTML = `
                    <div class="text-center py-12 text-slate-400">
                        <i class="fa-regular fa-heart text-4xl mb-3"></i>
                        <p class="font-semibold text-slate-700">Wishlist is empty</p>
                    </div>
                `;
            } else {
                const savedProducts = products.filter(p => wishlist.includes(p.id));
                list.innerHTML = savedProducts.map(p => `
                    <div class="flex items-center gap-4 p-3 bg-slate-50 rounded-2xl border border-slate-100">
                        <img src="${p.image}" alt="${p.title}" class="w-16 h-16 object-cover rounded-xl bg-white">
                        <div class="flex-1 min-w-0">
                            <h4 class="font-bold text-xs text-slate-800 truncate">${p.title}</h4>
                            <p class="text-xs text-slate-500 font-semibold mt-0.5">$${p.price.toFixed(2)}</p>
                        </div>
                        <button onclick="addToCart(${p.id}); toggleWishlist(${p.id})" class="px-3 py-1.5 bg-brand-600 text-white rounded-lg text-xs font-semibold">
                            Move to Cart
                        </button>
                    </div>
                `).join('');
            }
        }

        function toggleCartDrawer() {
            const drawer = document.getElementById('cartDrawer');
            const overlay = document.getElementById('cartOverlay');
            
            if (drawer.classList.contains('translate-x-full')) {
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.remove('opacity-0'), 10);
                drawer.classList.remove('translate-x-full');
            } else {
                drawer.classList.add('translate-x-full');
                overlay.classList.add('opacity-0');
                setTimeout(() => overlay.classList.add('hidden'), 300);
            }
        }

        function toggleWishlistDrawer() {
            const drawer = document.getElementById('wishlistDrawer');
            const overlay = document.getElementById('wishlistOverlay');
            
            if (drawer.classList.contains('translate-x-full')) {
                overlay.classList.remove('hidden');
                setTimeout(() => overlay.classList.remove('opacity-0'), 10);
                drawer.classList.remove('translate-x-full');
            } else {
                drawer.classList.add('translate-x-full');
                overlay.classList.add('opacity-0');
                setTimeout(() => overlay.classList.add('hidden'), 300);
            }
        }

        function openQuickView(productId) {
            currentQvProductId = productId;
            selectedQvQty = 1;
            const p = products.find(item => item.id === productId);

            document.getElementById('qvImage').src = p.image;
            document.getElementById('qvBadge').innerText = p.badge;
            document.getElementById('qvCategory').innerText = p.category;
            document.getElementById('qvTitle').innerText = p.title;
            document.getElementById('qvRating').innerText = `${p.rating} (${p.reviewsCount} reviews)`;
            document.getElementById('qvPrice').innerText = `$${p.price.toFixed(2)}`;
            document.getElementById('qvOldPrice').innerText = p.oldPrice ? `$${p.oldPrice.toFixed(2)}` : '';
            document.getElementById('qvDescription').innerText = p.description;
            document.getElementById('qvQty').innerText = selectedQvQty;

            document.getElementById('qvAddToCartBtn').onclick = function() {
                addToCart(currentQvProductId, selectedQvQty);
                closeQuickView();
            };

            const modal = document.getElementById('quickViewOverlay');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeQuickView() {
            const modal = document.getElementById('quickViewOverlay');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function adjustQvQty(delta) {
            selectedQvQty = Math.max(1, selectedQvQty + delta);
            document.getElementById('qvQty').innerText = selectedQvQty;
        }

        function openCheckoutModal() {
            if (cart.length === 0) {
                showToast('Your cart is empty', 'error');
                return;
            }
            toggleCartDrawer();
            const modal = document.getElementById('checkoutOverlay');
            document.getElementById('checkoutStep1').classList.remove('hidden');
            document.getElementById('checkoutSuccess').classList.add('hidden');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeCheckoutModal() {
            const modal = document.getElementById('checkoutOverlay');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function handleCheckoutSubmit(e) {
            e.preventDefault();
            document.getElementById('checkoutStep1').classList.add('hidden');
            document.getElementById('checkoutSuccess').classList.remove('hidden');
            
            // Empty cart after successful checkout demo
            cart = [];
            updateCartUI();
        }

        function handleSubscribe(e) {
            e.preventDefault();
            showToast('Thank you for subscribing to AURA!', 'success');
            e.target.reset();
        }

        function startCountdown() {
            let h = 8, m = 42, s = 19;
            setInterval(() => {
                s--;
                if (s < 0) { s = 59; m--; }
                if (m < 0) { m = 59; h--; }
                if (h < 0) { h = 24; }

                document.getElementById('hours').innerText = String(h).padStart(2, '0');
                document.getElementById('minutes').innerText = String(m).padStart(2, '0');
                document.getElementById('seconds').innerText = String(s).padStart(2, '0');
            }, 1000);
        }

        function showToast(message, type = 'info') {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');

            let iconClass = 'fa-circle-info text-blue-500';
            if (type === 'success') iconClass = 'fa-circle-check text-emerald-500';
            if (type === 'error') iconClass = 'fa-triangle-exclamation text-rose-500';

            toast.className = 'toast-enter flex items-center gap-3 bg-slate-900 text-white text-xs px-4 py-3 rounded-2xl shadow-xl border border-slate-800 backdrop-blur-md pointer-events-auto max-w-xs';
            toast.innerHTML = `
                <i class="fa-solid ${iconClass} text-base"></i>
                <div class="flex-1">${message}</div>
            `;

            container.appendChild(toast);

            // Animate entry
            setTimeout(() => toast.classList.add('toast-enter-active'), 10);

            // Automatic dismissal
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateY(100%)';
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }
    </script>