<template>
  <div class="hamburger" @click="openMenu">
    <span></span>
    <span></span>
    <span></span>
  </div>
</template>

<script>
export default {
  methods: {
    openMenu() {
      const hamburger = document.querySelector('.hamburger')
      const menu = document.querySelector('.menu-container')
      hamburger.classList.toggle('open')
      menu.classList.toggle('open')
    }
  }
}
</script>

<style lang='scss' scoped>
.hamburger {
  position: relative;
  top: 3px;
  width: 2rem;
  height: 2rem;
  cursor: pointer;

  span {
    position: absolute;
    background: white;
    height: 3px;
    width: 100%;
    transition: opacity .1s ease .2s,
                transform .2s ease,
                top .2s ease .2s,
  }

  span:first-child {
    top: 0;
  }

  span:nth-child(2) {
    top: 10px;
  }

  span:nth-child(3) {
    top: 20px;
  }

  &.open {
    span {
      transition: opacity .1s ease,
                  transform .2s ease .2s,
                  top .2s ease;
    }

    span:first-child {
      top: 10px;
      transform: rotate(45deg);
    }

    span:nth-child(2) {
      opacity: 0;
    }

    span:nth-child(3) {
      top: 10px;
      transform: rotate(-45deg);
    }
  }
}
</style>