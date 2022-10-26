<div x-data="{
         isEdit: @entangle('isEdit').defer,
         name: @entangle('name').defer,
         email: @entangle('email').defer,
         postcode: @entangle('postcode').defer,
         telephone: @entangle('telephone').defer,
         birthday: @entangle('birthday').defer,
         gender: @entangle('gender').defer,
    }"
>


@foreach ($attributes as $attribute)
        <div class="py-2" x-show="!isEdit">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 m-4 drop-shadow">
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold text-xl">基本設定</div>
                            <div class="flex-1">
                                <button @click="isEdit = !isEdit">編集</button>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">氏名</div>
                            <div class="flex-1">{{ $attribute->id }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">メールアドレス</div>
                            <div class="flex-1">{{ $attribute->email }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">電話番号</div>
                            <div class="flex-1">{{ $attribute->telephone }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">郵便番号</div>
                            <div class="flex-1">{{ $attribute->postcode }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">生年月日</div>
                            <div class="flex-1">{{ $attribute->birthday }}</div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">性別</div>
                            <div class="flex-1">{{ $attribute->gender }}</div>
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
                            <div class="flex-1">
                                <button @click="isEdit = !isEdit">編集</button>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">氏名</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->name }}"
                                              id="title" 
                                              model="title"
                                              type="text" 
                                              placeholder="title"
                                              required="true"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">メールアドレス</div>
                            <div class="flex-1">
                                <x-user.input value="email"
                                              id="email" 
                                              model="email"
                                              type="email" 
                                              placeholder="nihon@taro.com"
                                              required="true"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
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
                        </div>
                        <div class='flex flex-wrap'>
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
                        </div>
                        <div class='flex flex-wrap'>
                            <div class="flex-1 font-bold">生年月日</div>
                            <div class="flex-1">
                                <x-user.input value="{{ $attribute->birthday }}"
                                              id="birthday" 
                                              model="birthday"
                                              type="string" 
                                              placeholder="birthday"
                                              required="birthday"
                                ></x-user.input>
                            </div>
                        </div>
                        <div class='flex flex-wrap'>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>