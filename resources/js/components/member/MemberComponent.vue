<template>
  <div class="container">
    <!-- Member Add Button -->
    <div class="container mx-auto px-4 sm:px-8 py-4 sm:py-2">
        <div class="flex justify-between">
            <div><span class="font-sans sm:text-2xl md:text-3xl items-center">Member List</span></div>
            <div><router-link :to="{name: 'member-add'}">
                    <button class="sm:mr-2 px-4 py-2 text-base font-semibold text-white bg-green-600 rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-purple-200" type="submit" >Add Member</button>
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
                <div class="items-center w-full px-4 pt-2 text-gray-800 inline-flex">
                    <h2 class="mx-auto w-1/5 md:pl-2">Email</h2>
                    <div class="mx-auto w-4/5">
                        <div class=" relative ">
                            <input type="text" v-model="email" id="user-info-email" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full md:w-1/2 py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" placeholder="Email"/>
                        </div>
                    </div>
                </div>
                <div class="items-center w-full px-4 py-4 text-gray-800 inline-flex">
                    <h2 class="mx-auto w-1/5 md:pl-2 ">Role</h2>
                    <div class="mx-auto w-4/5">
                        <div class="w-full relative mx-auto">
                            <label class="items-center space-x-3" for="admin">
                                <input type="checkbox" v-model="role" class="form-tick bg-white bg-check h-5 w-5 border border-gray-300 rounded-md checked:bg-blue-500 border-transparent focus:outline-none" value="admin" id="admin"/>
                                <span class="text-gray-500 dark:text-white font-normal">Admin</span>
                            </label>
                            <label class="items-center space-x-3 ml-2" for="volunteer">
                                <input type="checkbox" v-model="role" class="form-tick bg-white bg-check h-5 w-5 border border-gray-300 rounded-md checked:bg-blue-500 border-transparent focus:outline-none" value="volunteer" id="volunteer"/>
                                <span class="text-gray-500 dark:text-white font-normal">Volunteer</span>
                            </label>
                            <label class="items-center space-x-3 ml-2" for="supporter">
                                <input type="checkbox" v-model="role" class="form-tick bg-white bg-check h-5 w-5 border border-gray-300 rounded-md checked:bg-blue-500 border-transparent focus:outline-none" value="supporter" id="supporter"/>
                                <span class="text-gray-500 dark:text-white font-normal">Supporter</span>
                            </label>
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
                    <th scope="col" class="w-3/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Name</th>
                    <th scope="col" class="w-3/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Email</th>
                    <th scope="col" class="w-1/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Role</th>
                    <th scope="col" class="w-2/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Created at</th>
                    <th scope="col" class="w-2/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">status</th>
                    <th scope="col" class="w-1/12 px-5 py-3 bg-white border-b border-gray-200 text-gray-800 text-left text-sm uppercase font-normal">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="member in members">
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">1</td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ member.name }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ member.email }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ member.member_type }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><p class="text-gray-900 whitespace-no-wrap">{{ member.created_at }}</p></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <span v-if="member.status == '0'" class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">active</span>
                        </span>
                        <span v-else class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                        <span aria-hidden="true" class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                        <span class="relative">deactived</span>
                        </span>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex flex-row justify-between">
                            <router-link :to="{name: 'member-edit', params: { id: member.id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current text-gray-500" viewBox="0 0 20 20"><path d="M12.3 3.7l4 4L4 20H0v-4L12.3 3.7zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg>
                            </router-link>
                            <a href="#" class="apperance-none"  @click="deleteMember(member.id)">
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
            members: {},
            name : "",
            email: "",
            role: [],
            count:1,
        };
    },
    created: function() {
        this.getMembers();
    },
    methods: {
        getMembers: function() {
            axios
                .get("../api/member")
                .then(result => {
                    console.log(result);
                    this.members = result.data.data;
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
