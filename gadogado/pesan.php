<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Method - GadoSehat</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Header dengan Navigation -->
    <header class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-16">
                    <a href="home.php" class="text-2xl font-bold text-green-600">GadoSehat</a>
                    <div class="hidden md:flex space-x-8">
                        <a href="menu.php" class="hover:text-green-600">Menu</a>
                        <a href="tentang.php" class="hover:text-green-600">About</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-4">
                    <a href="tel:+6281234567890" class="text-gray-600 hover:text-green-600">
                        📞 0895-4161-89252
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="pt-24 pb-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-3xl font-bold mb-8">Payment Method</h1>

                <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                    <h2 class="text-xl font-bold mb-4">Delivery Address</h2>
                    <form>
                        <label for="address" class="block mb-2 font-semibold">Enter your address:</label>
                        <textarea id="address" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-green-600" rows="3" placeholder="Enter your delivery address..."></textarea>
                    </form>
                </div>
                
                <!-- Order Summary -->
                <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
                    <h2 class="text-xl font-bold mb-4">Order Summary</h2>
                    <div class="border-b pb-4 mb-4">
                        <div class="flex justify-between mb-2">
                            <span>Selected Item:</span>
                            <span id="selectedItem" class="font-semibold">-</span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Price:</span>
                            <span id="itemPrice" class="font-semibold">-</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Quantity:</span>
                            <div class="flex items-center space-x-3">
                                <button class="bg-gray-200 px-3 py-1 rounded" onclick="updateQuantity(-1)">-</button>
                                <span id="quantity" class="font-semibold">1</span>
                                <button class="bg-gray-200 px-3 py-1 rounded" onclick="updateQuantity(1)">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between text-lg font-bold">
                        <span>Total:</span>
                        <span id="totalPrice">-</span>
                    </div>
                </div>

                <!-- Payment Methods -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-xl font-bold mb-4">Select Payment Method</h2>
                    
                    <!-- E-Wallet -->
                    <div class="mb-6">
                        <h3 class="font-semibold mb-3">E-Wallet</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="gopay.png" alt="GoPay" class="w-10 h-10 object-contain"/>
                                <span>GoPay</span>
                            </button>
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="ovo.jpg" alt="OVO" class="w-10 h-10 object-contain"/>
                                <span>OVO</span>
                            </button>
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="dana.png" alt="DANA" class="w-10 h-10 object-contain"/>
                                <span>DANA</span>
                            </button>
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="spay.png" alt="ShopeePay" class="w-10 h-10 object-contain"/>
                                <span>ShopeePay</span>
                            </button>
                        </div>
                    </div>

                    <!-- Bank Transfer -->
                    <div class="mb-6">
                        <h3 class="font-semibold mb-3">Bank Transfer</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="bca.png" alt="BCA" class="w-10 h-10 object-contain"/>
                                <span>BCA</span>
                            </button>
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="mandiri.png" alt="Mandiri" class="w-10 h-10 object-contain"/>
                                <span>Mandiri</span>
                            </button>
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="bni.png" alt="BNI" class="w-10 h-10 object-contain"/>
                                <span>BNI</span>
                            </button>
                            <button class="flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                                <img src="bri.png" alt="BRI" class="w-10 h-10 object-contain"/>
                                <span>BRI</span>
                            </button>
                        </div>
                    </div>

                    <!-- Cash Payment -->
                    <div>
                        <h3 class="font-semibold mb-3">Cash Payment</h3>
                        <button class="w-full flex items-center space-x-3 border rounded-lg p-4 hover:border-green-600 focus:border-green-600 focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                            <img src="cod.png" alt="Cash" class="w-10 h-10 object-contain"/>
                            <span>Cash on Delivery</span>
                        </button>
                    </div>

                    <!-- Proceed Button -->
                    <div class="mt-8">
                        <a href="procedpayment.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700 w-full text-center block">
                            Proceed To Payment
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">GadoSehat</h4>
                    <p class="text-gray-400">Serving quality gado-gado with authentic Indonesian flavors.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Taman Kopo Indah II Blok E4, No 22A</li>
                        <li>Bandung Regency</li>
                        <li>Tel: 0895-4161-89252</li>
                        <li>Email: gadosehat@gmail.com</li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Operational Hours</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Monday - Friday: 10:00 - 21:00</li>
                        <li>Saturday - Sunday: 10:00 - 22:00</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 GadoSehat. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple quantity management
        function updateQuantity(change) {
            const quantityElement = document.getElementById('quantity');
            let quantity = parseInt(quantityElement.textContent);
            quantity = Math.max(1, quantity + change);
            quantityElement.textContent = quantity;
            updateTotal();
        }

        function updateTotal() {
            // Add logic to calculate and update total based on quantity
            // This would need to be connected to your backend/database
        }

        // You would need to add logic to handle the selected item and price
        // This could be done through URL parameters or session storage
    </script>
</body>
</html>