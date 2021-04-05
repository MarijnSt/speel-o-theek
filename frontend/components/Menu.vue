<template>
  <div class="menu-container"></div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
  .menu-container {
    width: 4rem;
    height: 100vh;
    background: $green;

    @include max-tablet {
      background: $blue;
    }
  }
</style>