<div x-data="{
        attributes: @entangle('attributes').defer,
    }"
    
    @save-create-confirm.window=" 
        Swal.fire({
            icon: 'question',
            title: '下記の内容で更新しますか？',
            showCancelButton: true,
            confirmButtonText: '作成',
            cancelButtonText: '修正',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.emit('save-create');
            }
        });
    "
    @save-create-successful.window=" 
        Swal.fire({
            icon: 'success',
            title: '更新完了！',
            timer: 1000,
            showConfirmButton: false,
        }).then((result) => {});
    "
>
    <x-user.drag-bar-style></x-user.drag-bar-style>
    @if ($attributes)
        @foreach ($attributes as $attribute)
            <main x-data="{ isChecked: false, isEdit: false }" class="md:w-3/5 pt-2 mt-2 mx-auto" for="bt">
                <section x-show="!isEdit"
                         class="shadow row">
                    <div class="tabs bg-white">
                        <div class="border-b overflow-hidden">
                            <div class="border-l-2 border-transparent relative">
                                <header class="flex flex-wrap pt-4 pl-10 pr-8">
                                    <div class="flex-1 font-bold">タスク名</div>
                                    <div class="flex-1 pl-16">{{ $attribute->title }}</div>
                                    <div class="flex-none sm:flex sm:items-center sm:ml-6">
                                        <div class="flex-none rounded-full border border-grey flex items-center justify-center w-6 h-6 mr-4 test">
                                            <input @click="isChecked = !isChecked"
                                                   class="w-6 h-6 absolute cursor-pointer opacity-0" type="checkbox" id="bt">
                                            <svg aria-hidden="true" class="" data-reactid="266" fill="none"
                                                height="24" stroke="#606F7B" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <x-dropdown align="right" width="48" original="-top-4 right-6">
                                        <x-slot name="trigger">
                                            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">︙</button>
                                        </x-slot>
                                        <x-slot name="content">
                                            <x-user.dropdown-button event="isEdit"
                                                                    text="編集"
                                                                    option="true"
                                                                    isChecked="isChecked"
                                            >
                                            </x-user.dropdown-button>
                                        </x-slot>
                                    </x-dropdown>
                                </header>
                                <div class="tab-content max-h-0 m-1.5" :class="isChecked ? 'max-h-screen' : ''">
                                    <div class="pl-8 pr-8 pb-5 text-grey-darkest p-2">
                                        <div class='flex flex-wrap mb-6'>
                                            <div class="flex-1 font-bold">表示名</div>
                                            <div class="flex-1">{{ $attribute->details }}</div>
                                        </div>
                                        <div class='flex flex-wrap mb-6'>
                                            <div class="flex-1 font-bold">詳細</div>
                                            <div class="flex-1">{{ $attribute->deadline }}</div>
                                        </div>
                                        <div class='flex flex-wrap mb-6'>
                                            <div class="flex-1 font-bold">備考</div>
                                            <div class="flex-1">{{ $attribute->remarks }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section x-show="isEdit" class="shadow row">
                    <div class="tabs bg-white">
                        <div class="border-b overflow-hidden">
                            <div class="border-l-2 border-transparent relative">
                                <input @click="isChecked = !isChecked"
                                       class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="bt">
                                    <header class="flex flex-wrap pt-4 pl-10 pr-8">
                                        <div class="flex-1 font-bold">タスク名</div>
                                        <div class="flex-1 pl-20">{{ $attribute->title }}</div>
                                        <div class="flex-none sm:flex sm:items-center sm:ml-6">
                                            <div class="flex-none rounded-full border border-grey flex items-center justify-center w-6 h-6 mr-4 test">
                                                <input @click="isChecked = !isChecked"
                                                       class="w-6 h-6 absolute cursor-pointer opacity-0" type="checkbox" id="bt">
                                                <svg aria-hidden="true" class="" data-reactid="266" fill="none"
                                                    height="24" stroke="#606F7B" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </div>
                                        </div>
                                        <x-dropdown align="right" width="48" original="-top-4 right-6">
                                            <x-slot name="trigger">
                                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">︙</button>
                                            </x-slot>
                                            <x-slot name="content">
                                                <x-user.dropdown-button event="isEdit"
                                                                        text="編集"
                                                                        option="true"
                                                                        isChecked="isChecked"
                                                >
                                                </x-user.dropdown-button>
                                            </x-slot>
                                        </x-dropdown>
                                    </header>
                                <div class="tab-content max-h-0" :class="isChecked ? 'max-h-screen' : ''">
                                    <div class='text-grey-darkest p-4 pl-10 flex flex-wrap flex-end'>
                                        {{-- <div class="flex-1 font-bold">タイトル</div> --}}
                                        <div class="flex-1">
                                            <x-user.input value="title"
                                                          id="title" 
                                                          model="title"
                                                          type="text" 
                                                          placeholder="Stripeの導入"
                                                          required="true"
                                            ></x-user.input>
                                        </div>
                                    </div>
                                    <div class='text-grey-darkest p-4 pl-10 flex flex-wrap'>
                                        {{-- <div class="flex-1 font-bold">詳細</div> --}}
                                        <div class="flex-1">
                                            <x-user.input value="details"
                                                          id="details" 
                                                          model="details"
                                                          type="text" 
                                                          placeholder="フレームワーク：laravel, etc..."
                                                          required="true"
                                            ></x-user.input>
                                        </div>
                                    </div>
                                    <div class='text-grey-darkest p-4 pl-10 flex flex-wrap'>
                                        {{-- <div class="flex-1 font-bold">備考</div> --}}
                                        <div class="flex-1">
                                            <x-user.input value="remarks"
                                                          id="remarks" 
                                                          model="remarks"
                                                          type="text" 
                                                          placeholder="セキュリティ高め"
                                                          required="true"
                                            ></x-user.input>
                                        </div>
                                    </div>
                                    <div class='text-grey-darkest p-4 pl-10 flex flex-wrap'>
                                        {{-- <div class="flex-1 font-bold">期限</div> --}}
                                        <div class="flex-1">
                                            <x-user.input value="deadline"
                                                          id="deadline" 
                                                          model="deadline"
                                                          type="date" 
                                                          required="true"
                                            ></x-user.input>
                                        </div>
                                    </div>
                                    <div class="m-4">
                                        <x-user.button text="更新"
                                                       emit="save-edit-confirm"
                                                       type="submit"
                                        ></x-user.button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        @endforeach
    @endif
</div>
<script>
    function closeForm(){
        setTimeout(() => {
            this.isChecked = false;
        }, 1300);
    }
</script>