@extends('webctrl.layouts.app')

@section('content')

<div class="w-full mx-auto">
    <div class="bg-white shadow-md rounded my-6">
        <form method="post">
        @csrf
            <input type="hidden" name="id" value="{{ $id }}">
            <table class="text-left w-full border-collapse">
                <tbody>
                    <tr class="hover:bg-grey-lighter">
                        <td class=" py-4 px-6 border-b border-grey-light">Name</td>
                        <td class="py-4 px-6 border-b border-grey-light text-gray-500">{{ $donation->first_name }} {{ $donation->last_name }}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Email</td>
                        <td class="py-4 px-6 border-b border-grey-light text-gray-500">{{ $donation->email }}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Amount</td>
                        <td class="py-4 px-6 border-b border-grey-light text-gray-500">{{ number_format($donation->amount) }}</td>
                    </tr>
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">Type</td>
                        <td class="py-4 px-6 border-b border-grey-light text-gray-500">{{ $donation_type[$donation->type] }}</td>
                    </tr>
                </tbody>
            </table>
            @if($donation->confirm_flg == 0)
                <div class="py-4 flex justify-center">
                    <a href="{{ route('certificate') }}" class="bg-gray-500 hover:bg-gray-400 uppercase text-white p-3 rounded focus:outline-none focus:shadow-outline mr-3">Declined</a>
                    <button type="submit" class="bg-green-500 hover:bg-green-700 uppercase text-white p-3 rounded focus:outline-none focus:shadow-outline">Confirm</button></td>
                </div>
            @else 
                <div class="py-4 flex justify-center">
                    <a href="{{ route('certificate') }}" class="bg-gray-500 hover:bg-gray-400 uppercase text-white p-3 rounded focus:outline-none focus:shadow-outline mr-3">BACK</a>
                </div>
            @endif
        </form>
    </div>
  </div>
@endsection
