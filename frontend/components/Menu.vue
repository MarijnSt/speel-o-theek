<template>
  <div class="menu-container">
    <div class="menu-top">
      <nuxt-link :to="localePath('/')" class="logo" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg viewBox="0 0 24 24">
            <path fill="currentColor" d="M21,16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V7.5C3,7.12 3.21,6.79 3.53,6.62L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.79,6.79 21,7.12 21,7.5V16.5M12,4.15L6.04,7.5L12,10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V9.21L13,12.58V19.29L19,15.91Z" />
          </svg>
        </div>
      </nuxt-link>
      <Hamburger/>
    </div>
    <div class="items-container">
      <nuxt-link :to="localePath('catalog')" class="menu-item" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 6V5A2 2 0 0 0 17 3H15A2 2 0 0 0 13 5V6H11V5A2 2 0 0 0 9 3H7A2 2 0 0 0 5 5V6H3V20H11.81A6.59 6.59 0 0 1 10.5 18H5V8H19V9.5A6.59 6.59 0 0 1 21 10.81V6M20.31 17.9A4.5 4.5 0 1 0 18.88 19.32L22 22.39L23.39 21M16.5 18A2.5 2.5 0 1 1 19 15.5A2.5 2.5 0 0 1 16.5 18Z" />
          </svg>
        </div>
        <p class="menu-title">{{ $t('menu_toy_catalog') }}</p>
      </nuxt-link>
      <nuxt-link :to="localePath('check-in')" class="menu-item" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M10,0V4H8L12,8L16,4H14V0M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
          </svg>
        </div>
        <p class="menu-title">{{ $t('menu_check_in') }}</p>
      </nuxt-link>
      <nuxt-link :to="localePath('check-out')" class="menu-item" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12,0L8,4H10V8H14V4H16M1,2V4H3L6.6,11.59L5.25,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42C7.29,15 7.17,14.89 7.17,14.75L7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.59 17.3,11.97L21.16,4.96L19.42,4H19.41L18.31,6L15.55,11H8.53L8.4,10.73L6.16,6L5.21,4L4.27,2M7,18A2,2 0 0,0 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20A2,2 0 0,0 7,18M17,18A2,2 0 0,0 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20A2,2 0 0,0 17,18Z" />
          </svg>
        </div>
        <p class="menu-title">{{ $t('menu_check_out') }}</p>
      </nuxt-link>
      <nuxt-link :to="localePath('toy-admin')" class="menu-item" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" />
          </svg>
        </div>
        <p class="menu-title">{{ $t('menu_toy_admin') }}</p>
      </nuxt-link>
      <nuxt-link :to="localePath('user-admin')" class="menu-item" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M10 4A4 4 0 0 0 6 8A4 4 0 0 0 10 12A4 4 0 0 0 14 8A4 4 0 0 0 10 4M10 6A2 2 0 0 1 12 8A2 2 0 0 1 10 10A2 2 0 0 1 8 8A2 2 0 0 1 10 6M17 12C16.84 12 16.76 12.08 16.76 12.24L16.5 13.5C16.28 13.68 15.96 13.84 15.72 14L14.44 13.5C14.36 13.5 14.2 13.5 14.12 13.6L13.16 15.36C13.08 15.44 13.08 15.6 13.24 15.68L14.28 16.5V17.5L13.24 18.32C13.16 18.4 13.08 18.56 13.16 18.64L14.12 20.4C14.2 20.5 14.36 20.5 14.44 20.5L15.72 20C15.96 20.16 16.28 20.32 16.5 20.5L16.76 21.76C16.76 21.92 16.84 22 17 22H19C19.08 22 19.24 21.92 19.24 21.76L19.4 20.5C19.72 20.32 20.04 20.16 20.28 20L21.5 20.5C21.64 20.5 21.8 20.5 21.8 20.4L22.84 18.64C22.92 18.56 22.84 18.4 22.76 18.32L21.72 17.5V16.5L22.76 15.68C22.84 15.6 22.92 15.44 22.84 15.36L21.8 13.6C21.8 13.5 21.64 13.5 21.5 13.5L20.28 14C20.04 13.84 19.72 13.68 19.4 13.5L19.24 12.24C19.24 12.08 19.08 12 19 12H17M10 13C7.33 13 2 14.33 2 17V20H11.67C11.39 19.41 11.19 18.77 11.09 18.1H3.9V17C3.9 16.36 7.03 14.9 10 14.9C10.43 14.9 10.87 14.94 11.3 15C11.5 14.36 11.77 13.76 12.12 13.21C11.34 13.08 10.6 13 10 13M18.04 15.5C18.84 15.5 19.5 16.16 19.5 17.04C19.5 17.84 18.84 18.5 18.04 18.5C17.16 18.5 16.5 17.84 16.5 17.04C16.5 16.16 17.16 15.5 18.04 15.5Z" />
          </svg>
        </div>
        <p class="menu-title">{{ $t('menu_user_admin') }}</p>
      </nuxt-link>
      <nuxt-link :to="localePath('reports')" class="menu-item" @click.native="chooseItem" exact>
        <div class="icon-svg">
          <svg style="width:24px;height:24px" viewBox="0 0 24 24">
            <path fill="currentColor" d="M15.5,12C18,12 20,14 20,16.5C20,17.38 19.75,18.21 19.31,18.9L22.39,22L21,23.39L17.88,20.32C17.19,20.75 16.37,21 15.5,21C13,21 11,19 11,16.5C11,14 13,12 15.5,12M15.5,14A2.5,2.5 0 0,0 13,16.5A2.5,2.5 0 0,0 15.5,19A2.5,2.5 0 0,0 18,16.5A2.5,2.5 0 0,0 15.5,14M5,3H19C20.11,3 21,3.89 21,5V13.03C20.5,12.23 19.81,11.54 19,11V5H5V19H9.5C9.81,19.75 10.26,20.42 10.81,21H5C3.89,21 3,20.11 3,19V5C3,3.89 3.89,3 5,3M7,7H17V9H7V7M7,11H12.03C11.23,11.5 10.54,12.19 10,13H7V11M7,15H9.17C9.06,15.5 9,16 9,16.5V17H7V15Z" />
          </svg>
        </div>
        <p class="menu-title">{{ $t('menu_reports') }}</p>
      </nuxt-link>
    </div>
  </div>
</template>

<script>
import Hamburger from './Hamburger.vue'
export default {
  components: {
    Hamburger
  },
  methods: {
    chooseItem () {
      const hamburger = document.querySelector('.hamburger')
      const menu = document.querySelector('.menu-container')
      hamburger.classList.remove('open')
      menu.classList.remove('open')
    }
  }
}
</script>

<style lang="scss" scoped>
  .menu-container {
    width: 100%;
    background: $green;
    color: white;
    position: relative;
    height: 4rem;

    .menu-top {
      padding: 1rem;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 5;
      background: $green;

      .logo {
        color: white;
        .icon-svg {
          width: 2.5rem;
          height: 2.5rem;
        }
      }
    }

    .items-container {
      position: absolute;
      z-index: 1;
      top: -500px;
      left: 0;
      width: 100%;
      background: $green;
      opacity: 1;
      transition: all .5s ease;
      display: flex;
      flex-direction: column;
      justify-content: center;

      .menu-item {
        color: rgba(255, 255, 255, .8);
        cursor: pointer;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding: 1.5rem;

        &:hover {
          background: rgba(255, 255, 255, .1);
          color: white;
        }

        .menu-title {
          margin-left: 1rem;
          font-weight: 700;
        }

        &.nuxt-link-active {
          color: white;
        }
      }
    }

    &.open .items-container {
      padding: 1rem;
      top: 4rem;
      height: calc(100vh - 4rem);
    }
  }
</style>