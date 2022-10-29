<div x-data="{
         name: @entangle('name').defer,
         email: @entangle('email').defer,
         birthday: @entangle('birthday').defer,
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
                            <div class="flex-1">{{ $attribute->name ?? '未設定'}}</div>
                        </div>
                        <div class='flex flex-wrap mb-6'>
                            <div class="flex-1 font-bold">メールアドレス</div>
                            <div class="flex-1">{{ $attribute->email }}</div>
                        </div>
                        <div class='flex flex-wrap mb-6'>
                            <div class="flex-1 font-bold">生年月日</div>
                            <div class="flex-1">{{ $attribute->birthday　}}</div>
                        </div>
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
                                <x-user.input id="name" 
                                              model="name"
                                              type="text" 
                                              placeholder="残業太郎"
                                              required="name"
                                              name="表示名"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold mb-6">メールアドレス</div>
                            <div class="flex-1">
                                <x-user.input id="email" 
                                              model="email"
                                              type="email" 
                                              placeholder="example@gmail.com"
                                              required="true"
                                              name="メールアドレス"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold mb-6">生年月日</div>
                            <div class="flex-1">
                                <x-user.input id="birthday" 
                                              model="birthday"
                                              type="date" 
                                              placeholder="birthday"
                                              required="birthday"
                                              name="生年月日"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button emit="save-edit-confirm" 
                                              text="更新" 
                                              class="ml-3"
                            ></x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
