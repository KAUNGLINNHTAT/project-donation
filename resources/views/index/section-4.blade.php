<div class="px-4 py-4 md:py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-5 row-gap-8 lg:grid-cols-2">
        <div class="flex flex-col justify-center">
            <div class="max-w-xl mb-6">
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">{{ __('messages.label.donation_type') }}</h2>
                <p class="text-base text-gray-700 md:text-lg">{{ __('messages.label.donation_accept') }}</p>
            </div>
            <div class="grid gap-5 row-gap-8 sm:grid-cols-2">
                <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                    <div class="h-full p-5 border border-l-0 rounded-r">
                        <h6 class="mb-2 font-semibold leading-5">{{ __('messages.label.individual_support') }}</h6>
                        <p class="text-sm text-gray-900">{{ __('messages.label.individual_msg') }}</p>
                    </div>
                </div>
                <div class="bg-white border-l-4 shadow-sm border-deep-purple-accent-400">
                    <div class="h-full p-5 border border-l-0 rounded-r">
                        <h6 class="mb-2 font-semibold leading-5">{{ __('messages.label.group_support') }}</h6>
                        <p class="text-sm text-gray-900">{{ __('messages.label.group_msg') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="bg-white border rounded-lg shadow-sm border-deep-purple-accent-400">
                <div class="h-full px-5 border border-l-0 rounded-r py-8">
                    <h2 class="max-w-lg mb-6 font-sans text-xl sm:text-2xl sm:leading-none font-bold tracking-tight text-gray-900 mx-auto text-center">{{ __('messages.label.bank_info') }}</h2>
                    <p class="mb-2  leading-5">● {{ __('messages.label.bank_name') }}</p>
                    <p class="mb-2 ml-2 mt-2 text-gray-700 text-base">▷ {{ __('messages.label.branch_code') }} : 448</p>
                    <p class="mb-2 ml-2 text-gray-700 text-base">▷ {{ __('messages.label.account_no') }} : 0976582</p>
                    <p class="mb-2 ml-2 text-gray-700 text-base">▷ {{ __('messages.label.account_name') }} : ニェイン　チャン</p>
                    <p class="mb-2 ml-2 mt-4 text-base text-red-700">{{ __('messages.label.bank_note') }} </p>
                </div>
            </div>
        </div>
    </div>
</div>