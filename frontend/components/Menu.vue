<template>
  <div class="menu-container">
    <div class="menu-top">
      <div class="logo">
        <b-icon icon="chess-knight" size="is-medium"></b-icon>
      </div>
      <Hamburger/>
    </div>
    <div class="items-container">
      <div class="menu-item">
        <b-icon icon="toy-brick-search-outline"></b-icon>
        <p class="label">{{ $t('menu_toy_catalog') }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import Hamburger from './Hamburger.vue'
export default {
  components: {
    Hamburger
  }
}
</script>

<style lang="scss" scoped>
  .menu-container {
    width: 100%;
    padding: .5rem 1rem;
    background: $green;
    color: white;

    .menu-top {
      height: 3rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  }
</style>