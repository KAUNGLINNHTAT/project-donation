<template>
  <div>
    <div v-if="showModal" class="overflow-x-hidden overflow-y-auto fixed m:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto inset-0 z-50 outline-none focus:outline-none justify-center items-center flex">
      <div class="relative w-auto my-6 mx-auto w-full px-0">
        <!--content-->
        <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
          <!--header-->
          <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
            <h3 class="text-2xl font-semibold text-gray-600" v-html="themodaltitle"></h3>
            <button class="p-1 pt-0 ml-auto bg-transparent border-0 text-black float-right text-3xl leading-none font-semibold outline-none focus:outline-none" v-on:click="toggleModal()">
              <span class="bg-transparent text-gray-600 h-6 w-6 text-2xl block outline-none focus:outline-none"> × </span>
            </button>
          </div>
          <!--body-->
            <div class="relative p-6 flex-auto">
                <header class="flex flex-col justify-center items-center p-3 text-green-600">
                    <div class="flex justify-center w-16 h-16 border-4 border-green-600 rounded-full mb-4">
                        <svg class="fill-current w-20" viewBox="0 0 20 20"><path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z"></path></svg>
                    </div>
                    <h2 class="font-semibold text-2xl">Success</h2>
                </header>
            </div>
        </div>
      </div>
    </div>
    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
  </div>
</template>
<script>
export default {
    name: "large-modal",
    data() {
        return {
            showModal: false,
            themodaltitle: "Modal Title",
        }
    },
    methods: {
        toggleModal: function(){
            this.showModal = !this.showModal;
        }
    },
}
</script>