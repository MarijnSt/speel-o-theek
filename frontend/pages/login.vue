<template>
  <div class="box">
    <h1 class="title is-2">{{ $t('login_title') }}</h1>
    <div class="inputs">
      <b-field>
        <b-input v-model="formData.email" :placeholder="$t('login_email')"></b-input>
      </b-field>
      <b-field>
        <b-input
          v-model="formData.password"
          type="password"
          :placeholder="$t('login_password')"
          password-reveal
        ></b-input>
      </b-field>
    </div>
    <p v-if="errorMessage" class="error has-text-danger">{{ errorMessage }}</p>
    <b-button type="is-primary" @click="login">{{ $t('login_submit') }}</b-button>
  </div>
</template>

<script>
export default {
  layout: "login",
  auth: "guest",
  data() {
    return {
      formData: {
        email: "",
        password: "",
      },
      errorMessage: ""
    };
  },
  methods: {
    async login() {
      try {
        let response = await this.$auth.loginWith('laravelSanctum', { data: this.formData })
        console.log(response)
      } catch (err) {
        const errors = err.response.data.errors
        console.log(errors)
        if (errors.email && errors.email[0] === 'Email does not exist') {
          this.errorMessage = this.$t('login_error_mail')
        } else if (errors.password && errors.password[0] === 'Wrong password') {
          this.errorMessage = this.$t('login_error_pw')
        } else {
          this.errorMessage = this.$t('login_error')
        }
      }
    }
  },
};
</script>

<style lang="scss" scoped>
.box {
  width: 380px;
  display: flex;
  flex-direction: column;

  h1 {
    text-align: center;
  }

  .inputs {
    margin: 0.5rem 0 1.5rem;
    
    .field {
      margin-bottom: 1rem;
    }
  }

  .error {
    margin-top: -1rem;
    margin-bottom: 1rem;
    text-align: center;
  }
}

@media screen and (max-width: 450px) {
  .box {
    width: 100vw;
    height: 100vh;
    justify-content: center;

    h1 {
      margin-bottom: 2rem;
    }
  }
}
</style>