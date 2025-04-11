<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Daftar LOMBA</h2>
    </x-slot>

    @if(session('success'))
        <div class="text-green-600">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="text-red-600">{{ session('error') }}</div>
    @endif

    <div class="mt-4 space-y-4">
        @foreach($lombas as $lomba)
            <div class="p-4 border rounded shadow">
                <h3 class="text-lg font-bold">{{ $lomba->judul }}</h3>
                <p>{{ $lomba->deskripsi }}</p>
                <p><strong>Jenis:</strong> {{ $lomba->jenis }}</p>
                <p><strong>Tanggal:</strong> {{ $lomba->tanggal }}</p>
                <p><strong>Lokasi:</strong> {{ $lomba->lokasi }}</p>
                <form action="{{ route('lomba.daftar', $lomba->id) }}" method="POST">
                    @csrf
                    <x-primary-button>Daftar</x-primary-button>
                </form>
            </div>
        @endforeach
    </div>
</x-app-layout>
