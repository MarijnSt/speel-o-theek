export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'Toy App',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  router: {
    middleware: ['auth']
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '~/assets/sass/init.scss',
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    'nuxt-buefy',
    '@nuxtjs/axios',
    '@nuxtjs/auth-next',
    'nuxt-i18n',
  ],
  
  buildModules: [
    '@nuxtjs/style-resources',
  ],

  // Buefy config
  buefy: {
    css: false,
  },

  // Axios module configuration: https://go.nuxtjs.dev/config-axios
  axios: {},

  // Auth module configuration: https://auth.nuxtjs.org/
  auth: {
    strategies: {
      'laravelSanctum': {
        provider: 'laravel/sanctum',
        url: 'http://localhost:8000',
        endpoints: {
          login: {
            url: '/api/login'
          },
          logout: {
            url: '/api/logout'
          }
        }
      },
    },
    plugins: ['~/plugins/auth.js'],
    redirect: {
      login: '/login',
      logout: '/login',
      home: '/',
    }
  },

  // i18n module configuration: https://i18n.nuxtjs.org
  i18n: {
    locales: [
      { code: 'en', iso:'en' ,file: 'en.js' },
      { code: 'nl', iso:'nl' ,file: 'nl.js' },
      { code: 'fr', iso:'fr' ,file: 'fr.js' }
    ],
    lazy: true,
    langDir: 'lang/',
    defaultLocale: 'en',
    strategy: 'prefix',
    seo: false,
    vueI18n: {
      fallbackLocale: 'en'
    },
  },

  // style resources config: https://github.com/nuxt-community/style-resources-module#readme
  styleResources: {
    scss: [
        '~/assets/sass/globalImports.scss',
    ]
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
