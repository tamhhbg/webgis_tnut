{{-- resources/views/xuong/show.blade.php --}}
<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-6 bg-white shadow-lg rounded-lg">
        <!-- Tiêu đề -->
        <h1 class="text-4xl font-bold text-red-600 mb-4 border-b pb-2">
            {{ $xuong->name }}
        </h1>

        <!-- Nội dung chi tiết -->
        <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
            {!! $xuong->content !!}
        </div>

        <!-- Quay lại -->
        <div class="mt-8">
            <a href="{{ route('xuong.index') }}"
               class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                ← Quay lại danh sách
            </a>
        </div>
    </div>
</x-app-layout>
