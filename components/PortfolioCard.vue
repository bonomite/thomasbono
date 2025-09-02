<template>
  <NuxtLink :to="item._path" class="block group">
    <div class="overflow-hidden rounded-lg">
      <img :src="item.cover" :alt="item.title" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-300">
    </div>
    <h3 class="mt-4 text-lg font-semibold text-gray-800 group-hover:text-blue-500">{{ item.title }}</h3>
    <p class="mt-1 text-gray-600">{{ new Date(item.date).toLocaleDateString() }}</p>
  </NuxtLink>
</template>

<script setup>
defineProps({
  item: {
    type: Object,
    required: true
  }
})
</script>
