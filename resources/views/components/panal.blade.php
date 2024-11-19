@php
    $classes ="p-4 bg-white/5 rounded-xl  text-center border border-transparent hover:border-blue-800 transition-colors duration-500 group"
@endphp
<div {{$attributes(['class' => $classes])}}>
{{$slot}}
</div>