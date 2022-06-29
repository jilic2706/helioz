<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requests') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('leave-requests.store') }}" method="post">
                    @csrf
                    <label class="text-base font-black uppercase" for="reason">Reason</label>
                    <x-textarea
                        id="reason"
                        name="reason"
                        rows="10"
                        field="text"
                        placeholder="Start typing here..."
                        class="w-full mt-1.5"
                        :value="@old('text')"></x-textarea>
                    
                    <x-button class="mt-6">Issue Leave Request</x-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>