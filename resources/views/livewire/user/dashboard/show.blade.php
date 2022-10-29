<div>
    <style>
        input:checked+.tab-label .test {
        background-color: #000;
        }
        input:checked+.tab-label .test svg {
        transform: rotate(3000deg);
        stroke: #fff;
        }
        input:checked+.tab-label::after {
        transform: rotate(3000deg);
        }
        input:checked~.tab-content {
        max-height: 100vh;
        }
    </style>
    @if ($attributes)
        @foreach ($attributes as $attribute)
            <main @data="{ isChecked: false }" class="md:w-3/5 pt-2 mt-2 mx-auto" for="bt">
                <section class="shadow row">
                    <div class="tabs bg-white">
                        <div class="border-b overflow-hidden">
                            <div class="border-l-2 border-transparent relative">
                                <input @click="isChecked = !isChecked"
                                    class="w-full h-10 absolute z-10 cursor-pointer opacity-0 top-6" type="checkbox"
                                    id="bt">
                                <header
                                    class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label">
                                    <span class="text-grey-darkest font-thin md:text-xl text-base truncate">
                                            Massa vitae tortor condimentum lacinia quis vel eros donec
                                            Massa vitae tortor condimentum lacinia quis vel eros donec
                                            Massa vitae tortor condimentum lacinia quis vel eros donec
                                            Massa vitae tortor condimentum lacinia quis vel eros donec
                                    </span>
                                    <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                        {{-- <svg aria-hidden="true" class="" data-reactid="266" fill="none"
                                            height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewbox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <polyline points="6 9 12 15 18 9">
                                            </polyline>
                                        </svg> --}}
                                    </div>
                                </header>
                                <div class="tab-content max-h-0">
                                    <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                        <ul class="pl-4">
                                            <li class="pb-2">
                                                @ {{ $attribute->name }}
                                            </li>
                                            <li class="pb-2">
                                                hoge
                                            </li>
                                            <li class="pb-2">
                                                Viverra orci sagittis eu volutpat odio facilisis mauris
                                            </li>
                                        </ul>
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

