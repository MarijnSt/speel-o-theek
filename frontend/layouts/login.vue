<template>
  <div class="login-container">
    <Nuxt />
  </div>
</template>

<script>
export default {
  head() {
    return this.$nuxtI18nHead({ addSeoAttributes: true });
  },
  mounted() {
    // console.log("login layout");
  },
};
</script>

<style lang="scss" scoped>
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100vw;
  height: 100vh;
}
</style>