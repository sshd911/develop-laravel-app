@props(['event', 'text', 'option', 'isChecked'])

@isset($option)
  <span @click="{{ $event }} = !{{ $event }}; {{ $isChecked }} = true"
          {{ $attributes->merge(['class' => 'block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>
    {{ _($text) }}
  </span>
@else
  <span @click="{{ $event }} = !{{ $event }}"
          {{ $attributes->merge(['class' => 'block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>
    {{ _($text) }}
  </span>
@endisset