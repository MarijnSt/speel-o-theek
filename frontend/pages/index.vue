<template>
  <div class="content-container">
    <p class="mb-4">Elaba {{ this.$auth.user.name }}</p>

    <b-button type="is-primary" @click="logout">Logout</b-button>
  </div>
</template>

<script>

export default {
  name: 'HomePage',
  mounted() {
    // console.log('user', this.$auth.user)
  },
  methods: {
    async logout() {
      try {
        let response = await this.$auth.logout()
        console.log(response)
      } catch (err) {
        console.log(err.response)
      }
    }
  }
}
</script>
