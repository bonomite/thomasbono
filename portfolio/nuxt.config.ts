// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  css: ['vue-easy-lightbox/dist/external-css/vue-easy-lightbox.css'],
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxt/content'
  ],
  content: {
    studio: {
      enabled: true
    },
    collections: {
      sites: {
        name: 'Sites',
        type: 'collection',
        fields: {
          title: { name: 'Title', type: 'text' },
          description: { name: 'Description', type: 'textarea' },
          cover: { name: 'Cover Image', type: 'image' },
          images: { name: 'Images', type: 'list', of: { type: 'image' } },
          date: { name: 'Date', type: 'date' }
        }
      },
      design: {
        name: 'Design',
        type: 'collection',
        fields: {
          title: { name: 'Title', type: 'text' },
          description: { name: 'Description', type: 'textarea' },
          cover: { name: 'Cover Image', type: 'image' },
          images: { name: 'Images', type: 'list', of: { type: 'image' } },
          date: { name: 'Date', type: 'date' }
        }
      },
      motion: {
        name: 'Motion',
        type: 'collection',
        fields: {
          title: { name: 'Title', type: 'text' },
          description: { name: 'Description', type: 'textarea' },
          videos: { name: 'YouTube Video IDs', type: 'list', of: { type: 'text' } },
          date: { name: 'Date', type: 'date' }
        }
      },
      photography: {
        name: 'Photography',
        type: 'collection',
        fields: {
          title: { name: 'Title', type: 'text' },
          description: { name: 'Description', type: 'textarea' },
          cover: { name: 'Cover Image', type: 'image' },
          images: { name: 'Images', type: 'list', of: { type: 'image' } },
          date: { name: 'Date', type: 'date' }
        }
      }
    }
  },
  app: {
    head: {
      script: [
        {
          hid: 'tawk.to',
          src: 'https://embed.tawk.to/5c6329287cf662208c953ec1/default',
          async: true,
          defer: true
        }
      ]
    }
  }
})
