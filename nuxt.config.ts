// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-09-02',
  css: ['vue-easy-lightbox/dist/external-css/vue-easy-lightbox.css'],
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxt/content'
  ],
  app: {
    head: {
      script: [
        {
          src: 'https://embed.tawk.to/5c6329287cf662208c953ec1/default',
          async: true,
          defer: true
        }
      ]
    }
  }
})
