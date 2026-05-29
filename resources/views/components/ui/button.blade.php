@props([
    'variant' => 'default',
    'size' => 'default',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-xs font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 disabled:pointer-events-none disabled:opacity-50';
    
    $variants = [
        'default' => 'bg-zinc-900 text-zinc-50 shadow hover:bg-zinc-900/90',
        'destructive' => 'bg-red-500 text-zinc-50 shadow-sm hover:bg-red-500/90',
        'outline' => 'border border-zinc-200 bg-white shadow-sm hover:bg-zinc-100 hover:text-zinc-900',
        'secondary' => 'bg-zinc-100 text-zinc-900 shadow-sm hover:bg-zinc-100/80',
        'ghost' => 'hover:bg-zinc-100 hover:text-zinc-900',
        'link' => 'text-zinc-900 underline-offset-4 hover:underline',
    ];

    $sizes = [
        'default' => 'h-9 px-4 py-2',
        'sm' => 'h-8 rounded-md px-3 text-[10px]',
        'lg' => 'h-10 rounded-md px-8',
        'icon' => 'h-9 w-9',
    ];

    $classes = $base . ' ' . $variants[$variant] . ' ' . $sizes[$size] . ' ' . ($attributes->get('class') ?? '');
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
