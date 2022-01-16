{{--@props(['active' => false])--}}

{{--@php--}}
{{--    $classes = 'block text-left px-4 text-sm leading-7 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white';--}}
{{--if ( $active ) $classes .= 'bg-blue-500 text-white';--}}
{{--@endphp--}}

{{--<a {{ $attributes(['class' => $classes])  }}--}}
{{-->{{ $slot }}</a>--}}
@props(['active' => false])
<a {{ $attributes->class([
  'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:g-blue-500 hover:text-white focus:text-white',
  'bg-blue-500 text-white' => $active
]) }}>{{ $slot }}</a>
