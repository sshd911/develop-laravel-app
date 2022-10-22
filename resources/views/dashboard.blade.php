<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    @if($attributes)
        @foreach($attributes as $attribute)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                            {{ $attribute->id }}
                        </div>
                        <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                            {{ $attribute->name }}
                        </div>
                        <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                            {{ $attribute->email }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</x-app-layout>
