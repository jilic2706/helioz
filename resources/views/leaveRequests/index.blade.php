<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ request()->routeIs('leave-requests.index') ? __('Requests') : __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            {{-- @if(request()->routeIs('leave-requests.index'))
                <a href="{{ route('leave_requests.create') }}" class="btn-link btn-lg mb-2">+ New Request</a>
            @endif --}}

            @forelse ($leave_requests as $leave_request)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                        {{-- <a href="{{ route('leave-requests.show', $leave_request) }}">{{ $leave_request->user()->name }}</a> --}}
                    </h2>
                    <p class="mt-2">
                        {{ Str::limit($leave_request->reason, 200) }}
                    </p>
                    <span class="block mt-4 text-sm opacity-70">{{ $leave_request->created_at->diffForHumans() }}</span>
                </div>
            @empty
                <p>You are no requests yet.</p>
            @endforelse

            {{ $leave_requests->links() }}
        </div>
    </div>
</x-app-layout>