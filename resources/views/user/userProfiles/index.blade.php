<x-app-layout>
    @foreach ($attributes as $attribute)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        {{ $attribute->id }}
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        {{ '' }}
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        {{ '' }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
