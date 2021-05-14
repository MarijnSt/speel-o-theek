<template>
  <div class="content-container">
    Ieps
  </div>
</template>

<script>
export default {
  name: "UserEdit",
  data() {
    return {
      user: []
    }
  },
  async asyncData({ $axios, $config, route, params }) {
    console.log('id', params.id)
    try {
      const res = await $axios.$get(`${$config.apiURL}/api/users/${params.id}`)
      console.log('res', res)
      const user = res
      return { user }
    } catch (err) {
      console.log('err', err)
    }
  },
  mounted() {
    // console.log('id', this.$route.params.id)
  }
}
</script>

<style>

</style>