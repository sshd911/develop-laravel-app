@props(['type', 'text', 'emit'])

<button class="mt-4 mr-0 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        @isset($type) type="{{ $type }}" @endisset
        @isset($emit) x-on:click="$wire.emit('{{ $emit }}')" @endisset
>{{ $text }}</button>
