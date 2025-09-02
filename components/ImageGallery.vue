<template>
  <div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
      <div
        v-for="(image, index) in images"
        :key="index"
        class="cursor-pointer"
        @click="() => showImg(index)"
      >
        <img :src="image" :alt="`Image ${index + 1}`" class="w-full h-auto rounded-lg">
      </div>
    </div>
    <vue-easy-lightbox
      :visible="visible"
      :imgs="images"
      :index="index"
      @hide="handleHide"
    ></vue-easy-lightbox>
  </div>
</template>

<script setup>
import VueEasyLightbox from 'vue-easy-lightbox'
import { ref } from 'vue'

const props = defineProps({
  images: {
    type: Array,
    required: true
  }
})

const visible = ref(false)
const index = ref(0)

const showImg = (i) => {
  index.value = i
  visible.value = true
}

const handleHide = () => {
  visible.value = false
}
</script>
