<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Riwayat LOMBA</h2>
    </x-slot>

    <div class="mt-4">
        @forelse($riwayat as $item)
            <div class="p-4 border mb-2">
                <h3 class="font-semibold">{{ $item->lomba->judul }}</h3>
                <p>{{ $item->lomba->tanggal }} - {{ $item->lomba->lokasi }}</p>
            </div>
        @empty
            <p>Kamu belum pernah mendaftar LOMBA.</p>
        @endforelse
    </div>
</x-app-layout>
