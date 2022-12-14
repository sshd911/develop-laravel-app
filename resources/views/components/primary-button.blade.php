@props(['type', 'text', 'emit', 'click'])

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}
    @isset($emit) @click="$wire.emit('{{ $emit }}')" @endisset
    @isset($click) @click="isEdit = !isEdit" @endisset
    >
    @isset($slot) {{ $slot }} @endisset
    @isset($text) {{ __($text) }} @endisset
</button>
