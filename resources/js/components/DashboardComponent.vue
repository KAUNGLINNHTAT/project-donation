<template>
  <div class="container">
    <div class="p-3">
      <p class="font-sans sm:text-2xl md:text-3xl">Dashboard</p>
    </div>
    <div class="w-full flex flex-wrap mb-2">
      <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 pt-3 px-3 md:pr-2">
        <div class="bg-blue-400 border rounded shadow p-2">
          <div class="flex flex-row items-center">
            <div class="flex-shrink pl-1 pr-4">
              <i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i>
            </div>
            <div class="flex-1 text-center lg:pb-5">
              <h3 class="text-white text-3xl">
                3249&euro;
                <span class="text-green-400">
                  <i class="fas fa-caret-down"></i>
                </span>
              </h3>
              <h5 class="text-white text-xs">Total Invoice Sent</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 pt-3 px-3 md:pl-2">
        <div class="bg-green-400 border rounded shadow p-2">
          <div class="flex flex-row items-center">
            <div class="flex-shrink pl-1 pr-4">
              <i class="fas fa-users fa-2x fa-fw fa-inverse"></i>
            </div>
            <div class="flex-1 text-center lg:pb-5">
              <h3 class="text-white text-3xl">
                13
                <span class="text-blue-400">
                  <i class="fas fa-caret-up"></i>
                </span>
              </h3>
              <h5 class="text-white text-xs">Paid Invoice</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 pt-3 px-3 md:pr-2 xl:pr-3 xl:pl-1">
        <div class="bg-yellow-300 border rounded shadow p-2">
          <div class="flex flex-row items-center">
            <div class="flex-shrink pl-1 pr-4">
              <i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i>
            </div>
            <div class="flex-1 text-center lg:pb-5">
              <h3 class="text-white text-3xl">
                2
                <span class="text-orange-400">
                  <i class="fas fa-caret-up"></i>
                </span>
              </h3>
              <h5 class="text-white text-xs">Unpaid Invoice</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2 lg:w-1/4 xl:w-1/4 pt-3 px-3 md:pr-2 xl:pr-3 xl:pl-1">
        <div class="bg-purple-600 border rounded shadow p-2">
          <div class="flex flex-row items-center">
            <div class="flex-shrink pl-1 pr-4">
              <i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i>
            </div>
            <div class="flex-1 text-center lg:pb-5">
              <h3 class="text-white text-3xl">
                2
                <span class="text-orange-400">
                  <i class="fas fa-caret-up"></i>
                </span>
              </h3>
              <h5 class="text-white text-xs">Today Donation</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
