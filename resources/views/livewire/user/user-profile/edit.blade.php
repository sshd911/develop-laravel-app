<div x-data="{
         name: @entangle('name').defer,
         email: @entangle('email').defer,
         postcode: @entangle('postcode').defer,
         telephone: @entangle('telephone').defer,
         birthday: @entangle('birthday').defer,
         gender: @entangle('gender').defer,
         isEdit: false,
    }"
>


@foreach ($attributes as $attribute)
        <div class="py-2" x-show="!isEdit">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold text-xl">基本設定</div>
                            <div class="mb-8">
                                <div class="sm:flex sm:items-center sm:ml-6">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">︙</button>
                                        </x-slot>
                                        <x-slot name="content">
                                            <x-user.dropdown-button event="isEdit"
                                                                    text="編集"
                                            >
                                            </x-user.dropdown-button>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </div>
                        </div>
                        <div class='flex flex-wrap mb-6'>
                            <div class="flex-1 font-bold">表示名</div>
                            <div class="flex-1">{{ $attribute->name }}</div>
                        </div>
                        <div class='flex flex-wrap mb-6'>
                            <div class="flex-1 font-bold">メールアドレス</div>
                            <div class="flex-1">{{ $attribute->email }}</div>
                        </div>
                        {{-- <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">電話番号</div>
                            <div class="flex-1">{{ $attribute->telephone }}</div>
                        </div> --}}
                        {{-- <div class='flex flex-wrap'> --}}
                            {{-- <div class="flex-1 font-bold">郵便番号</div> --}}
                            {{-- <div class="flex-1">{{ $attribute->postcode }}</div> --}}
                        {{-- </div> --}}
                        <div class='flex flex-wrap mb-6'>
                            <div class="flex-1 font-bold">生年月日</div>
                            <div class="flex-1">{{ $attribute->birthday }}</div>
                        </div>
                        {{-- <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">性別</div>
                            <div class="flex-1">{{ $attribute->gender }}</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2" x-show="isEdit">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold text-xl">基本設定</div>
                            <div class="mb-8">
                                <div class="hidden sm:flex sm:items-center sm:ml-6">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                <div class="ml-1">︙</div>
                                            </button>
                                        </x-slot>
                                        <x-slot name="content">
                                                <x-user.dropdown-button event="isEdit"
                                                                        text="編集"
                                                >
                                                </x-user.dropdown-button>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold mb-6">表示名</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->name }}"
                                              id="title" 
                                              model="title"
                                              type="text" 
                                              placeholder="残業太郎"
                                              required="true"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold mb-6">メールアドレス</div>
                            <div class="flex-1">
                                <x-user.input value="email"
                                              id="email" 
                                              model="email"
                                              type="email" 
                                              placeholder="example@gmail.com"
                                              required="true"
                                ></x-user.input>
                            </div>
                        </div>
                        {{-- <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">電話番号</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->telephone }}"
                                              id="telephone" 
                                              model="telephone"
                                              type="text" 
                                              placeholder="telephone"
                                              required="true"
                                ></x-user.input>
                            </div>
                        </div> --}}
                        {{-- <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">郵便番号</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->postcode }}"
                                              id="postcode" 
                                              model="postcode"
                                              type="text" 
                                              placeholder="postcode"
                                              required="true"
                                ></x-user.input>
                            </div>
                        </div> --}}
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold mb-6">生年月日</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->birthday }}"
                                              id="birthday" 
                                              model="birthday"
                                              type="date" 
                                              placeholder="birthday"
                                              required="birthday"
                                ></x-user.input>
                            </div>
                        </div>
                        {{-- <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">性別</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->gender }}"
                                              id="gender" 
                                              model="gender"
                                              type="radio" 
                                              placeholder="tigendertle"
                                              required="gender"
                                ></x-user.input>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>