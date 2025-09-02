<template>
  <div>
    <div v-if="pending">
      <p>Loading...</p>
    </div>
    <div v-else-if="error">
      <p>Error loading projects.</p>
    </div>
    <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <PortfolioCard v-for="item in items" :key="item._id" :item="item" />
    </div>
  </div>
</template>

<script setup>
const props = defineProps({
  collection: {
    type: String,
    required: true
  }
})

const { data: items, pending, error } = await useAsyncData(
  `portfolio-${props.collection}`,
  () => queryContent(props.collection).find()
)
</script>
