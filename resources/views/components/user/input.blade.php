@props(['value', 'type', 'placeholder', 'name', 'id', 'required', 'model'])

<div class="{{ $attributes->merge(["relative z-0 mb-6 w-full group"])}}">
       <x-input-label for="{{ $name }}" value="{{ $name }}" class='pt-2' />
                     <input class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            @isset($type) type="{{ $type }}" @endisset
                            @isset($name) name="{{ $name }}" @endisset
                            @isset($name) id="{{ $name }}" @endisset
                            @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
                            @isset($required) required="{{ $required }}" @endisset
                            @isset($model) wire:model.lazy="{{ $model }}" @endisset
                            @isset($value) value="{{ $value }}" @endisset
                     >
       <x-input-error :messages="$errors->get('{{ $name }}')" class="mt-2" />
</div>