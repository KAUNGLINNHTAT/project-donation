@extends('layouts.app')

@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="max-w-xl mb-10 sm:mx-auto">
                <h2 class="font-sans text-2xl font-bold leading-tight tracking-tight text-gray-600 sm:text-center">{{ __('messages.about.title') }}</h2>
                <h3 class="font-sans text-xl font-bold leading-tight tracking-tight text-gray-600 sm:text-center pt-2">{{ __('messages.about.team_layout') }}</h3>
            </div>
            <div class="lg:w-4/6 mx-auto">
                <div class="rounded-lg overflow-hidden">
                    <img alt="content" class="object-fit w-full " src="image/team.png">
                </div>
            </div>
        </div>
    </section>
    <div class="relative px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.it_team')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.it_team_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.donation_check')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.donation_check_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.funraisng')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.funraisng_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.info_team')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.info_team_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.donation_usage_check')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.donation_usage_check_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.pamphlet')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.pamphlet_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-white rounded shadow-xl group hover:shadow-2xl">
                <div class="p-5">
                    <p class="pt-5 mb-2 font-bold">{{ __('messages.team.certificate')}}</p>
                    <p class="text-sm leading-5 text-gray-900">{{ __('messages.team.certificate_work')}}</p>
                </div>
                <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
            </div>
        </div>
    </div>
@endsection