<template>
  <div class="aspect-w-16 aspect-h-9">
    <iframe
      :src="`https://www.youtube.com/embed/${videoId}`"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
      class="w-full h-full"
    ></iframe>
  </div>
</template>

<script setup>
defineProps({
  videoId: {
    type: String,
    required: true
  }
})
</script>
