<template>
  <div class="content-container">
    <div class="actions mt-4">
      <NuxtLink :to="localePath('/users/create')">
        <button class="button is-primary">{{ $t('add_user') }}</button>
      </NuxtLink>
    </div>

    <div class="table-container">
      <b-table
        :data="users"
        :paginated="isPaginated"
        :per-page="perPage"
        :current-page.sync="currentPage"
        :pagination-simple="isPaginationSimple"
        :pagination-position="paginationPosition"
        :default-sort-direction="defaultSortDirection"
        :pagination-rounded="isPaginationRounded"
        :sort-icon="sortIcon"
        :sort-icon-size="sortIconSize"
        :hoverable="isHoverable"
        default-sort="id"
        aria-next-label="Next page"
        aria-previous-label="Previous page"
        aria-page-label="Page"
        aria-current-label="Current page"
      >
        <b-table-column
          field="edit"
          width="40"
          v-slot="props"
        >
          <nuxt-link :to="localePath('users')">
            <span class="icon">
              <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                <path d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
              </svg>
            </span>
          </nuxt-link>
        </b-table-column>
        
        <b-table-column
          field="delete"
          width="40"
          v-slot="props"
        >
          <nuxt-link :to="localePath('users')">
            <span class="icon">
              <svg style="width:20px;height:20px" viewBox="0 0 24 24">
                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
              </svg>
            </span>
          </nuxt-link>
        </b-table-column>

        <b-table-column
          field="id"
          :label="$t('label_id')"
          width="40"
          sortable
          numeric
          centered
          v-slot="props"
        >
          {{ props.row.id }}
        </b-table-column>

        <b-table-column
          field="user.user_role"
          :label="$t('label_user_role')"
          sortable
          v-slot="props"
        >
          {{ props.row.user_role.role }}
        </b-table-column>

        <b-table-column
          field="user.firstName"
          :label="$t('label_first_name')"
          sortable
          v-slot="props"
        >
          {{ props.row.firstName }}
        </b-table-column>

        <b-table-column
          field="user.lastName"
          :label="$t('label_last_name')"
          sortable
          v-slot="props"
        >
          {{ props.row.lastName }}
        </b-table-column>

        <b-table-column
          field="user.mobilePhone"
          :label="$t('label_mobile_phone')"
          sortable
          v-slot="props"
        >
          {{ props.row.mobilePhone }}
        </b-table-column>

        <b-table-column
          field="user.fixedPhone"
          :label="$t('label_fixed_phone')"
          sortable
          v-slot="props"
        >
          {{ props.row.fixedPhone }}
        </b-table-column>

        <b-table-column
          field="user.email"
          :label="$t('label_email')"
          sortable
          v-slot="props"
        >
          {{ props.row.email }}
        </b-table-column>

        <b-table-column
          field="user.street"
          :label="$t('label_street')"
          sortable
          v-slot="props"
        >
          {{ props.row.street }}
        </b-table-column>

        <b-table-column
          field="user.houseNumber"
          :label="$t('label_number')"
          sortable
          v-slot="props"
        >
          {{ props.row.box ? props.row.houseNumber + ', ' + props.row.box : props.row.houseNumber }}
        </b-table-column>

        <b-table-column
          field="user.postalCode"
          :label="$t('label_postal_code')"
          sortable
          v-slot="props"
        >
          {{ props.row.postalCode }}
        </b-table-column>

        <b-table-column
          field="user.city"
          :label="$t('label_city')"
          sortable
          v-slot="props"
        >
          {{ props.row.city }}
        </b-table-column>

        <b-table-column
          field="user.uitPas"
          :label="$t('label_uitPas')"
          sortable
          v-slot="props"
        >
          {{ props.row.uitPas === 0 ? 'No' : 'Yes' }}
        </b-table-column>

        <b-table-column
          field="user.paymentReceived"
          :label="$t('label_payment_received')"
          sortable
          centered
          v-slot="props"
        >
          <span v-if="props.row.paymentReceived === null" class="tag is-danger">
            {{ 'None' }}
          </span>
          <span v-else>
            {{ new Date(props.row.paymentReceived).toLocaleDateString() }}
          </span>
        </b-table-column>

        <b-table-column
          field="user.createdDate"
          :label="$t('label_created_at')"
          sortable
          centered
          v-slot="props"
        >
          {{ new Date(props.row.created_at).toLocaleDateString() }}
        </b-table-column>
      </b-table>
    </div>
  </div>
</template>

<script>
export default {
  name: "UserAdmin",
  data() {
    return {
      users: [],
      isPaginated: true,
      isPaginationSimple: false,
      isPaginationRounded: false,
      paginationPosition: "both",
      defaultSortDirection: "asc",
      sortIcon: "chevron-up",
      sortIconSize: "is-small",
      currentPage: 1,
      perPage: 20,
      isHoverable: true
    };
  },
  async asyncData({ $axios, $config, app }) {
    const lang = app.i18n.locale
    console.log('lang', lang)
    try {
      const res = await $axios.$get(`${$config.apiURL}/api/users`)
      console.log('res', res)
      const users = res
      return { users }
    } catch (err) {
      console.log('err', err)
    }
  },
};
</script>

<style>
</style>