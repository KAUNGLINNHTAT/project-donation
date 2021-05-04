<template>
    <div class="container">
        <div class="container mx-auto px-4 sm:px-8 py-4 sm:py-2">
            <div class="flex justify-between">
                <div><span class="font-sans sm:text-2xl md:text-3xl items-center">Donation List Add</span></div>
                <div><router-link :to="{name: 'donation-list'}">
                        <backbutton-component></backbutton-component>
                    </router-link>
                </div>
            </div>
        </div>
        <!-- DonationList Form Start -->
        <section class="bg-gray-100 mx-auto bg-opacity-50 px-4 py-4 sm:py-2 sm:px-8">
            <form class="container mx-auto shadow-md md:w-full" @submit.prevent="saveDonationList">
                <div class="space-y-2 bg-white rounded-lg">
                    <div class="items-center w-full px-4 pt-4 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 text-sm">Desicion Date</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="text" v-model="donationlist.desicion_date" b  class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" placeholder="2021-05-01"/>
                            </div>
                        </div>
                    </div>
                    <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 text-sm">Group Donation</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="text" v-model="donationlist.donation_group" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"/>
                            </div>
                        </div>
                    </div>
                    <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 text-sm">Individual Donation</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="text" v-model="donationlist.donation_individual" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"/>
                            </div>
                        </div>
                    </div>
                    <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 text-sm">Desicion Amount</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="txt" v-model="donationlist.desicion_amount" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"/>
                            </div>
                        </div>
                    </div>
                    <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 text-sm">Donation Amount</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="text" v-model="donationlist.donation_amount" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="items-center w-full px-4 pt-2 pb-4 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 sm:text-sm">Display Data</h2>
                        <div class="mx-auto w-4/5">
                            <div class="flex flex-row items-center">
                                <div class="flex flex-row">
                                    <label class="inline-flex items-center ">
                                        <input type="radio" v-model="donationlist.published_flg" value="0" class="h-5 w-5 text-green-600" :checked="donationlist.pulished_flg == 0" @click="publishedRadio(0)"><span class="ml-2 text-gray-700">Published Now </span>
                                    </label>

                                    <label class="inline-flex items-center ml-3">
                                        <input type="radio" v-model="donationlist.published_flg" value="1" class="h-5 w-5 text-red-600" :checked="donationlist.pulished_flg == 1" @click="publishedRadio(1)"><span class="ml-2 text-gray-700">Published Schedule</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="items-center w-full px-4 pb-4 text-gray-800 inline-flex" v-if="unpublished">
                        <h2 class="mx-auto w-1/5 md:pl-2 text-sm">Published At</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="text" v-model="donationlist.published_at" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"/>
                            </div>
                        </div>
                    </div>
                
                    <hr/>
                    <div class="w:full px-4 pb-4 mx-auto text-gray-500 text-center">
                        <button type="submit" class="py-2 px-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-1/3 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"> Add Donation List </button>
                    </div>
                </div>
            </form>
        </section>
        <!-- DonationList Form End --> 
        <modal-success ref="successModal"></modal-success>
    </div>
</template>
<script>
export default {
    data() {
        return {
            donationlist:{},
            unpublished:false,
        }
    },
    methods: {
        publishedRadio(flg) {
            if(flg == 0) {
                this.unpublished = false;
                this.donationlist.published_at = "";
            } else {
                this.unpublished = true;
            }
        },
        saveDonationList: function() {
            axios
                .post("../../api/donationlist", this.donationlist)
                .then(result => {
                    this.donationlist = {};
                    this.$refs.successModal.toggleModal();
                    this.$refs.successModal.themodaltitle = "Donation List Add";
                    console.log(result);

                })
                .catch(error => console.log(error));
        }
    }
};
</script>