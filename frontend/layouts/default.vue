<template>
  <div class="app-container">
    <Nuxt/>
  </div>
</template>

<script>
export default {
  head () {
    return this.$nuxtI18nHead({ addSeoAttributes: true })
  }
}
</script>

<style lang="scss" scoped>
.app-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
}
</style>
