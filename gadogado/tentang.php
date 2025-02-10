<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - GadoSehat</title>
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
    <section class="pt-16">
        <div class="relative h-[400px]">
            <img src="header_gadogado.jpeg" alt="Dapur GadoSehat" class="w-full h-full object-cover"/>
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center">
                <div class="container mx-auto px-4">
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Us</h1>
                    <p class="text-xl text-white max-w-2xl">Serving quality gado-gado with authentic Indonesian flavors since 2020</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="owen.jpeg" alt="Pendiri GadoSehat" class="rounded-lg shadow-lg"/>
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4">
                    GadoSehat started in our family's small kitchen in Jakarta. Starting from a recipe passed down from generation to generation that has been passed down for three generations, we are determined to share delicious gado-gado that is not only delicious but also healthy.
                    </p>
                    <p class="text-gray-600 mb-4">
                    Founded in 2020, in the midst of a pandemic, we saw people's need for healthy and quality food. With a commitment to using fresh ingredients and homemade spices, GadoSehat is here as a healthy food choice that doesn't sacrifice taste.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 bg-green-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">🌱</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Freshness</h3>
                    <p class="text-gray-600">
                    We are committed to using fresh ingredients selected every morning to guarantee the best quality.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">💚</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Health</h3>
                    <p class="text-gray-600">
                    Each of our dishes is made without MSG and preservatives, prioritizing customer health.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-3xl">🤝</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Trust</h3>
                    <p class="text-gray-600">
                    We build long-term relationships with our local customers and suppliers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <img src="rey.jpeg" alt="Chef Utama" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover"/>
                    <h3 class="text-xl font-bold mb-2">Chef Reynold Farrel Fredericko</h3>
                    <p class="text-gray-600">Head Chef</p>
                </div>
                <div class="text-center">
                    <img src="bennett.jpeg" alt="Manager" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover"/>
                    <h3 class="text-xl font-bold mb-2">Bennett Justin Wijaya</h3>
                    <p class="text-gray-600">Operations Manager</p>
                </div>
                <div class="text-center">
                    <img src="dito.jpeg" alt="Quality Control" class="w-48 h-48 rounded-full mx-auto mb-4 object-cover"/>
                    <h3 class="text-xl font-bold mb-2">Timotius Ardito Prama</h3>
                    <p class="text-gray-600">Quality Control</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-green-600">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Join the GadoSehat Family</h2>
        <p class="text-white text-xl mb-8 max-w-2xl mx-auto">
            Enjoy our healthy and delicious dishes. Order now and feel the difference for yourself!
        </p>
        <a href="menu.php" class="bg-white text-green-600 px-8 py-3 rounded-full hover:bg-gray-100">
            Order Now
        </a>
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