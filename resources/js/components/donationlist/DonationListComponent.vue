<template>
  <div class="container">
    <!-- Member Add Button -->
    <div class="container mx-auto px-4 sm:px-8 py-4 sm:py-2">
        <div class="flex justify-between">
            <div><span class="font-sans sm:text-2xl md:text-3xl items-center">Donation List</span></div>
            <div><router-link :to="{name: 'donation-list-add'}">
                    <button class="sm:mr-2 px-4 py-2 text-base font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit" >Add Donation</button>
                </router-link>
            </div>
        </div>
    </div>
    <!-- End Member Add Button -->
    <!-- Member Search -->
    <section class="bg-gray-100 mx-auto bg-opacity-50 px-4 py-4 sm:py-2 sm:px-8">
        <form class="container mx-auto shadow-md md:w-full" @submit.prevent="searchMembers">
            <div class="space-y-2 bg-white rounded-lg">
                <div class="items-center w-full px-4 pt-4 text-gray-800 inline-flex">
                    <h2 class="mx-auto w-1/5 md:pl-2 ">Name</h2>
                    <div class="mx-auto w-4/5">
                        <div class=" relative ">
                            <input type="text" v-model="name" id="user-info-email" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" placeholder="Name"/>
                        </div>
                    </div>
                </div>
               
                <hr/>
                <div class="w:full px-4 pb-4 mx-auto text-gray-500 text-center">
                    <button type="submit" class="py-2 px-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-1/3 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"> Search </button>
                </div>
            </div>
        </form>
    </section>
    <!-- Member Search End --> 

    <!-- Member List -->
    <div class="container mx-auto px-4 sm:px-8">
        <div class="sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
          <div class="md:w-full inline-block shadow rounded-lg overflow-hidden">
            <table class="leading-normal">
              <thead>
                <tr>
                    <th scope="col" class="w-1/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">#</th>
                    <th scope="col" class="w-3/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Desicion Date</th>
                    <th scope="col" class="w-3/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Group Donation</th>
                    <th scope="col" class="w-3/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Individual Donation</th>
                    <th scope="col" class="w-2/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Desicion Amount</th>
                    <th scope="col" class="w-2/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Donate Amount</th>
                    <th scope="col" class="w-2/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Published Status</th>
                    <th scope="col" class="w-1/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="donation in donationlist">
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">1</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ donation.desicion_date }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ donation.donation_group }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ donation.donation_individual }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ donation.desicion_amount > 0 ? donation.desicion_amount.toLocaleString():"-" }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ donation.donation_amount > 0 ? donation.donation_amount.toLocaleString():"-" }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span v-if="donation.published_flg == '0'" class="relative inline-block px-3 py-1 font-semibold text-gray-900 leading-tight">
                        <span aria-hidden="true" class="absolute inset-0 bg-gray-200 opacity-50 rounded-full"></span>
                        <span class="relative">unpublish</span>
                        </span>
                        <span v-else class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">published</span>
                        </span>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex flex-row justify-between">
                            <router-link :to="{name: 'donation-list-edit', params: { id: donation.id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 20 20"><path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg>
                            </router-link>
                            <a href="#" class="apperance-none"  @click="deleteMember(donation.id)">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-red-500"  viewBox="0 0 20 20"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
                            </a>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>

    <!-- Member List End -->
  </div>
</template>
<script>
export default {
    data() {
        return {
            donationlist: {},
            name : "",
            email: "",
            role: [],
            count:1,
        };
    },
    created: function() {
        this.getDonationList();
    },
    methods: {
        getDonationList: function() {
            axios
                .get("../api/donationlist")
                .then(result => {
                    console.log(result.data.data);
                    this.donationlist = result.data.data;
                })
                .catch(error => console.log(error));
        },
        searchMembers: function() {
            let formData = {
                'name': this.name,
                'email': this.email,
                'role': this.role,
            };

            axios
                .post("../api/member/search", formData)
                .then(result => {
                    console.log(result);
                    this.members = result.data.data;
                })
                .catch(error => console.log(error));
        },
        deleteMember(id) {
            axios
                .delete("../api/member/ " + id)
                .then(result => {
                this.getMembers();
                })
                .catch(error => console.log(error));
        }
    }
};
</script>
