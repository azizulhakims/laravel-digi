@props(['message'])

@if ($message)
    {{-- <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}> --}}
    {{-- @foreach ((array) $messages as $message) --}}
    <p {{ $attributes->merge(['class'=> 'text-danger']) }} class="text-danger">{{ $message }}</p>
    {{-- @endforeach --}}
    {{-- </ul> --}}
@endif
