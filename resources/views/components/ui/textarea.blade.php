@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => 'flex min-h-[60px] w-full rounded-md border border-zinc-200 bg-transparent px-3 py-2 text-xs shadow-sm placeholder:text-zinc-400 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-zinc-950 disabled:cursor-not-allowed disabled:opacity-50']) }}>{{ $slot }}</textarea>
