@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold text-blue-700 mb-2">{{ $berita->judul }}</h2>
    <p class="text-sm text-gray-500 mb-4">🖊️ Oleh: {{ $berita->user->name }} | {{ $berita->created_at->format('d M Y') }}</p>

    <img src="{{ asset('storage/' . $berita->foto) }}" class="w-full rounded-xl shadow mb-6" alt="">

    <div class="prose max-w-full text-gray-800">
        {!! nl2br(e($berita->konten)) !!}
    </div>

    <a href="{{ route('berita.index') }}"
       class="inline-block mt-6 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded transition">
        🔙 Kembali
    </a>
</div>
@endsection
