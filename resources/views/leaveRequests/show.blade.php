<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requests') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            <div class="flex justify-center">
                <p class="opacity-70 self-center ">
                    <strong>Issued By: </strong> {{ $leave_request->user->name }}
                </p>

                <p class="opacity-70 ml-8 self-center">
                    <strong>Created: </strong> {{ $leave_request->created_at->diffForHumans() }}
                </p>

                <p class="opacity-70 ml-8 self-center">
                    <strong>Updated: </strong> {{ $leave_request->updated_at->diffForHumans() }}
                </p>

                {{-- <a href="{{ route('leave-requests.edit', $leave-request) }}" class="btn-link ml-auto">Edit Request</a> --}}

                <form action="{{ route('leave-requests.destroy', $leave_request) }}" method="post" class="ml-auto">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you wish to permanently delete this request?');">Delete</button>
                </form>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="font-bold text-4xl">
                    {{ $leave_request->uuid }}
                </h2>
                <p class="mt-6 whitespace-pre-wrap">{{ $leave_request->reason }}</p>
            </div>
        </div>
    </div>
</x-app-layout>