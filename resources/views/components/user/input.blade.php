@props(['value', 'type' => '', 'placeholder' => '', 'name', 'id', 'required', 'model', 'disabled' => false ])

<div class="{{ $attributes->merge(["relative z-0 mb-6 w-full group"])}}">
       <x-input-label for="{{ $name }}" value="{{ $name }}" class='pt-2' />
                     <input class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            type="{{ $type }}"
                            name="{{ $name }}"
                            id="{{ $id }}"
                            placeholder="{{ $placeholder }}"
                            wire:model.lazy="{{ $model }}"
                            @isset($value) value="{{ $value }}" @endisset
                            @isset($required) required="{{ $required }}" @endisset
                            @if($disabled) disabled class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" @endif
                     >
       <x-input-error :messages="$errors->get('{{ $name }}')" class="mt-2" />
</div>