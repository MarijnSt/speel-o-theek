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
      hamburger.classList.toggle('open')
    }
  }
}
</script>

<style lang='scss' scoped>
.hamburger {
  position: relative;
  width: 2rem;
  height: 2rem;

  span {
    position: absolute;
    background: white;
    height: 3px;
    width: 100%;
    transition: opacity .1s ease .3s,
                transform .3s ease,
                top .3s ease .3s,
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
                  transform .3s ease .3s,
                  top .3s ease;
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