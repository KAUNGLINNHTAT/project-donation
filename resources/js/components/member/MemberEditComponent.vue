<template>
    <div class="container">
        <div class="container mx-auto px-4 sm:px-8 py-4 sm:py-2">
            <div class="flex justify-between">
                <div><span class="font-sans sm:text-2xl md:text-3xl items-center">Member Edit</span></div>
                <div><router-link :to="{name: 'member'}">
                        <backbutton-component></backbutton-component>
                    </router-link>
                </div>
            </div>
        </div>
        <!-- Member Form Start -->
        <section class="bg-gray-100 mx-auto bg-opacity-50 px-4 py-4 sm:py-2 sm:px-8">
            <form class="container mx-auto shadow-md md:w-full" @submit.prevent="updateMember">
                <div class="space-y-2 bg-white rounded-lg">
                    <div class="items-center w-full px-4 pt-4 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 sm:text-sm">Name</h2>
                        <div class="mx-auto w-4/5">
                            <div class=" relative ">
                                <input type="text" v-model="member.name" b id="user-info-email" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" placeholder="Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 sm:text-sm">Email</h2>
                        <div class="mx-auto w-4/5">
                            <div class="relative ">
                                <input type="email" v-model="member.email" id="user-info-email" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" placeholder="Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 sm:text-sm">Role</h2>
                        <div class="mx-auto w-4/5">
                            <div class="relative inline-block w-full md:w-1/2 text-gray-700 ">
                                <select v-model="member.role" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                                    <option value=''>---</option>
                                    <option value='supporter' :selected="member.role == 'supporter'">SUPPORTER</option>
                                    <option value='volunteer' :selected="member.role == 'volunteer'">VOLUNTEER</option>
                                    <option value='admin' :selected="member.role == 'admin'">ADMIN</option>
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="items-center w-full px-4 pt-2 pb-4 text-gray-800 inline-flex">
                        <h2 class="mx-auto w-1/5 md:pl-2 sm:text-sm">Status</h2>
                        <div class="mx-auto w-4/5">
                            <div class="flex flex-row items-center">
                                <div class="flex flex-row">
                                    <label class="inline-flex items-center ">
                                        <input type="radio" v-model="member.status" value="0" class="h-5 w-5 text-green-600" :checked="member.status == 0"><span class="ml-2 text-gray-700">Active </span>
                                    </label>

                                    <label class="inline-flex items-center ml-3">
                                        <input type="radio" v-model="member.status" value="1" class="h-5 w-5 text-red-600" :checked="member.status == 1"><span class="ml-2 text-gray-700">Deactived</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="w:full px-4 pb-4 mx-auto text-gray-500 text-center">
                        <button type="submit" class="py-2 px-4 bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-1/3 transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 rounded-lg"> Update Member </button>
                    </div>
                </div>
            </form>
        </section>
    <!-- Member Form End --> 
        <modal-success ref="successModal"></modal-success>
    </div>
</template>
<script>
export default {
    data() {
        return {
            member:{},
        }
    },
    created() {
        axios
            .get("../../../api/member/" + this.$route.params.id + "/edit")
            .then(response => (this.member = response.data.data))
            .catch(erorr => console.log(error));
    },
    methods: {
        updateMember: function() {
            axios
            .put("../../../api/member/"+ this.$route.params.id, this.member)
            .then(result => {
                this.$refs.successModal.toggleModal();
                this.$refs.successModal.themodaltitle = "Member Update";
                console.log(result);
            })
            .catch(error => console.log(error));
        }
    }
};
</script>