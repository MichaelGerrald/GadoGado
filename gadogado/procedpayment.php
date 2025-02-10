<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status - GadoSehat</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col justify-center items-center text-center px-4">
        <img src="delivery.png" alt="Delivery Icon" class="w-32 h-32 mb-6">
        <h1 class="text-3xl font-bold text-green-600 mb-4">Your order has just been sent</h1>
        <p class="text-lg text-gray-700 mb-6">The food you ordered is on its way to the destination address.</p>
        <div class="bg-white shadow-md rounded-lg p-6 w-full max-w-md">
            <h2 class="text-xl font-semibold mb-3">Delivery Details</h2>
            <p class="text-gray-600"><strong>Address:</strong> -</p>
            <p class="text-gray-600"><strong>Status:</strong> It's being delivered 🚴‍♂️</p>
            <p class="text-gray-600"><strong>Time Estimate:</strong> 30 minute</p>
        </div>
        <button onclick="window.location.href='home.php'" class="mt-6 bg-green-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-green-700 transition">
           Back to Home
        </button>
    </div>
</body>
</html>
