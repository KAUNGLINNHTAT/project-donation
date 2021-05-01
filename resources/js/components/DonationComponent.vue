<template>

            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Id</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">確認者</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Type</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="donation in donations">
                        <td class="py-4 px-6 border-b border-grey-light">1</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ donation.first_name }} {{ donation.last_name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ donation.email }}</td>
                        <td class="py-4 px-6 border-b border-grey-light"><span v-if="donation.confirm_flg == '1'">CONFIRMED</span></td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ donation.confirm_name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ donation.donation_type }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a href="#" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                            <a href="#" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                                @click="deleteDonation(donation.id)"
                            >Delete</a>
                        </td>
                        </tr>
                </tbody>
            </table>

</template>
<script>
export default {
  data() {
    return {
      donations: {}
    };
  },
  created: function() {
    this.getDonations();
  },
  methods: {
    getDonations: function() {
      axios
        .get("api/donation")
        .then(result => {
          console.log(result);
          this.donations = result.data.data;
        })
        .catch(error => console.log(error));
    },
    deleteDonation(id) {
      console.log(id);
      axios
        .delete("api/donation/ " + id)
        .then(result => {
          this.getDonations();
        })
        .catch(error => console.log(error));
    }
  }
};
</script>
