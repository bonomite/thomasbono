<template>
  <div class="bg-gray-100 min-h-screen">
    <header class="bg-white shadow">
      <nav class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
          <NuxtLink to="/" class="text-xl font-semibold text-gray-700">Thomas Bono</NuxtLink>
          <ul class="flex space-x-4">
            <li><NuxtLink to="/sites" class="text-gray-700 hover:text-blue-500">Sites</NuxtLink></li>
            <li><NuxtLink to="/design" class="text-gray-700 hover:text-blue-500">Design</NuxtLink></li>
            <li><NuxtLink to="/motion" class="text-gray-700 hover:text-blue-500">Motion</NuxtLink></li>
            <li><NuxtLink to="/photography" class="text-gray-700 hover:text-blue-500">Photography</NuxtLink></li>
            <li><NuxtLink to="/my-career-story" class="text-gray-700 hover:text-blue-500">My Career Story</NuxtLink></li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="container mx-auto px-6 py-8">
      <slot />
    </main>

    <footer class="bg-white shadow mt-8">
      <div class="container mx-auto px-6 py-4 text-center text-gray-600">
        &copy; 2025 Thomas Bono. All rights reserved.
      </div>
    </footer>
  </div>
</template>
