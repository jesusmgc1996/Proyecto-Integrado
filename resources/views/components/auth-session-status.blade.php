@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-gray-900']) }}>
        {{ $status }}
    </div>
@endif
