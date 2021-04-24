@extends('layouts.app')
@section('content')
<div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm text-center">
            <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200 mb-6">{{ __('messages.label.thank_donate') }}</h1>
            <p class="text-gray-400 dark:text-gray-400 mb-6">{{ __('messages.label.show_qrcode') }}</p>
        <div>
        <div class="mx-auto flex justify-center p-4 mb-6">
            <a href="{{ $certificate_url }}" target="_blank">{{ $qr_code }}</a>
        </div>
    </div>
</div>
@endsection
