<template>
  <div class="app-container">
    <Menu/>
    <Nuxt/>
  </div>
</template>

<script>
import Menu from "~/components/Menu.vue"
export default {
  components: {
    Menu
  },
  // head () {
  //   return this.$nuxtI18nHead({ addSeoAttributes: true })
  // },
  mounted() {
    console.log('ieps')
    // close menu on page change
  },
}
</script>

<style lang="scss" scoped>
.app-container {
  width: 100vw;
  height: 100vh;
}
</style>

<style lang="scss">
.content-container {
  padding: 1rem;
}
</style>
