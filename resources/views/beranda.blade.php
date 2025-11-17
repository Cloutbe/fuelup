<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coffee Brew</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: 'Inter', sans-serif; }
  </style>
</head>
<body class="bg-[#f0f9ff] text-[#1e293b]">

<?php
$coffees = [
  ["Americano Coffee", "A strong espresso drink topped with a small amount of water.", 20000, "lungo.jpg"],
  ["Coffee Latte", "Whipped coffee with creamy instant taste.", 18000, "dalgona.jpg"],
  ["Palm Sugar Latte", "Chilled espresso served cold with milk or cream.", 20000, "iced.jpg"],
  ["Butterscotch Latte", "Rich South Indian classic, freshly roasted.", 22000, "filter.jpg"],
];

$testimonials = [
  ["Jane Adams", "Designer", "The cappuccino was perfect, and the pricing was great!", 5],
  ["Sam Williams", "Entrepreneur", "Best beans and customer service!", 5],
  ["Angela Gonzales", "Photographer", "Always my go-to coffee shop!", 5],
];
?>

<!-- NAVBAR -->
<header class="bg-white text-black flex justify-between items-center px-10 py-4 shadow-md">

  <!-- LOGO + TEXT -->
  <div class="flex items-center space-x-5">
    <img src="images/fuelup.png" alt="Fuel Up Logo" class="w-10 h-10 object-cover">
    <h1 class="text-2xl font-bold tracking-wide">Fuel Up</h1>
  </div>

  <!-- MENU -->
  <nav class="space-x-8 text-sm uppercase tracking-wide">
    <a href="#" class="hover:text-[#4E71FF] transition font-medium">Home</a>
    <a href="#" class="hover:text-[#4E71FF] transition font-medium">Coffee</a>
    <a href="#" class="hover:text-[#4E71FF] transition font-medium">Shop</a>
    <a href="#" class="hover:text-[#4E71FF] transition font-medium">About</a>
    <a href="#" class="hover:text-[#4E71FF] transition font-medium">Login</a>
  </nav>

</header>

<!-- HERO -->   
 <section class="relative">
  <img src="images/bg.png" class="w-full h-[500px] object-cover brightness-75">
  <div class="absolute inset-0 flex flex-row w-full justify-between px-20">
    <div class="flex flex-col justify-center items-start text-white">
      <h2 class="text-5xl font-extrabold mb-3 drop-shadow-lg">We serve the richest coffee<br>in the city!</h2>
      <a href="#" class="bg-[#38bdf8] px-6 py-2 rounded-full text-[#0f172a] font-semibold hover:bg-white hover:text-[#1e3a8a] transition">Order Now</a>
    </div>
    <img src="{{ asset('/images/kopi.png') }}" alt="">
  </div>
</section>

<!-- CATEGORY ICONS -->
<section class="bg-[#e0f2fe] py-10 flex justify-center space-x-10">
  <?php
  $icons = [
    ["Hot Coffee", "hot.png"],
    ["Cold Coffee", "cold.png"],
    ["Cup Coffee", "cup.png"],
  ];
  foreach ($icons as $icon) {
    echo "
      <div class='text-center'>
        <img src='images/{$icon[1]}' class='w-12 mx-auto mb-2'>
        <p class='font-medium'>{$icon[0]}</p>
      </div>
    ";
  }
  ?>
</section>

<!-- COFFEE PRODUCTS -->
<section class="py-16 bg-white">
  <h3 class="text-center text-3xl font-bold text-[#0f172a] mb-10">OUR SPECIAL COFFEE</h3>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-6xl mx-auto px-4">
    <?php foreach ($coffees as $c): ?>
      <div class="bg-[#e0f2fe] rounded-lg shadow-md overflow-hidden hover:shadow-xl transition">
        <img src="images/<?= $c[3] ?>" class="w-full h-56 object-cover">
        <div class="p-4">
          <h4 class="font-semibold text-lg mb-2"><?= $c[0] ?></h4>
          <p class="text-sm text-gray-600 mb-3"><?= $c[1] ?></p>
          <div class="flex justify-between items-center">
            <span class="font-bold text-[#1d4ed8]">Rp <?= number_format($c[2], 0, ',', '.') ?></span>
            <button class="bg-[#0f172a] text-white text-sm px-3 py-1 rounded hover:bg-[#1d4ed8] transition">Order Now</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- COFFEE BEANS PROMO -->
<section class="py-16 bg-white flex flex-col md:flex-row items-center justify-center px-10">
  <img src="images/beans.jpg" class="w-80 mb-6 md:mb-0 md:mr-10 rounded-lg shadow-md">
  <div class="max-w-md">
    <h3 class="text-2xl font-bold text-[#0f172a] mb-4">Check out our best coffee beans</h3>
    <a href="#" class="bg-[#0f172a] text-white px-6 py-2 rounded-full hover:bg-[#1d4ed8] transition">Explore our products</a>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="bg-white py-16 text-center">
  <h3 class="text-2xl font-bold text-[#0f172a] mb-4">Join in and get 15% Off!</h3>
  <p class="text-gray-600 mb-6">Subscribe to our newsletter and get a 15% discount code.</p>
  <form class="flex justify-center">
    <input type="email" placeholder="Email address" class="border border-gray-300 px-4 py-2 w-72 rounded-l-md focus:outline-none">
    <button class="bg-[#0f172a] text-white px-6 py-2 rounded-r-md hover:bg-[#1d4ed8] transition">Subscribe</button>
  </form>
</section>

<!-- FOOTER -->
<footer class="bg-[#0f172a] text-blue-100 py-10">
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 px-6">
    <div>
      <h4 class="text-lg font-semibold mb-3 text-white">CoffeeBrew</h4>
      <p class="text-sm text-gray-300">We serve the richest coffee with love and passion.</p>
    </div>
    <div>
      <h4 class="text-lg font-semibold mb-3 text-white">Services</h4>
      <ul class="space-y-1 text-gray-300 text-sm">
        <li>Shop</li>
        <li>Order ahead</li>
        <li>Menu</li>
      </ul>
    </div>
    <div>
      <h4 class="text-lg font-semibold mb-3 text-white">Information</h4>
      <ul class="space-y-1 text-gray-300 text-sm">
        <li>Find a location</li>
        <li>Sell your products</li>
        <li>Jobs</li>
      </ul>
    </div>
    <div>
      <h4 class="text-lg font-semibold mb-3 text-white">Follow Us</h4>
      <div class="flex space-x-3 text-[#38bdf8]">
        <a href="#">🌐</a>
        <a href="#">🐦</a>
        <a href="#">📘</a>
        <a href="#">📸</a>
      </div>
    </div>
  </div>
  <p class="text-center text-sm text-gray-400 mt-8">© 2025 CoffeeBrew. All rights reserved.</p>
</footer>

</body>
</html>
