@props(['variant' => 'default'])

@php
    $base = 'inline-flex items-center rounded-full border px-2.5 py-0.5 text-[10px] font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';
    
    $variants = [
        'default' => 'border-transparent bg-zinc-900 text-zinc-50 shadow hover:bg-zinc-900/80',
        'secondary' => 'border-transparent bg-zinc-100 text-zinc-900 hover:bg-zinc-100/80',
        'destructive' => 'border-transparent bg-red-500 text-zinc-50 shadow hover:bg-red-500/80',
        'outline' => 'text-zinc-950 border-zinc-200',
    ];

    $classes = $base . ' ' . $variants[$variant] . ' ' . ($attributes->get('class') ?? '');
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
