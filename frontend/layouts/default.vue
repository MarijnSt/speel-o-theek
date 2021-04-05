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
  head () {
    return this.$nuxtI18nHead({ addSeoAttributes: true })
  }
}
</script>

<style lang="scss" scoped>
.app-container {
  width: 100vw;
  height: 100vh;
}
</style>
