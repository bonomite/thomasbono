<template>
  <ClientOnly>
    <div class="flex space-x-4">
      <a :href="`https://www.facebook.com/sharer/sharer.php?u=${pageUrl}`" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-600">Facebook</a>
      <a :href="`https://twitter.com/intent/tweet?url=${pageUrl}`" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-400">Twitter</a>
      <a :href="`https://www.linkedin.com/shareArticle?mini=true&url=${pageUrl}`" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-blue-700">LinkedIn</a>
      <a :href="`https://pinterest.com/pin/create/button/?url=${pageUrl}`" target="_blank" rel="noopener noreferrer" class="text-gray-600 hover:text-red-600">Pinterest</a>
    </div>
  </ClientOnly>
</template>

<script setup>
import { computed } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()
const pageUrl = computed(() => {
  if (typeof window !== 'undefined') {
    return window.location.origin + route.fullPath
  }
  return ''
})
</script>
