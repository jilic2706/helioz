<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ request()->routeIs('leave-requests.show') ? __('Requests') : __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            <div class="flex">
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $leave_request->created_at->diffForHumans() }}
                </p>

                <p class="opacity-70 ml-8">
                    <strong>Updated: </strong> {{ $leave_request->updated_at->diffForHumans() }}
                </p>

                {{-- <a href="{{ route('leave-requests.edit', $leave-request) }}" class="btn-link ml-auto">Edit Request</a> --}}

                {{-- <form action="{{ route('leave-requests.destroy', $leave-request) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4">Move To Trash</button>
                </form> --}}
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-4xl">
                    {{ $leave_request->user->name }}
                </h2>
                <p class="mt-6 whitespace-pre-wrap">{{ $leave_request->reason }}</p>
            </div>
        </div>
    </div>
</x-app-layout>