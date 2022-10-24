<div x-data="{
         title: @entangle('title'),
         details: @entangle('details'),
         deadline: @entangle('deadline'),
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
        Swal.fire({
            icon: 'success',
            title: '作成完了！',
            timer: 1000,
            showConfirmButton: false,
        })
    "
>
    <x-user.drag-bar-style></x-user.drag-bar-style>
    <main x-data="{ isChecked: false }" class="w-3/5 pt-2 mt-2 mx-auto" for="bt">
        <section class="shadow row">
            <div class="tabs bg-white">
                <div class="border-b overflow-hidden">
                    <div class="border-l-2 border-transparent relative">
                        <input @click="isChecked = !isChecked"
                            class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox"                          ¸¸
                            id="bt">
                        <header
                            class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label">
                            <span class="text-grey-darkest font-thin text-xl">新規作成</span>
                            <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24"
                                    stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                a                                                                                                                                                                                                                                                    viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </header>
                        <div class="tab-content max-h-0" :class=" isChecked ? 'max-h-screen' : ''">
                            <form class="m-4">
                                <x-user.input name="title" 
                                              id="title" 
                                              type="text" 
                                              placeholder="title"
                                              required="true"
                                ></x-user.input>
                                <x-user.input name="details" 
                                              id="details" 
                                              type="text" 
                                              placeholder="details"
                                              required="true"
                                ></x-user.input>
                                <x-user.input name="deadline" 
                                              id="deadline" 
                                              type="date" 
                                              placeholder="deadline"
                                ></x-user.input>
                                <x-user.button text="作成"
                                               emit="save-create-confirm"
                                ></x-user.button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
