<div x-data="{
         title: @entangle('title').defer,
         details: @entangle('details').defer,
         deadline: @entangle('deadline').defer,
         isChecked: false,
    }"
    @save-create-confirm.window=" 
        Swal.fire({
            icon: 'question',
            title: '下記の内容で作成しますか？',
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
        this.closeForm,
        Swal.fire({
            icon: 'success',
            title: '作成完了！',
            timer: 1000,
            showConfirmButton: false,
        }).then(() => {});
    "
>
    <main class="md:w-3/5 pt-2 mt-2 mx-auto" for="bt">
        <section class="shadow row">
            <div class="tabs bg-white">
                <div class="border-b overflow-hidden">
                    <div class="border-l-2 border-transparent relative">
                        <header class="flex flex-wrap pt-4 pl-8 pr-8">
                            <span class="flex-1 text-grey-darkest font-bold text-xl">新規作成</span>
                            <div class="flex-none sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48" original="-top-4 right-6">
                                    <x-slot name="trigger">
                                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">︙</button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-user.dropdown-button event="isChecked"
                                                                text="編集"
                                        >
                                        </x-user.dropdown-button>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </header>
                        <div class="tab-content max-h-0 m-2" :class=" isChecked ? 'max-h-screen' : ''">
                            <x-user.input name="タイトル" 
                                            id="title" 
                                            model="title"
                                            type="text" 
                                            placeholder="わかりません。お願いします＞＜"
                                            required="true"
                            ></x-user.input>
                            <x-user.input name="詳細" 
                                            id="details" 
                                            model="details"
                                            type="text" 
                                            placeholder="下記写真の...、ソースは...◇△○"
                                            required="true"
                            ></x-user.input>
                            <x-user.input name="期限" 
                                            id="deadline" 
                                            model="deadline"
                                            type="date" 
                                            placeholder="deadline"
                            ></x-user.input>
                            <div class="flex items-center justify-center mt-4">
                                <x-primary-button emit="save-create-confirm" 
                                                  text="新規作成" 
                                                  class="ml-3"
                                ></x-primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>