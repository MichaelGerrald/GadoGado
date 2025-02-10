<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadoSehat - Gado-gado Sehat dan Lezat</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
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
                        📞  0895-4161-89252
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
<section class="pt-20 bg-gradient-to-b from-green-50 to-white">
    <div class="container mx-auto px-4 py-16">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Healthy Gado-Gado,<br/>
                    <span class="text-green-600">Delicious & Nutritious</span>
                </h1>
                <p class="text-gray-600 text-xl mb-8">
                    Enjoy premium gado-gado dishes with special peanut sauce and selected fresh vegetables.
                </p>
                <div class="flex space-x-4">
                    <a href="menu.php">
                        <button class="bg-green-600 text-white px-8 py-3 rounded-full hover:bg-green-700 transition">
                            See Our Menu
                        </button>
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="gadogado_spesial.jpeg" alt="Gado-gado Special" class="rounded-xl shadow-2xl"/>
            </div>
        </div>
    </div>
</section>

    <!-- Features -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-3xl">🥬</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Fresh Vegetables</h3>
                    <p class="text-gray-600">
                    Selected daily to guarantee freshness and best quality.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-3xl">🥜</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Special Spices</h3>
                    <p class="text-gray-600">
                    A special and delicious secret peanut sauce blend.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                        <span class="text-3xl">💪</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Healthy & Nutritious</h3>
                    <p class="text-gray-600">
                    Without MSG and preservatives, suitable for a healthy lifestyle.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Favorit -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Favorite Menu</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                Our best choice of gado-gado menu that customers like the most
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="gadogado.jpeg" alt="Gado-gado Original" class="w-full h-48 object-cover"/>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Original Gado-gado</h3>
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
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="gadogado_spesial.jpeg" alt="Gado-gado Special" class="w-full h-48 object-cover"/>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Special Gado-gado</h3>
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
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition">
                    <img src="gadogado_vegetarian.jpeg" alt="Gado-gado Vegetarian" class="w-full h-48 object-cover"/>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Vegetarian Gado-gado</h3>
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
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Honest Review</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="cust1.jpeg" alt="Customer" class="w-12 h-12 rounded-full"/>
                        <div class="ml-4">
                            <h4 class="font-bold">Hansen</h4>
                            <div class="text-yellow-400">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                    "The gado-gado is really delicious! The peanut sauce is just right and the vegetables are fresh. Recommended!"
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="cust2.jpeg" alt="Customer" class="w-12 h-12 rounded-full"/>
                        <div class="ml-4">
                            <h4 class="font-bold">Nelson</h4>
                            <div class="text-yellow-400">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                    "The portions are just right and the taste is authentic. Suitable for those who like healthy food!"
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg">
                    <div class="flex items-center mb-4">
                        <img src="cust3.jpeg" alt="Customer" class="w-12 h-12 rounded-full"/>
                        <div class="ml-4">
                            <h4 class="font-bold">William</h4>
                            <div class="text-yellow-400">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">
                    "The service is friendly and fast. The Gado-gado is a regular every week!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Frequently Ask Question</h2>
            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold mb-2">Can it be sent to all areas in Bandung?</h3>
                    <p class="text-gray-600">Yes, we provide delivery to all areas of Bandung with a minimum order of IDR 50,000.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold mb-2">How long is the delivery time?</h3>
                    <p class="text-gray-600">Delivery time ranges from 30-45 minutes depending on location and traffic conditions.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <h3 class="font-bold mb-2">Is it available for catering?</h3>
                    <p class="text-gray-600">Yes, we accept catering orders with a minimum order of 20 portions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
<section class="bg-green-600 py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Order Gado-Gado Now!</h2>
        <p class="text-white text-xl mb-8 max-w-2xl mx-auto">
        Enjoy the deliciousness of our healthy gado-gado right at your home
        </p>
        <div class="flex justify-center space-x-4">
            <a href="https://wa.me/62XXXXXXXXXX" target="_blank">
                <button class="bg-white text-green-600 px-8 py-3 rounded-full hover:bg-gray-100 transition">
                    Contact Us
                </button>
            </a>
            <a href="menu.php">
                <button class="border-2 border-white text-white px-8 py-3 rounded-full hover:bg-green-700 transition">
                    See Our Menu
                </button>
            </a>
        </div>
    </div>
</section>


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