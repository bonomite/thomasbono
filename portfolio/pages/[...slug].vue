<template>
  <main>
    <ContentDoc v-slot="{ doc }">
      <article>
        <h1 class="text-4xl font-bold mb-4">{{ doc.title }}</h1>
        <p class="text-gray-600 mb-8">{{ new Date(doc.date).toLocaleDateString() }}</p>
        <div class="prose max-w-none">
          <ContentRenderer :value="doc" />
        </div>
        <div v-if="doc.images && doc.images.length" class="mt-8">
          <h2 class="text-2xl font-bold mb-4">Images</h2>
          <ImageGallery :images="doc.images" />
        </div>
        <div v-if="doc.videos && doc.videos.length" class="mt-8">
          <h2 class="text-2xl font-bold mb-4">Videos</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <YouTubeEmbed v-for="video in doc.videos" :key="video" :video-id="video" />
          </div>
        </div>
        <div class="mt-8">
          <h2 class="text-2xl font-bold mb-4">Share</h2>
          <SocialShare />
        </div>
      </article>
    </ContentDoc>
  </main>
</template>
