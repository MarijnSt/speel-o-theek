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
        default-sort="id"
        aria-next-label="Next page"
        aria-previous-label="Previous page"
        aria-page-label="Page"
        aria-current-label="Current page"
      >
        <b-table-column
          field="id"
          :label="$t('label_id')"
          width="40"
          sortable
          numeric
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
          label="First Name"
          sortable
          v-slot="props"
        >
          {{ props.row.firstName }}
        </b-table-column>

        <b-table-column
          field="user.lastName"
          label="Last Name"
          sortable
          v-slot="props"
        >
          {{ props.row.lastName }}
        </b-table-column>

        <b-table-column
          field="user.mobilePhone"
          label="Mobile Phone"
          sortable
          v-slot="props"
        >
          {{ props.row.mobilePhone }}
        </b-table-column>

        <b-table-column
          field="user.fixedPhone"
          label="Fixed Phone"
          sortable
          v-slot="props"
        >
          {{ props.row.fixedPhone }}
        </b-table-column>

        <b-table-column
          field="user.email"
          label="Email"
          sortable
          v-slot="props"
        >
          {{ props.row.email }}
        </b-table-column>

        <b-table-column
          field="user.street"
          label="Street"
          sortable
          v-slot="props"
        >
          {{ props.row.street }}
        </b-table-column>

        <b-table-column
          field="user.houseNumber"
          label="Number"
          sortable
          v-slot="props"
        >
          {{ props.row.box ? props.row.houseNumber + ', ' + props.row.box : props.row.houseNumber }}
        </b-table-column>

        <b-table-column
          field="user.postalCode"
          label="Postal Code"
          sortable
          v-slot="props"
        >
          {{ props.row.postalCode }}
        </b-table-column>

        <b-table-column
          field="user.city"
          label="City"
          sortable
          v-slot="props"
        >
          {{ props.row.city }}
        </b-table-column>

        <b-table-column
          field="user.uitPas"
          label="UiTPAS"
          sortable
          v-slot="props"
        >
          {{ props.row.uitPas === 0 ? 'No' : 'Yes' }}
        </b-table-column>

        <b-table-column
          field="user.paymentReceived"
          label="Payment Received"
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
          label="Created"
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