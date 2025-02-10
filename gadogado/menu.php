<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - GadoSehat</title>
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
                    <a href="menu.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order Now
                    </a>
                </div>
                <button class="md:hidden text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
                    </svg>
                </button>
            </div>
        </nav>
    </header>


    <!-- Hero Section -->
    <section class="pt-16">
        <div class="relative h-[300px]">
        <img src="header_gadogado.jpeg" alt="Menu Banner" width="1920" height="300" style="object-fit: cover;"/>
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Menu</h1>
                    <p class="text-xl text-white">Enjoy our selection of healthy and delicious dishes</p>
                </div>
            </div>
        </div>
    </section>
    <br></br>


            <!-- Makanan Section -->
            <div class="mb-16">
                <h2 class="text-3xl font-bold mb-8">Food</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Gado-gado Original -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="gadogado.jpeg" alt="Gado-gado Original" class="w-full h-48 object-cover"/>
                    <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Original Gado-Gado</h3>
                        <p class="text-gray-600 mb-4">
                        Fresh vegetables with classic peanut sauce
                        </p>
                    <div class="flex justify-between items-center">
                    <span class="text-green-600 font-bold text-xl">Rp 35.000</span>
                    <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                  </div>
                 </div>
                </div>

                    <!-- Gado-gado Spesial -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="gadogado_spesial.jpeg" alt="Gado-gado Spesial" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Special Gado-Gado</h3>
                            <p class="text-gray-600 mb-4">
                            With eggs and special additional tofu
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 45.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                                Order
                                 </a>
                            </div>
                        </div>
                    </div>

                    <!-- Gado-gado Vegetarian -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="gadogado_vegetarian.jpeg" alt="Gado-gado Vegetarian" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Vegetarian Gado-Gado</h3>
                            <p class="text-gray-600 mb-4">
                            Healthy choice with organic vegetables
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 40.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>

                    <!-- Nasi Lengko -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="nasilengko.jpg" alt="Nasi Lengko" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Nasi Lengko</h3>
                            <p class="text-gray-600 mb-4">
                            Rice with tofu, tempe, bean sprouts and typical Cirebon peanut sauce
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 30.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>

                    <!-- Lotek -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="lotek.jpg" alt="Lotek" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Lotek</h3>
                            <p class="text-gray-600 mb-4">
                            Boiled vegetables with Sundanese peanut sauce
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 30.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Minuman Section -->
            <div>
                <h2 class="text-3xl font-bold mb-8">Drink</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Es Jeruk -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="esjeruk.webp" alt="Es Jeruk" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Orange Juice</h3>
                            <p class="text-gray-600 mb-4">
                            Fresh oranges squeezed directly
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 15.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>

                    <!-- Es Teh Manis -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="sweeticetea.jpg" alt="Es Teh" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Sweet Ice Tea</h3>
                            <p class="text-gray-600 mb-4">
                            Selected teas are freshly brewed
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 10.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>

                       <!-- Es Teh -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="icetea.webp" alt="Es Teh" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Ice Tea</h3>
                            <p class="text-gray-600 mb-4">
                            Selected teas are freshly brewed
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 8.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>

                    <!-- Lemon Tea -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="lemontea.jpg" alt="Jus Stroberi" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Lemon Tea</h3>
                            <p class="text-gray-600 mb-4">
                            Tea with a blend of fresh lemon
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 20.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mineral Water -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                        <img src="mineralwater.webp" alt="Jus Alpukat" class="w-full h-48 object-cover"/>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Mineral Water</h3>
                            <p class="text-gray-600 mb-4">
                            Fresh mineral water from the mountains
                            </p>
                            <div class="flex justify-between items-center">
                                <span class="text-green-600 font-bold text-xl">Rp 7.000</span>
                                <a href="pesan.php" class="bg-green-600 text-white px-4 py-2 rounded-full hover:bg-green-700">
                    Order
                    </a>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br></br>
  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">GadoSehat</h4>
                    <p class="text-gray-400">Serving quality gado-gado with authentic Indonesian flavors.</p>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Menu</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Original Gado-gado</li>
                        <li>Special Gado-gado</li>
                        <li>Vegetarian Gado-gado</li>
                    </ul>
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