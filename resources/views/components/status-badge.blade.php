<div class="inline-flex items-center gap-2 rounded-full border px-3 py-1 text-sm font-semibold shadow-sm
    @if ($type === 'TIDAK AKTIF')
        border-rose-200 bg-rose-50 text-rose-700
    @else
        border-emerald-200 bg-emerald-50 text-emerald-700
    @endif">
    <div class="h-2.5 w-2.5 rounded-full
        @if ($type === 'TIDAK AKTIF')
            bg-rose-500
        @else
            bg-emerald-500
        @endif"></div>
    {{ $type === 'TIDAK AKTIF' ? 'Tidak Aktif' : 'Aktif' }}
</div>