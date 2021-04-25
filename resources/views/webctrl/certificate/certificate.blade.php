@extends('webctrl.layouts.app')

@section('content')
<div class="w-full mx-auto">
    <div class="bg-white shadow-md rounded my-6">
      <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Id</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Name</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">確認者</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Type</th>
            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php $x=1; @endphp
            @forelse ($donations as $donation)
                <tr class="hover:bg-orange-100">
                    <td class="py-4 px-6 border-b border-grey-light">{{ $x++ }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $donation->first_name }} {{ $donation->last_name }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $donation->email }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">@if ($donation->confirm_flg == 1) CONFIRMED @endif</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $donation->getUser->name ?? "-" }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">{{ $donation_type[$donation->type] }}</td>
                    <td class="py-4 px-6 border-b border-grey-light">
                        <a href="{{ route('certificate.show', ['id'=> $donation->id ]) }}" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <a href="{{ route('certificate.delete', ['id'=> $donation->id ]) }}" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</td>
                    </td>
                </tr>
            @empty
                <p>No Donations list</p>
            @endforelse
        </tbody>
      </table>
    </div>
  </div>

@endsection
