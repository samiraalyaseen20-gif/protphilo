@props(['id', 'title' => '', 'description' => ''])

<div id="{{ $id }}" {{ $attributes->merge(['class' => 'fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-zinc-950/40 backdrop-blur-sm hidden']) }}>
    <div class="bg-white rounded-lg border border-zinc-200 max-w-lg w-full p-6 shadow-lg relative animate-fade-in text-right">
        
        <!-- Close -->
        <button onclick="closeModal()" class="absolute top-4 left-4 text-zinc-400 hover:text-zinc-900 rounded-md p-1 hover:bg-zinc-100 transition-colors cursor-pointer">
            <span class="material-symbols-outlined text-sm">close</span>
        </button>

        @if($title || $description)
            <div class="mb-4 space-y-1.5">
                @if($title)
                    <h2 id="modalTitle" class="text-lg font-semibold tracking-tight text-zinc-950">{{ $title }}</h2>
                @endif
                @if($description)
                    <p class="text-xs text-zinc-500">{{ $description }}</p>
                @endif
            </div>
        @endif

        {{ $slot }}
    </div>
</div>
