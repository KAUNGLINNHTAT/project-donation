@extends('layouts.app')
@section('content')
<div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Welcome</h1>
                <p class="text-gray-400 dark:text-gray-400">{{ __('messages.title.donations.cdm') }}</p>
            </div>
            <div class="m-7">
                <form method="POST" id="form">
                    @csrf
                    <div class="mb-6">
                        <label for="first_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('messages.label.first_name') }}</label>
                        <input type="text" name="first_name" id="first_name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <label for="last_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('messages.label.last_name') }}</label>
                        <input type="text" name="last_name" id="last_name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">{{ __('messages.label.email') }}</label>
                        <input type="email" name="email" id="email" placeholder="you@example.com" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="text-sm text-gray-600 dark:text-gray-400">{{ __('messages.label.amount') }}</label>
                        <input type="text" name="amount" id="amount" placeholder="1" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-3">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox"><span class="ml-2">{{ __('messages.label.hide_name') }}</span>
                        </label>
                    </div>
                    <div class="mb-6">
                        <label class="flex items-center">
                            <input type="checkbox" class="form-checkbox"><span class="ml-2">{{ __('messages.label.hide_amount') }}</span>
                        </label>
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">{{ __('messages.button.donate') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
