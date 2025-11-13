<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuel Up Coffee Menu</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F4F9F8] min-h-screen flex flex-col items-center py-10">

  <!-- Header -->
  <h1 class="text-3xl font-bold text-[#4E71FF] mb-8">
    ☕ FUEL UP COFFEE MENU
  </h1>

  <!-- Search Bar -->
  <div class="mb-8 w-full max-w-3xl flex justify-center">
    <input 
      type="text" 
      placeholder="Search coffee..." 
      class="w-full sm:w-2/3 md:w-1/2 border border-gray-300 rounded-full px-5 py-3 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#4E71FF]"
    >
  </div>

  <!-- Grid Menu -->
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6 px-6 w-full max-w-6xl">
    
    <!-- Card Placeholder -->
    <div class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 border border-dashed border-gray-300 hover:shadow-lg transition">
      <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
        <span class="text-gray-400 text-4xl">+</span>
      </div>
      <p class="text-gray-400 font-medium text-center">No Coffee Data</p>
      <button class="mt-4 bg-[#4E71FF] text-white px-5 py-2 rounded-full opacity-50 cursor-not-allowed">
        ADD
      </button>
    </div>

    <!-- Duplikat placeholder cards (opsional untuk tampilan grid) -->
    <div class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 border border-dashed border-gray-300">
      <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
        <span class="text-gray-400 text-4xl">+</span>
      </div>
      <p class="text-gray-400 font-medium text-center">No Coffee Data</p>
      <button class="mt-4 bg-[#4E71FF] text-white px-5 py-2 rounded-full opacity-50 cursor-not-allowed">
        ADD
      </button>
    </div>

    <div class="bg-white rounded-2xl shadow-md flex flex-col items-center justify-center p-6 border border-dashed border-gray-300">
      <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
        <span class="text-gray-400 text-4xl">+</span>
      </div>
      <p class="text-gray-400 font-medium text-center">No Coffee Data</p>
      <button class="mt-4 bg-[#4E71FF] text-white px-5 py-2 rounded-full opacity-50 cursor-not-allowed">
        ADD
      </button>
    </div>

  </div>

  <!-- Footer -->
  <footer class="mt-16 text-gray-400 text-sm">
    © 2025 FUEL UP Coffee. All Rights Reserved.
  </footer>

</body>
</html>
