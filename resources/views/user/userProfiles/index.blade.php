<x-app-layout>
    @foreach ($attributes as $attribute)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        <div class="font-bold text-xl">基本設定</div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">氏名</div>
                            <div class="flex-1">{{ $attribute->id }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">メールアドレス</div>
                            <div class="flex-1">{{ $attribute->id }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">電話番号</div>
                            <div class="flex-1">{{ $attribute->id }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">郵便番号</div>
                            <div class="flex-1">{{ $attribute->id }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
